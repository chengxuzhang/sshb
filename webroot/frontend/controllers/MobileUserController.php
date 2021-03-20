<?php
namespace frontend\controllers;

use Yii;
use yii\web\Response;
use frontend\components\BaseController;
use frontend\components\CacheConfig;
use frontend\models\MobileUser;

/**
 * Site controller
 */
class MobileUserController extends BaseController
{
    public $enableCsrfValidation = false;
    private $cookieName = "zhenjiamobileuser";
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
     * 用户登录
     */
    public function actionLogin(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();
        $mobileUser = MobileUser::findOne(['username'=>$post['username']]);
        if(!$mobileUser || !Yii::$app->security->validatePassword($post['password'], $mobileUser->password)){
            return fail("400","用户名或密码错误！");
        }

        $session = Yii::$app->session;
        $session->setCookieParams(['lifetime' => time() + $this->cookieLoginTimeOut]);
        $session->set("zhenjia_mobile_user_baojia", $post);

        $cookies= Yii::$app->response->cookies;
        $data=[
            'name' => $this->cookieName,
            'value' => $session->getId(),
            'expire' => time() + $this->cookieLoginTimeOut, 'httpOnly' => true ];
        $cookies->add(new \yii\web\Cookie($data));

        return success("登录成功！");
    }
}