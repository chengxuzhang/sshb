<?php
namespace frontend\controllers;

use frontend\models\ProductAttribute;
use frontend\models\Village;
use Yii;
use yii\web\Response;
use frontend\components\BaseController;
use frontend\components\CacheConfig;
use yii\data\Pagination;
use frontend\models\MobileUser;
use frontend\models\OfferInfo;
use frontend\models\HouseType;
use frontend\models\Organization;
use frontend\models\Product;
use frontend\models\VillageStyleRelationship;
use OSS\OssClient;
use OSS\Core\OssException;

/**
 * 报价管理控制器
 */
class OfferController extends BaseController
{
    public $enableCsrfValidation = false;
    private $cookieName = "zhenjiaoffercookie";
    private $cookieLoginTimeOut = 365 * 24 * 3600;
    private $sessionName = "zhenjia_mobile_user_offer";

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * 首页
     * @return [type] [description]
     */
    public function actionIndex(){
        $cookies= Yii::$app->request->cookies;
        $session = Yii::$app->session;
        if($cookies->has($this->cookieName)){
            $session->setId($cookies->getValue($this->cookieName));
        }
        $userInfo = $session->get($this->sessionName);

        if(!$userInfo){
            $this->redirect(array('/offer/login.html'));
            return false;
        }
        
        $this->layout = 'weui';
        return $this->render('index', [
            'title' => '清单列表'
        ]);
    }

    /**
     * 获取风格
     */
    public function actionVillageStyle($vid){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $villageStyle = VillageStyleRelationship::findOne(['village_id'=>$vid]);
        if(!$villageStyle){
            $villageStyle = new VillageStyleRelationship();
            $villageStyle->village_id = $vid;
            $villageStyle->style = CacheConfig::getConfigCache('house_style');
        }
        return success($villageStyle);
    }

    /**
     * 创建Excel文档并保存到OSS
     */
    public function actionCreateExcelUrl($projectNum = null){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $cookies= Yii::$app->request->cookies;
        $session = Yii::$app->session;
        if($cookies->has($this->cookieName)){
            $session->setId($cookies->getValue($this->cookieName));
        }
        $userInfo = $session->get($this->sessionName);

        if(!$userInfo){
            return fail(403, "无权限操作！");
        }
        if($projectNum == null){
            return fail(400, "参数错误！");
        }

        $offerInfo = OfferInfo::findOne(['project_num'=>$projectNum]);
        if(!$offerInfo){
            return fail(400, "请先创建项目！");
        }
        if($offerInfo->is_create_excel == self::COMMON_STATUS_ACTIVE){
            return success();
        }
        $json = json_decode($offerInfo->project_attribute, true);
        foreach ($json as $key => $item) {
            $product = Product::findOne($item['pid']);
            $attr = ProductAttribute::findOne($item['cid']);
            $json[$key]['position'] = $product->position;
            $json[$key]['pname'] = $product->name;
            $json[$key]['cname'] = $attr->name;
        }

        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->setTitle('Simple');

        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(30);

        $objPHPExcel->getActiveSheet()->mergeCells('B2:F2');
        $objPHPExcel->getActiveSheet()->setCellValue('B2', '真家科技有限责任公司');
        $objPHPExcel->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $objPHPExcel->getActiveSheet()->mergeCells('G2:H2');
        $objPHPExcel->getActiveSheet()->setCellValue('G2', 'NO：'.$projectNum);

        $objPHPExcel->getActiveSheet()->mergeCells('B3:H6');
        $objPHPExcel->getActiveSheet()->getStyle('B3')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
        $objPHPExcel->getActiveSheet()->getStyle('B3')->getFill()->getStartColor()->setARGB(\PHPExcel_Style_Color::COLOR_RED);
        $objPHPExcel->getActiveSheet()->setCellValue('B3', '产品清单');
        $objPHPExcel->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('B3')->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setSize(36);
        $objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->getColor()->setARGB(\PHPExcel_Style_Color::COLOR_WHITE);

        $objPHPExcel->getActiveSheet()->setCellValue('B8', '客户姓名：');
        $objPHPExcel->getActiveSheet()->setCellValue('E8', '联系电话：');
        $objPHPExcel->getActiveSheet()->setCellValue('B9', '住房信息：');
        $objPHPExcel->getActiveSheet()->setCellValue('E9', '风    格：');
        $objPHPExcel->getActiveSheet()->setCellValue('B10', '楼栋单元室信息：');
        $cellList = "B8,e8,b9,e9,b10";
        foreach (explode(",", $cellList) as $item) {
            $objPHPExcel->getActiveSheet()->getStyle($item)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        }
        $objPHPExcel->getActiveSheet()->mergeCells('c8:d8');
        $objPHPExcel->getActiveSheet()->mergeCells('f8:h8');
        $objPHPExcel->getActiveSheet()->mergeCells('c9:d9');
        $objPHPExcel->getActiveSheet()->mergeCells('f9:h9');
        $objPHPExcel->getActiveSheet()->mergeCells('c10:h10');
        $objPHPExcel->getActiveSheet()->setCellValue('C8', $offerInfo->client_name);
        $objPHPExcel->getActiveSheet()->setCellValue('f8', $offerInfo->client_phome);
        $objPHPExcel->getActiveSheet()->setCellValue('c9', $offerInfo->house_type ." ". $offerInfo->house_type_name ." ". $offerInfo->house_area);
        $objPHPExcel->getActiveSheet()->setCellValue('f9', $offerInfo->house_style);
        $objPHPExcel->getActiveSheet()->setCellValue('c10', $offerInfo->house_address);

        $cellList = "B12,C12,E12,F12,H12";
        foreach (explode(",", $cellList) as $item) {
            $objPHPExcel->getActiveSheet()->getStyle($item)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle($item)->getFont()->setBold(true);
        }
        $objPHPExcel->getActiveSheet()->mergeCells('c12:d12');
        $objPHPExcel->getActiveSheet()->mergeCells('f12:g12');
        $objPHPExcel->getActiveSheet()->setCellValue('B12', '序列号');
        $objPHPExcel->getActiveSheet()->setCellValue('C12', '选择颜色');
        $objPHPExcel->getActiveSheet()->setCellValue('E12', '位置');
        $objPHPExcel->getActiveSheet()->setCellValue('F12', '产品名称');
        $objPHPExcel->getActiveSheet()->setCellValue('H12', '金额');

        $startIndex = 13;
        $total = 0;
        foreach ($json as $k => $v) {
            $total += $v['price'];
            $objPHPExcel->getActiveSheet()->mergeCells('c'.$startIndex.':d'.$startIndex);
            $objPHPExcel->getActiveSheet()->mergeCells('f'.$startIndex.':g'.$startIndex);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$startIndex, $k);
            $objPHPExcel->getActiveSheet()->setCellValue('C'.$startIndex, $v['cname']);
            $objPHPExcel->getActiveSheet()->setCellValue('E'.$startIndex, $v['position']);
            $objPHPExcel->getActiveSheet()->setCellValue('F'.$startIndex, $v['pname']);
            $objPHPExcel->getActiveSheet()->getStyle('H'.$startIndex)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
            $objPHPExcel->getActiveSheet()->setCellValue('H'.$startIndex, $v['price']);
            $objPHPExcel->getActiveSheet()->getStyle("B".$startIndex)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $startIndex++;
        }

        $objPHPExcel->getActiveSheet()->setCellValue('B'.$startIndex, '合计');
        $objPHPExcel->getActiveSheet()->getStyle("B".$startIndex)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->setCellValue('h'.$startIndex, $total);
        $objPHPExcel->getActiveSheet()->getStyle('H'.$startIndex)->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);

        // 加边框
        $style_array = array(
            'borders' => array(
                'outline' => array(
                    'style' => \PHPExcel_Style_Border::BORDER_DOUBLE
                )
            )
        );
        $bottom_array = array(
            'borders' => array(
                'bottom' => array(
                    'style' => \PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        $objPHPExcel->getActiveSheet()->getStyle('B12:H'.$startIndex)->applyFromArray($style_array);
        $objPHPExcel->getActiveSheet()->getStyle('C8:D8')->applyFromArray($bottom_array);
        $objPHPExcel->getActiveSheet()->getStyle('F8:H8')->applyFromArray($bottom_array);
        $objPHPExcel->getActiveSheet()->getStyle('C9:D9')->applyFromArray($bottom_array);
        $objPHPExcel->getActiveSheet()->getStyle('F9:H9')->applyFromArray($bottom_array);
        $objPHPExcel->getActiveSheet()->getStyle('C10:H10')->applyFromArray($bottom_array);

        $startIndex += 3;
        $objPHPExcel->getActiveSheet()->setCellValue('B'.$startIndex,'负责人：');
        $objPHPExcel->getActiveSheet()->getStyle("B".$startIndex)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $objPHPExcel->getActiveSheet()->mergeCells('c'.$startIndex.':d'.$startIndex);
        $objPHPExcel->getActiveSheet()->setCellValue('c'.$startIndex,$offerInfo->salesperson);
        $objPHPExcel->getActiveSheet()->setCellValue('f'.$startIndex,'日期：');
        $objPHPExcel->getActiveSheet()->getStyle("f".$startIndex)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $objPHPExcel->getActiveSheet()->mergeCells('g'.$startIndex.':h'.$startIndex);
        $objPHPExcel->getActiveSheet()->setCellValue('g'.$startIndex, date("Y-m-d", time()));

        $objPHPExcel->getActiveSheet()->getStyle('C'.$startIndex.':D'.$startIndex)->applyFromArray($bottom_array);
        $objPHPExcel->getActiveSheet()->getStyle('G'.$startIndex.':H'.$startIndex)->applyFromArray($bottom_array);

        $filename = "./upload/" . $projectNum . ".xls";
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save($filename);

        // 阿里云主账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM账号进行API访问或日常运维，请登录 https://ram.console.aliyun.com 创建RAM账号。
        $accessKeyId = CacheConfig::getConfigCache("accessKeyId");
        $accessKeySecret = CacheConfig::getConfigCache("accessKeySecret");
        // Endpoint以杭州为例，其它Region请按实际情况填写。
        $endpoint = str_replace(CacheConfig::getConfigCache("bucket") . ".","", CacheConfig::getConfigCache("endpointOld"));
        // 存储空间名称
        $bucket= CacheConfig::getConfigCache("bucket");
        // 文件名称
        $object = CacheConfig::getConfigCache("dirname") . "/excel/" . $projectNum . ".xls";
        // <yourLocalFile>由本地文件路径加文件名包括后缀组成，例如/users/local/myfile.txt
        $filePath = $filename;

        try{
            $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
            $ossClient->uploadFile($bucket, $object, $filePath);
        } catch(OssException $e) {
            return fail(400, $e->getMessage());
        }

        $offerInfo->is_create_excel = self::COMMON_STATUS_ACTIVE;
        $offerInfo->save();

        return success();
    }

    /**
     * 获取小区列表
     */
    public function actionVillage(){
        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $get = Yii::$app->request->get();
            $limit = $get['pagesize'];
            $query = Village::find();  //Field为model层,在控制器刚开始use了field这个model,这儿可以直接写Field,开头大小写都可以,为了规范,我写的是大写
            $total = $query->count();
            $pages = new Pagination(['totalCount' =>$total, 'pageSize' => $limit]);    //实例化分页类,带上参数(总条数,每页显示条数)
            $list = $query->with("houseType")->offset($pages->offset)->limit($pages->limit)->asArray()->all();
            return ['data'=>$list,'total'=>$total,'code'=>200,'msg'=>'操作成功！'];
        }else{
            $this->layout = 'weui';
            return $this->render('village', [
                'title' => '小区列表'
            ]);
        }
    }


    /**
     * 通过模板id获取属性列表
     * @return [type] [description]
     */
    public function actionAttributeByTemplateId(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
        $templateId = $post['templateId']; // 模板id
        $list = Product::find()->where(['template_id'=>$templateId])->with("productAttribute")->asArray()->all();
        if(!$list){
            return fail("nothing");
        }
        $result = [];
        foreach ($list as $key => $value) {
            if(!isset($result[$value['position']])){
                $result[$value['position']] = [];
            }
            $item = [
                "id"=>$value['id'],
                "name" => $value['name'],
                "productAttribute" => $value['productAttribute']
            ];
            array_push($result[$value['position']], $item);
        }
        $res = [];
        foreach ($result as $k => $v) {
            array_push($res, [
                'name' => $k,
                'children' => $v
            ]);
        }
        return success($res);
    }

    /**
     * 获取户型列表
     * @return [type] [description]
     */
    public function actionHouseTypes(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $cookies= Yii::$app->request->cookies;
        $session = Yii::$app->session;
        if($cookies->has($this->cookieName)){
            $session->setId($cookies->getValue($this->cookieName));
        }
        $userInfo = $session->get($this->sessionName);
        if(!$userInfo){
            return fail("无权限访问！");
        }
        $org = Organization::findOne(['id'=>$userInfo['org_id']]);
        $villageId = $org->pid;// 小区id
        $list = HouseType::find()->where(['village_id'=>$villageId])->with("productTemplate")->asArray()->all();
        return success($list);
    }

    /**
     * 项目列表
     * @return [type] [description]
     */
    public function actionProjectNumList(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $get = Yii::$app->request->get();
        $cookies= Yii::$app->request->cookies;
        $session = Yii::$app->session;
        if($cookies->has($this->cookieName)){
            $session->setId($cookies->getValue($this->cookieName));
        }
        $userInfo = $session->get($this->sessionName);
        $query = OfferInfo::find();
        $query->where(['status'=>10]);
        if(isset($get['name']) && $get['name'] != ""){
            $query->andWhere(['like','client_name',$get['name']]);
        }
        if($userInfo['is_master'] == 10){
            $query->andWhere(['group_id'=>$userInfo['org_id']]);
        }else{
            $query->andWhere(['user_id'=>$userInfo['id']]);
        }
        $list = $query->with("houseType")->orderBy("updateTime DESC")->asArray()->all();
        return success($list);
    }

    /**
     * 删除项目
     * @return [type] [description]
     */
    public function actionDelProjectNum(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $projectNum = Yii::$app->request->post("projectNum");
        $delete = OfferInfo::findOne(['project_num'=>$projectNum]);
        $delete->status = self::COMMON_STATUS_DELETED;
        $delete->save();
        return success();
    }

    /**
     * 创建项目
     * @return [type] [description]
     */
    public function actionCreateProjectNum(){
        $cookies= Yii::$app->request->cookies;
        $session = Yii::$app->session;
        if($cookies->has($this->cookieName)){
            $session->setId($cookies->getValue($this->cookieName));
        }
        $userInfo = $session->get($this->sessionName);
        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if(!$userInfo){
                return fail(403, "无权限访问！");
            }
            $postData = ['OfferInfo'=>$post];
            $offerInfo = new OfferInfo();
            if(!$offerInfo->load($postData) || !$offerInfo->validate()){
                return fail(400, getErrorMsg($offerInfo->getFirstErrors()));
            }
            $offerInfo->doSave($userInfo);
            
            return success();
        }else{
            if(!$userInfo){
                $this->redirect(array('/offer/login.html'));
                return false;
            }
            // 获取小区信息
            $org = Organization::findOne(['id'=>$userInfo['org_id']]);
            $village = Organization::findOne(['id'=>$org->pid]);
            $this->layout = 'weui';
            return $this->render('create', [
                'title' => '创建项目',
                'village' => $village,
                'project_num' => make_project_num()
            ]);
        }
    }

    /**
     * 更新项目
     * @return [type] [description]
     */
    public function actionUpdateProjectNum($projectNum = ""){
        $cookies= Yii::$app->request->cookies;
        $session = Yii::$app->session;
        if($cookies->has($this->cookieName)){
            $session->setId($cookies->getValue($this->cookieName));
        }
        $userInfo = $session->get($this->sessionName);
        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if(!$userInfo){
                return fail(403, "无权限访问！");
            }
            $postData = ['OfferInfo'=>$post];
            $offerInfo = OfferInfo::findOne(['project_num'=>$post['project_num']]);
            if(!$offerInfo->load($postData) || !$offerInfo->validate()){
                return fail(400, getErrorMsg($offerInfo->getFirstErrors()));
            }
            $offerInfo->doSave($userInfo);
            
            return success();
        }else{
            if(!$userInfo){
                $this->redirect(array('/offer/login.html'));
                return false;
            }
            // 获取小区信息
            $org = Organization::findOne(['id'=>$userInfo['org_id']]);
            $village = Organization::findOne(['id'=>$org->pid]);
            $offerInfo = OfferInfo::findOne(['project_num'=>$projectNum, 'user_id'=>$userInfo['id']]);
            $this->layout = 'weui';
            return $this->render('update', [
                'title' => '修改项目',
                'village' => $village,
                'project_num' => $projectNum,
                'offerInfo' => $offerInfo
            ]);
        }
    }

    /**
     * 用户登录
     */
    public function actionLogin(){
        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            $session = Yii::$app->session;
            if(!isset($post['username']) || !isset($post['password'])){
                return fail(400, "用户名或密码错误！");
            }
            $user = MobileUser::find()->where(['username'=>$post['username']])->andWhere(['>=','org_level',3])->limit(1)->asArray()->one();
            if(!$user){
                return fail(400, "用户名或密码错误！");
            }
            if(!Yii::$app->security->validatePassword($post['password'], $user['password'])){
                return fail(400, "用户名或密码错误！");
            }

            // 登录成功
            $session = Yii::$app->session;
            $session->setCookieParams(['lifetime' => time() + $this->cookieLoginTimeOut]);
            $session->set($this->sessionName, $user);

            if(isset($post['switchCP']) && $post['switchCP'] == 'on'){
                $cookies= Yii::$app->response->cookies;
                $data=[
                    'name' => $this->cookieName,
                    'value' => $session->getId(),
                    'expire' => time() + $this->cookieLoginTimeOut, 'httpOnly' => true ];
                $cookies->add(new \yii\web\Cookie($data));
            }
            
            return success();
        }else{
            $this->layout = 'weui';
            return $this->render('login', [
                'title' => '用户登录'
            ]);
        }
    }
}