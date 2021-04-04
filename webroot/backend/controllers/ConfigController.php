<?php

namespace backend\controllers;

use backend\components\CacheConfig;
use Yii;
use backend\models\Config;
use backend\models\ConfigSearch;
use backend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use backend\models\MpVersion;

/**
 * ConfigController implements the CRUD actions for Config model.
 */
class ConfigController extends BaseController
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
     * Lists all Config models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ConfigSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Config model.
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
     * Creates a new Config model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Config();

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
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Config model.
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

    /**
     * Lists all Config models.
     * @return mixed
     */
    public function actionSetConfig()
    {
        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $postData = Yii::$app->request->post();
            foreach ($postData as $key => $val) {
                $model = Config::findOne(['fieldName'=>$key]);
                if(!$model){
                    $model = new Config();
                    $model->create_time = time();
                    $model->fieldName = $key;
                }
                $model->update_time = time();
                $model->value = $val;
                // $model->type = 1;
                if($model->doSave()){
                    Yii::$app->cache->set("config_".$key, $val);
                }
            }
            return success();
        }else{
            $config = Config::find()->orderBy("sort asc")->where(["status"=>CacheConfig::COMMENT_STATUS_ACTIVE])->all();
            $res = [];
            foreach ($config as $item) {
                $res[$item->fieldName] = $item->value;
            }
            return $this->render('set-config', [
                'config'=>$res,
                'configList'=>$config,
            ]);
        }
    }

    /**
     * Deletes an existing Config model.
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
     * Finds the Config model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Config the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Config::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
