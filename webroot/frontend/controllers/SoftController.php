<?php
namespace frontend\controllers;

use frontend\models\Hdp;
use Yii;
use frontend\models\Soft;
use frontend\models\Video;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SoftController extends Controller
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
        $keyword = trim(Yii::$app->request->get("keyword"));
        if($keyword && $keyword != ""){
            $video = Video::find()->where(['bigtype'=>[1,2]])->andWhere(['like', 'keywords', $keyword])->orderBy("sort asc")->all();
            $ynVideoCount = Video::find()->where(['bigtype'=>3])->andWhere(['like', 'keywords', $keyword])->count();
            $zyVideoCount = Video::find()->where(['bigtype'=>4])->andWhere(['like', 'keywords', $keyword])->count();
            $ytVideoCount = Video::find()->where(['bigtype'=>5])->andWhere(['like', 'keywords', $keyword])->count();
        }else{
            $video = Video::find()->where(['bigtype'=>[1,2]])->orderBy("sort asc")->all();
            $ynVideoCount = Video::find()->where(['bigtype'=>3])->count();
            $zyVideoCount = Video::find()->where(['bigtype'=>4])->count();
            $ytVideoCount = Video::find()->where(['bigtype'=>5])->count();
        }
        $soft = Soft::find()->orderBy("publishDate DESC")->one();
        $fuzeren = Hdp::find()->where(['type'=>5])->orderBy("sort asc")->limit(3)->all();
        return $this->render('index', [
            'title' => '软件下载',
            'video' => $video,
            'ynVideoCount' => $ynVideoCount,
            'zyVideoCount' => $zyVideoCount,
            'ytVideoCount' => $ytVideoCount,
            'soft' => $soft,
            'fuzeren' => $fuzeren,
            'keyword' => $keyword
        ]);
    }

    public function actionVideoList(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $get = Yii::$app->request->get();
        $start = ($get['page']-1) * 10;
        if($get['keywords'] && $get['keywords'] != ""){
            $video = Video::find()->where(['bigtype'=>$get['type']])->andWhere(['like', 'keywords', $get['keywords']])->orderBy("sort asc")->limit(10)->offset($start)->all();
        }else{
            $video = Video::find()->where(['bigtype'=>$get['type']])->orderBy("sort asc")->limit(10)->offset($start)->all();
        }
        return success($video);
    }

    /**
     * 播放视频的页面
     */
    public function actionVideoPlay(){
        $this->layout = "layer_main";
        $type = Yii::$app->request->get('type');
        if($type == 0){
            return $this->render('video_play', [
                'title' => '播放视频'
            ]);
        }else if($type == 1){
            return $this->render('video_mobile_play', [
                'title' => '播放视频'
            ]);
        }
    }
}