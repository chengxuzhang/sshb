<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Video;
use frontend\components\BaseController;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * VideoController implements the CRUD actions for Video model.
 */
class VideoController extends BaseController
{
    public $title = '企业视频';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Video models.
     * @return mixed
     */
    public function actionIndex()
    {
        $get = Yii::$app->request->get();
        $condition = array();
        $currentPage = isset($get['page']) ? $get['page'] : 1;

        $data = Video::find()->where($condition); //Field为model层,在控制器刚开始use了field这个model,这儿可以直接写Field,开头大小写都可以,为了规范,我写的是大写
        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '9']);    //实例化分页类,带上参数(总条数,每页显示条数)
        $model = $data->offset($pages->getOffset())->limit($pages->getLimit())->orderBy("id DESC")->all();

        // 上一页地址
        if($currentPage <= 1){
            $prevUrl = null;
        }else{
            $prevUrl = "/video/" . ($currentPage - 1) . ".html";
        }

        // 下一页地址
        if($currentPage >= $pages->getPageCount()){
            $nextUrl = null;
        }else{
            $nextUrl = "/video/" . ($currentPage + 1) . ".html";
        }

        $pageList = [];
        for ($i = 1;$i<=$pages->getPageCount();$i++){
            $params = $i . ".html";
            $temp = [
                'url' => "/video/" . $params,
                'index' => $i,
                'current' => $i == $currentPage ? "Ahover" : ""
            ];
            $pageList[] = $temp;
        }

        return $this->render('index', [
            'title' => $this->title,
            'model' => $model,
            'currentPage' => $currentPage,
            'totalPage' => $pages->getPageCount(),
            'prevUrl' => $prevUrl,
            'nextUrl' => $nextUrl,
            'pageList' => $pageList,
        ]);
    }

    /**
     * Displays a single Video model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * 播放视频的页面
     */
    public function actionVideoPlay(){
        $this->layout = "layer_main";
        $type = Yii::$app->request->get('vt');
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

    /**
     * Finds the Video model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Video the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Video::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
