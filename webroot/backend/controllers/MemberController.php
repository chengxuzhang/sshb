<?php

namespace backend\controllers;

use Yii;
use backend\models\Member;
use backend\models\MemberSearch;
use backend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * MemberController implements the CRUD actions for Member model.
 */
class MemberController extends BaseController
{
    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
//                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Member models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MemberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Member model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionGetMember($id){
        Yii::$app->response->format = Response::FORMAT_JSON;
        return success($this->findModel($id));
    }

    public function actionSet($id){
        Yii::$app->response->format = Response::FORMAT_JSON;
        if(!$id){
            return fail(401, "参数错误！");
        }
        $model = $this->findModel($id);
        $post = Yii::$app->request->post();
        $num = $post['num'];
        $type = $post['type'];
        switch ($type){
            case "addjifen":
                $model->integral += $num;
                break;
            case "jianjifen":
                $model->integral -= $num;
                break;
            case "addledou":
                $model->ledou += $num;
                break;
            case "jianledou":
                $model->ledou -= $num;
                break;
        }
        $model->save();
        return success();
    }

    /**
     * Creates a new Member model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Member();

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
     * Updates an existing Member model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
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
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $user = $this->findModel($id);
        $user->status =  Member::COMMENT_STATUS_DELETE;
        $user->save();
        return success();
    }

    public function actionNodelete($id)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $user = $this->findModel($id);
        $user->status = Member::COMMENT_STATUS_ACTIVE;
        $user->save();
        return success();
    }

    public function actionSetKol(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $member = new Member();
        if($member->setKol(Yii::$app->request->post())){
            return success();
        }
        return fail(401, "未知错误！");
    }

    /**
     * Finds the Member model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Member the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Member::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
