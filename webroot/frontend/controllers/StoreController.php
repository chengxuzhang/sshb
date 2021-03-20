<?php
namespace frontend\controllers;

use frontend\models\Hdp;
use yii\web\Controller;

/**
 * Site controller
 */
class StoreController extends Controller
{
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
     * 智慧门店首页
     * @return string
     */
    public function actionIndex()
    {
//        $this->layout = "mobile";

        $hdp = Hdp::find()->where(['type'=>1])->orderBy("sort asc")->limit(3)->all();
        $store = Hdp::find()->where(['type'=>2])->orderBy("sort asc")->limit(5)->all();
        $fuzeren = Hdp::find()->where(['type'=>5])->orderBy("sort asc")->limit(3)->all();
        return $this->render('index', [
            'title' => '智慧门店',
            'hdp' => $hdp,
            'store' => $store,
            'fuzeren' => $fuzeren,
        ]);
    }
}