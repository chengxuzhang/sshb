<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Site controller
 */
class SourceController extends Controller
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

    public function actionSoft()
    {
        return $this->render('soft', [
            'title' => '软件下载'
        ]);
    }

    public function actionVideo()
    {
        return $this->render('video', [
            'title' => '培训视频'
        ]);
    }
}