<?php
namespace frontend\controllers;

use frontend\models\Document;
use frontend\models\Hdp;
use frontend\models\News;
use frontend\models\Video;
use Yii;
use frontend\models\Experience;

/**
 * Site controller
 */
class SiteController extends \frontend\components\BaseController
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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $video = Video::find()->limit(4)->all();
        $news = News::find()->limit(2)->all();
        return $this->render('index',[
            'video' => $video,
            'news'  => $news,
        ]);
    }

    public function actionOnline(){
        $this->layout = 'layer_main';
        $type = Yii::$app->request->get('type');
        if($type == 0){
            return $this->render('online1',[
                'title'=>'真家'
            ]);
        }else if($type == 1){
            return $this->render('online2',[
                'title'=>'真家'
            ]);
        }
    }

    /**
     * 体验提交
     */
    public function actionTiyan(){
        $model = new Experience();
        $postData = [];
        $postData[$model->classNameWithoutNamespace()] = Yii::$app->request->post();
        if ($model->load($postData) && $model->doSave()) {
            echo json_encode(["result"=>true,"status"=>200,"msg"=>"提交成功"]);die;
        } else {
            echo json_encode(["result"=>true,"status"=>400,"msg"=>$model->getFirstErrors()]);die;
        }
    }
}
