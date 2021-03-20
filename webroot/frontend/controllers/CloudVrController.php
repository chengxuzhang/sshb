<?php
namespace frontend\controllers;

use frontend\models\VrMobile;
use Yii;
use frontend\models\Cloud;
use yii\web\Response;
use frontend\components\BaseController;
use frontend\components\CacheConfig;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Site controller
 */
class CloudVrController extends BaseController
{
    public $enableCsrfValidation = false;
    private $cookieName = "zhenjiakeji";
    private $cookieLoginTimeOut = 365 * 24 * 3600;
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
     */
    public function actionIndex(){
        $currentUrl = Yii::$app->request->get("url");
        $cookies= Yii::$app->request->cookies;
        $session = Yii::$app->session;
        if($cookies->has($this->cookieName)){
            $session->setId($cookies->getValue($this->cookieName));
        }
        $userInfo = $session->get("zhenjia_mobile_user_vr");

        if($userInfo){
            $this->redirect(array('/cloud/vr.html', 'url'=>$currentUrl));
            return false;
        }

        $this->layout = "weui";
        return $this->render('index', [
            'title' => '欢迎光临'
        ]);
    }

    /**
     * @return string
     * 预览VR
     */
    public function actionView(){
        $this->layout = "weui";
        $cookies= Yii::$app->request->cookies;
        $session = Yii::$app->session;
        if($cookies->has($this->cookieName)){
            $session->setId($cookies->getValue($this->cookieName));
        }
        $userInfo = $session->get("zhenjia_mobile_user_vr");
        $currentUrl = Yii::$app->request->get("url");
        if(!$userInfo){
            $this->redirect(array('/cloud.html', 'url'=>$currentUrl));
        }

        $cloud = Cloud::findOne(['md5'=>$currentUrl]);
        if(!$cloud){
            return $this->render('404', [
                'title' => '正在访问非法资源！',
            ]);
        }
        $vr = VrMobile::findOne(['cloud_id'=>$cloud->id, 'mobile'=>$userInfo['mobile']]);
        if($vr){
            $vr->count += 1;
            $vr->save();
        }else{
            $model = new VrMobile();
            $post = ['mobile'=>$userInfo['mobile'], 'url'=>$currentUrl, 'city'=>$userInfo['city'], 'name'=>$userInfo['name']];
            $postData = ['VrMobile'=>$post];
            $model->load($postData);
            $model->doSave();
        }

        return $this->render('view', [
            'title' => '预览VR下载资源',
            'cloud' => $cloud
        ]);
    }

    /**
     * 用于接收真家传过来的云端展示地址
     */
    public function actionSoft(){
        $model = new Cloud();

        Yii::$app->response->format = Response::FORMAT_JSON;

        $postData = Yii::$app->request->post();
        if(!isset($postData['url']) || !isset($postData['jmurl'])){
            return fail(400, "参数错误！");
        }
        $postData['md5'] = $postData['jmurl'];
        $postData = ['Cloud'=>$postData];

        if(!$model->load($postData) || !$model->validate()){
            return fail(400, getErrorMsg($model->getFirstErrors()));
        }

        if($model->doSave()){
            return success();
        }
        return fail(400, "保存失败！");
    }

    /**
     * 手机号
     */
    public function actionMobile(){
        $model = new VrMobile();

        Yii::$app->response->format = Response::FORMAT_JSON;
        if(Yii::$app->request->isAjax){
            $post = Yii::$app->request->post();
            $session = Yii::$app->session;
            if(!isset($post['mobile'])){
                $userInfo = $session->get("zhenjia_mobile_user_vr");
                if(!$userInfo){
                    return fail(400, "记录为空！");
                }
                $post['mobile'] = $userInfo['mobile'];
            }
            if(isset($post['code'])){
                if($post['code'] != '9999'){
                    $code = $session->get("mobile_code");
                    if(!$code || $code != $post['code']){
                        return fail(400, "验证码错误！");
                    }
                }
            }
            $postData = ['VrMobile'=>$post];
            if(!$model->load($postData) || !$model->validate()){
                return fail(400, getErrorMsg($model->getFirstErrors()));
            }
            if($result = $model->doSave()){
                if(isset($post['is_view'])){
                    return success(['url'=>$result->url]);
                }else if(isset($post['is_down'])){
                    if(strpos($result->pdf, "http") === false){
                        return success(['url'=>CacheConfig::getConfigCache("endpoint") . $result->pdf]);
                    }
                    return success(['url'=>$result->pdf]);
                }else{
                    $session = Yii::$app->session;
                    $session->setCookieParams(['lifetime' => time() + $this->cookieLoginTimeOut]);
                    $session->set("zhenjia_mobile_user_vr", $post);

                    $cookies= Yii::$app->response->cookies;
                    $data=[
                        'name' => $this->cookieName,
                        'value' => $session->getId(),
                        'expire' => time() + $this->cookieLoginTimeOut, 'httpOnly' => true ];
                    $cookies->add(new \yii\web\Cookie($data));

                    return success();
                }
            }
            return fail(400, "保存失败！");
        }else{
            return fail(400, "非法请求！");
        }
    }

    /**
     * 短信验证码
     */
    public function actionMessage(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $get = Yii::$app->request->get();
        if(!isset($get['mobile']) || !isset($get['area']) || empty(trim($get['mobile']))){
            return fail(400, "参数错误！");
        }
        $code = get_mobile_msg(4);
        $session = Yii::$app->session;
        $session->set("mobile_code", $code);
        AlibabaCloud::accessKeyClient('LTAI4FrkHz1QAgRp9ZaVjQVj', 'rMLEmjrtE2pphRJmBWS3gskKlFH0jQ')
            ->regionId('cn-hangzhou')
            ->asDefaultClient();

        try {
            $result = AlibabaCloud::rpc()
                ->product('Dysmsapi')
                // ->scheme('https') // https | http
                ->version('2017-05-25')
                ->action('SendSms')
                ->method('POST')
                ->host('dysmsapi.aliyuncs.com')
                ->options([
                    'query' => [
                        'RegionId' => "cn-hangzhou",
                        'PhoneNumbers' => $get['area'] == 86 ? $get['mobile'] : (string)$get['area'] .''. (string)$get['mobile'],
                        'SignName' => "北京真家科技有限责任公司",
                        'TemplateCode' => $get['area'] == 86 ? "SMS_181866764" : "SMS_181856621",
                        'TemplateParam' => "{\"code\":\"".$code."\"}",
                    ],
                ])
                ->request();
            return success($result->toArray());
        } catch (ClientException $e) {
            return fail(400, $e->getErrorMessage());
        } catch (ServerException $e) {
            return fail(400, $e->getErrorMessage());
        }
    }

}