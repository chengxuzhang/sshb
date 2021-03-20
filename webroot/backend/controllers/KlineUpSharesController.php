<?php

namespace backend\controllers;

use backend\models\Shares;
use Yii;
use backend\models\KlineUpShares;
use backend\models\KlineUpSharesSearch;
use yii\filters\Cors;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * KlineUpSharesController implements the CRUD actions for KlineUpShares model.
 */
class KlineUpSharesController extends Controller
{
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
                ]
            ],
            'corsFilter'=>[
                'class' => Cors::className(),
                'cors'=>[
                    'Origin' => ['*'],
                    'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                    'Access-Control-Request-Headers' => ['*'],
                    'Access-Control-Allow-Origin' => ['*'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age' => 86400,
                    'Access-Control-Expose-Headers' => [],
                ]
            ]
        ];
    }

    /**
     * Lists all KlineUpShares models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KlineUpSharesSearch();
        $searchModel->create_time = date("Ymd");
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionIndexSoft(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $searchModel = new KlineUpSharesSearch();
        $searchModel->create_time = date("Ymd");
        $get = Yii::$app->request->get();
        $get['create_time'] = str_replace("-", "", $get['create_time']);
        $dataProvider = $searchModel->search(['KlineUpSharesSearch'=>$get]);

        return success($dataProvider->getModels());
    }

    /**
     * 获取日K数据
     */
    public function actionEcharts(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $code = Yii::$app->request->get('code');
        $shares = Shares::findOne(['code'=>$code]);
        $url = $shares->url;
        $content = curlGet($url);
        $data = $shares->getData($content);
        $klines = $data['data']['klines'];
        $klines = array_splice($klines, -200);
        $result = [];
        foreach ($klines as $kline) {
            $arr = explode( ",", $kline);
            $item = [];
            foreach ($arr as $key => $value) {
                if ($key == 0) {
                    array_push($item, $value);
                }else{
                    array_push($item, floatval($value));
                }
            }
            array_push($result, $item);
        }
        return success(['shares'=>$shares, 'kline'=>$result]);
    }

    /**
     * Displays a single KlineUpShares model.
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
     * Creates a new KlineUpShares model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new KlineUpShares();

        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $postData = Yii::$app->request->post();
            if(!$model->load($postData) || !$model->validate()){
                return $model->fail(400, $model->getErrorMsg($model->getFirstErrors()));
            }
            if($model->doSave($type)){
                return $model->success();
            }
            return $model->fail(400, "保存失败！");
            }else{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing KlineUpShares model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $postData = Yii::$app->request->post();
            if(!$model->load($postData) || !$model->validate()){
                return $model->fail(400, $model->getErrorMsg($model->getFirstErrors()));
            }
            if($model->doSave()){
                return $model->success();
            }
            return $model->fail(400, "保存失败！");
            }else{
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    // 更新今天上涨的股票数据
    public function actionSynchronizeHuShen($type){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = new KlineUpShares();
        $result = $model->getTodayCollectYang($type); // 获取今天收阳的股票
        return success($result);
    }

    /**
     * 三十日均线选股法
     */
    public function actionSelectSharesByThirtyKline(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $code = Yii::$app->request->get("code");
        $model = new KlineUpShares();
        $result = $model->selectSharesByThirtyKline($code);
        return $result;
    }

    /**
     * Deletes an existing KlineUpShares model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KlineUpShares model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return KlineUpShares the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = KlineUpShares::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
