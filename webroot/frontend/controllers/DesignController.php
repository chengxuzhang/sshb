<?php
namespace frontend\controllers;

use frontend\components\CacheConfig;
use frontend\models\DesignResult;
use frontend\models\Question;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class DesignController extends Controller
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

    public function actionIndex()
    {
//        $this->layout = "mobile";
        return $this->render('index', [
            'title' => '智能设计'
        ]);
    }

    public function actionSay(){
        $this->layout = "no_page";
        $session = Yii::$app->session;
        $session->set('token', Yii::$app->getSecurity()->generateRandomString());

        // 获取问题
        $defaultQuestionType = CacheConfig::getConfigCache("default_question_type");
        $question = Question::find()->where(['type'=>$defaultQuestionType])->orderBy("sort asc")->all();
        $res = [];
        foreach ($question as $item) {
            $result = [];
            $result['id'] = $item->id;
            $result['title'] = $item->title;
            $result['img'] = $item->pic;
            $result['answerList'] = $item->answer_list;
            array_push($res, $result);
        }

        return $this->render('say', [
            'title' => '智能设计',
            'res' => $res
        ]);
    }

    /** 结果 */
    public function actionResult(){
        if(Yii::$app->request->isAjax){
            $session = Yii::$app->session;
            $token = $session->get('token');
            Yii::$app->cache->set($token, Yii::$app->request->post("style"));
            echo json_encode(['status'=>200]);die;
        }

        $session = Yii::$app->session;
        $token = $session->get('token');
        $style = Yii::$app->cache->get($token);
        $result = DesignResult::findOne(['style'=>$style,'qt'=>CacheConfig::getConfigCache("default_question_type")]);
        if(!$result){
            $this->redirect(array('/design.html'));
        }

        return $this->render('result', [
            'title' => '测试结果',
            'result'=>$result
        ]);
    }
}