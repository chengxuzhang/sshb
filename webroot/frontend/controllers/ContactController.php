<?php
namespace frontend\controllers;

use frontend\models\Experience;
use Yii;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class ContactController extends Controller
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
        return $this->render('index', [
            'title' => '联系我们',
        ]);
    }

    /**
     * 留言
     */
    public function actionExperience(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = new Experience();
        $postData = [];
        $post = Yii::$app->request->post();
        if (!isset($post['phone'])) {
            return fail(400, '请填写手机号！');
        }
        $experience = Experience::findOne(['phone'=>$post['phone']]);
        if($experience){
            return success("提交成功");
        }
        $postData[$model->classNameWithoutNamespace()] = $post;
        if ($model->load($postData) && $model->doSave()) {
            return success("提交成功");
        } else {
            return fail(400, $model->getFirstErrors());
        }
    }
}