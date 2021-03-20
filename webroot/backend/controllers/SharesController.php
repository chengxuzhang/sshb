<?php

namespace backend\controllers;

use backend\models\KlineUpShares;
use Yii;
use backend\models\Shares;
use backend\models\SharesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * SharesController implements the CRUD actions for Shares model.
 */
class SharesController extends Controller
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
                ],
            ],
        ];
    }

    /**
     * Lists all Shares models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SharesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Shares model.
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
     * Creates a new Shares model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Shares();

        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $postData = Yii::$app->request->post();
            if(!$model->load($postData) || !$model->validate()){
                return fail(400, $model->getErrorMsg($model->getFirstErrors()));
            }
            if($model->doSave($type)){
                return success();
            }
            return fail(400, "保存失败！");
        }else{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Shares model.
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
                return fail(400, $model->getErrorMsg($model->getFirstErrors()));
            }
            if($model->doSave()){
                return success();
            }
            return fail(400, "保存失败！");
        }else{
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Shares model.
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
     * Finds the Shares model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Shares the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Shares::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * 同步数据
     */
    public function actionSynchronize(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $code = Yii::$app->request->get("code");
        $model = Shares::findOne(['code'=>$code]);
        return $model->synchronize();
    }

    // 同步今天沪上涨的股票
    public function actionSynchronizeHu(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = new Shares();
        $result = $model->getTodayRise();
        return success($result);
    }

    // 同步所有的沪深个股
    public function actionGetAllShares(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $content = curlGet("http://92.push2.eastmoney.com/api/qt/clist/get?cb=jQuery1124042272825233635847_1599652057561&pn=1&pz=4161&po=1&np=1&ut=bd1d9ddb04089700cf9c27f6f7426281&fltt=2&invt=2&fid=f3&fs=m:0+t:6,m:0+t:13,m:0+t:80,m:1+t:2,m:1+t:23&fields=f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f12,f13,f14,f15,f16,f17,f18,f20,f21,f23,f24,f25,f22,f11,f62,f128,f136,f115,f152&_=1599652057566");
        $arr = explode("(", $content);
        $arr2 = explode(")", $arr[1]);
        $result = $arr2[0];
        $data = json_decode($result, true);
        foreach ($data['data']['diff'] as $val) {
            $model = new Shares();
            $model->code = $val['f12'];
            $model->name = $val['f14'];
            $model->create_time = $model->update_time = time();
            $model->url = "http://push2his.eastmoney.com/api/qt/stock/kline/get?cb=jQuery".rand(999,9999999).time()."194_".time()."&fields1=f1%2Cf2%2Cf3%2Cf4%2Cf5%2Cf6&fields2=f51%2Cf52%2Cf53%2Cf54%2Cf55%2Cf56%2Cf57%2Cf58%2Cf61&ut=7eea3edcaed734bea9cbfc24409ed989&klt=101&fqt=1&secid=".$val['f13'].".".$val['f12']."&beg=0&end=20500000&_=".time();
            $model->save();
        }
        return ["result"=>true];
    }

    /**
     * K线分析
     * @return array
     */
    public function actionKline(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $codes = Yii::$app->request->post("code");
        $result = [];
        if($codes && count($codes)>0){
            foreach ($codes as $code){
                $model = Shares::findOne(['code'=>$code]);
                $res = $model->kline();
                array_push($result, $res);
            }
        }else{
            return fail(400, "请至少选择一只股票");
        }
        return success($result);
    }

    /**
     * 三十日均线上涨购买股票方法
     */
    public function actionThirtyKline(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $code = Yii::$app->request->post("code");
        $model = new Shares();
        $result = $model->thirtyKline($code);
        return success($result);
    }

    /**
     * 三十日均线选股法
     */
    public function actionSelectSharesByThirtyKline(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $code = Yii::$app->request->get("code");
        $model = Shares::findOne(['code'=>$code]);
        $result = $model->selectSharesByThirtyKline();
        return $result;
    }

    /**
     * 反弹概率计算
     */
    public function actionRebound() {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $code = Yii::$app->request->get("code");
        $model = new Shares();
        $result = $model->rebound($code);
        return success($result);
    }
}
