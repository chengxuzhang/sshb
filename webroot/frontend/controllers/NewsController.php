<?php
namespace frontend\controllers;

use frontend\models\Category;
use frontend\models\News;
use Yii;
use frontend\models\NewsArticle;
use frontend\models\Document;
use yii\data\Pagination;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * Site controller
 */
class NewsController extends Controller
{
    public $enableCsrfValidation = false;
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

        $data = News::find()->where($condition); //Field为model层,在控制器刚开始use了field这个model,这儿可以直接写Field,开头大小写都可以,为了规范,我写的是大写
        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '5']);    //实例化分页类,带上参数(总条数,每页显示条数)
        $model = $data->offset($pages->getOffset())->limit($pages->getLimit())->orderBy("update_time DESC")->with('category')->all();
//        print_r($model);die;

        $position = News::find()->where(['position'=>10])->orderBy("update_time DESC")->limit(3)->all();

        // 上一页地址
        if($currentPage <= 1){
            $prevUrl = null;
        }else{
            if(isset($get['type'])){
                $prevUrl = "/news/" . $get['type'] . "/" . ($currentPage - 1) . ".html";
            }else{
                $prevUrl = "/news/" . ($currentPage - 1) . ".html";
            }
        }

        // 下一页地址
        if($currentPage >= $pages->getPageCount()){
            $nextUrl = null;
        }else{
            if(isset($get['type'])){
                $nextUrl = "/news/" . $get['type'] . "/" . ($currentPage + 1) . ".html";
            }else{
                $nextUrl = "/news/" . ($currentPage + 1) . ".html";
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
                'url' => "/news/" . $params,
                'index' => $i,
                'current' => $i == $currentPage ? "Ahover" : ""
            ];
            $pageList[] = $temp;
        }

        $title = "新闻动态";
        if(isset($get['type'])){
            $category = Category::findOne($get['type']);
            $title = $category->title;
        }

        $categoryList = Category::find()->all();
//        print_r($categoryList);die;

        return $this->render('index', [
            'title' => $title,
            'model' => $model,
            'position' => $position,
            'currentPage' => $currentPage,
            'totalPage' => $pages->getPageCount(),
            'prevUrl' => $prevUrl,
            'nextUrl' => $nextUrl,
            'pageList' => $pageList,
            'categoryList' => $categoryList
        ]);
    }

    /**
     * 新闻详情页面
     */
    public function actionView(){
        $id = Yii::$app->request->get("id");
        $model = Document::find()->with(['article','category'])->where(['id'=>$id])->one();
//        print_r($model);exit;
        return $this->render('view', [
            'title' => $model->title,
            'model' => $model
        ]);
    }

}