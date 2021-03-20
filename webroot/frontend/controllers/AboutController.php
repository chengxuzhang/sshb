<?php
namespace frontend\controllers;

use frontend\models\Hdp;
use yii\web\Controller;

/**
 * Site controller
 */
class AboutController extends Controller
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

    public function actionIndex()
    {
//        $this->layout = "mobile";

        $licheng = Hdp::find()->where(['type'=>3])->orderBy("sort asc")->all();
        $fuzeren = Hdp::find()->where(['type'=>5])->orderBy("sort asc")->limit(3)->all();
        return $this->render('index', [
            'title' => '关于我们',
            'licheng' => $licheng,
            'fuzeren' => $fuzeren,
        ]);
    }
}