<?php
namespace frontend\controllers;

use frontend\models\Hdp;
use yii\web\Controller;

/**
 * Site controller
 */
class AivrController extends Controller{

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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
//        $this->layout = "mobile";

        return $this->render('index',[
            'title'=>'3D云设计系统+VR云台沉浸式体验系统'
        ]);
    }

    public function actionAi(){
//        $this->layout = "mobile";

        $fuzeren = Hdp::find()->where(['type'=>5])->orderBy("sort asc")->limit(3)->all();
        return $this->render('ai',[
            'title' => '3D云设计系统',
            'fuzeren' => $fuzeren,
        ]);
    }

    public function actionVr(){
//        $this->layout = "mobile";

        $fuzeren = Hdp::find()->where(['type'=>5])->orderBy("sort asc")->limit(3)->all();
        return $this->render('vr',[
            'title' => 'VR云台',
            'fuzeren' => $fuzeren,
        ]);
    }
}