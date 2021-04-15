<?php
namespace frontend\controllers;

use frontend\components\CacheConfig;
use frontend\models\Product;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

/**
 * Site controller
 */
class ProductController extends Controller
{
    public $enableCsrfValidation = false;
    public $title = '产品系列';
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
     * 新闻列表页面
     * @return string
     */
    public function actionIndex()
    {
        $get = Yii::$app->request->get();
        $condition = array();
        if(isset($get['type'])){
            $condition['category_id'] = $get['type'];
        }
        $currentPage = isset($get['page']) ? $get['page'] : 1;

        $data = Product::find()->where($condition); //Field为model层,在控制器刚开始use了field这个model,这儿可以直接写Field,开头大小写都可以,为了规范,我写的是大写
        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '9']);    //实例化分页类,带上参数(总条数,每页显示条数)
        $model = $data->offset($pages->getOffset())->limit($pages->getLimit())->orderBy("update_time DESC")->all();

        // 上一页地址
        if($currentPage <= 1){
            $prevUrl = null;
        }else{
            if(isset($get['type'])){
                $prevUrl = "/product/" . $get['type'] . "/" . ($currentPage - 1) . ".html";
            }else{
                $prevUrl = "/product/" . ($currentPage - 1) . ".html";
            }
        }

        // 下一页地址
        if($currentPage >= $pages->getPageCount()){
            $nextUrl = null;
        }else{
            if(isset($get['type'])){
                $nextUrl = "/product/" . $get['type'] . "/" . ($currentPage + 1) . ".html";
            }else{
                $nextUrl = "/product/" . ($currentPage + 1) . ".html";
            }
        }

        $pageList = [];
        for ($i = 1;$i<=$pages->getPageCount();$i++){
            if(isset($get['type'])){
                $params = $get['type'] . "/" . $i . ".html";
            }else{
                $params = $i . ".html";
            }
            $temp = [
                'url' => "/product/" . $params,
                'index' => $i,
                'current' => $i == $currentPage ? "Ahover" : ""
            ];
            $pageList[] = $temp;
        }

        if(isset($get['type'])){
            $this->title = getConfigList(CacheConfig::getConfigCache('product_type'), ":")[$get['type']];
        }

        return $this->render('index', [
            'title' => $this->title,
            'model' => $model,
            'currentPage' => $currentPage,
            'totalPage' => $pages->getPageCount(),
            'prevUrl' => $prevUrl,
            'nextUrl' => $nextUrl,
            'pageList' => $pageList,
        ]);
    }

    /**
     * 新闻详情页面
     */
    public function actionView(){
        $id = Yii::$app->request->get("id");
        $model = Product::find()->with(['article'])->where(['id'=>$id])->one();
        return $this->render('view', [
            'title' => $model->title,
            'model' => $model
        ]);
    }

}