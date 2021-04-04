<?php
namespace frontend\controllers;

use frontend\models\Product;
use Yii;
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
        return $this->render('index', [
            'title' => $this->title,
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