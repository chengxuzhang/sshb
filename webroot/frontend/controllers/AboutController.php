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
        return $this->render('index', [
            'title' => '关于我们',
        ]);
    }
}