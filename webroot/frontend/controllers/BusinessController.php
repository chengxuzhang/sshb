<?php
namespace frontend\controllers;

use frontend\models\Hdp;
use yii\web\Controller;

/**
 * Site controller
 */
class BusinessController extends Controller
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
     * 招商加盟首页
     * @return string
     */
    public function actionIndex()
    {
//        $this->layout = "mobile";

        $fuzeren = Hdp::find()->where(['type'=>5])->orderBy("sort asc")->limit(3)->all();
        return $this->render('index', [
            'title' => '招商加盟',
            'fuzeren' => $fuzeren,
        ]);
    }
}