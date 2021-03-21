<?php

namespace backend\controllers;

use Yii;
use backend\models\Experience;
use backend\models\ExperienceSearch;
use backend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * ExperienceController implements the CRUD actions for Experience model.
 */
class ExperienceController extends BaseController
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
                    // 'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Experience models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ExperienceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Deletes an existing Experience model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $update = $this->findModel($id);
        $update->status = Experience::COMMENT_STATUS_ACTIVE;
        $update->save();
        return ['status'=>200,'message'=>'操作成功！'];
    }

    /**
     *  'id' => 'ID',
        'name' => '姓名',
        'phone' => '电话',
        'type' => '来源',
        'province' => '省份',
        'city' => '城市',
        'createTime' => '申请日期',
        'status' => '状态',
     */
    public function actionExportExcel(){
        $result = Experience::find()->where(['status'=>Experience::COMMON_STATUS_ACTIVE])->orderBy("createTime DESC")->all();
        \moonland\phpexcel\Excel::export([
            'models' => $result,
            'asAttachment' => true,
            'fileName' => '网站用户留言',
            'columns' => ['name','phone','province','city',
                [
                    'attribute' => 'createTime',
                    'format' => 'text',
                    'value' => function($model) {
                        return date("Y-m-d H:i", $model->createTime);
                    }
                ]
            ], //without header working, because the header will be get label from attribute label.
            'headers' => ['name' => '姓名','phone' => '电话', 'province' => '省份', 'city' => '城市', 'createTime' => '申请日期'],
        ]);
    }

    /**
     * Finds the Experience model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Experience the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Experience::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
