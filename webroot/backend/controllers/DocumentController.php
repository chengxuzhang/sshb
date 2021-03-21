<?php

namespace backend\controllers;

use Yii;
use backend\models\Document;
use backend\models\DocumentSearch;
use backend\models\DocumentArticle;
use yii\db\Exception;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * DocumentController implements the CRUD actions for Document model.
 */
class DocumentController extends \backend\components\BaseController
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
     * Lists all Document models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocumentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $categoryModel = new \backend\models\Category;
        $category = $categoryModel->getCategoryList();
        $cacheKey = Yii::$app->params['cacheKey']['frontend'];

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category' => $category,
            'cacheKey' => $cacheKey,
        ]);
    }

    /**
     * Creates a new Document model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Document();
        $article = new DocumentArticle();


        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $postData = Yii::$app->request->post();
            $transaction = Yii::$app->db->beginTransaction();
            try{
                if(!$model->load($postData) || !$model->validate()){
                    return $model->fail(400, $model->getErrorInfo($model->getFirstErrors()));
                }
                if(!$model->doSave()){
                    return $model->fail(400, "保存失败！");
                }
                $article->id = $model->id;
                if(!$article->load($postData) || !$article->validate()){
                    return $model->fail(400, $model->getErrorInfo($article->getFirstErrors()));
                }
                if(!$article->doSave()){
                    return $model->fail(400, "保存失败！");
                }
                $transaction->commit();
                return $model->success("保存成功！");
            }catch (Exception $e){
                // $error = $e->getMessage();  //获取抛出的错误
                $transaction->rollBack();
                return $model->fail(400, "未知错误！");
            }
        }else{
            $categoryModel = new \backend\models\Category;
            $category = $categoryModel->getCategoryList();
            return $this->render('create', [
                'model' => $model,
                'article' => $article,
                'category'=> $category,
            ]);
        }
    }

    /**
     * Updates an existing Document model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $articleModel = new DocumentArticle();
        $article = $articleModel->findOne($id);

        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            $postData = Yii::$app->request->post();
            $transaction = Yii::$app->db->beginTransaction();
            try{
                if(!$model->load($postData) || !$model->validate()){
                    return $model->fail(400, $model->getErrorInfo($model->getFirstErrors()));
                }
                if(!$model->doSave()){
                    return $model->fail(400, "保存失败！");
                }
                $article->id = $model->id;
                if(!$article->load($postData) || !$article->validate()){
                    return $model->fail(400, $model->getErrorInfo($article->getFirstErrors()));
                }
                if(!$article->doSave()){
                    return $model->fail(400, "保存失败！");
                }
                $transaction->commit();
                return $model->success("保存成功！");
            }catch (Exception $e){
                // $error = $e->getMessage();  //获取抛出的错误
                $transaction->rollBack();
                return $model->fail(400, "未知错误！");
            }
        }else{
            $categoryModel = new \backend\models\Category;
            $category = $categoryModel->getCategoryList();
            return $this->render('update', [
                'model' => $model,
                'article' => $article,
                'category'=> $category,
            ]);
        }
    }

    /**
     * 清除缓存
     */
    public function actionClearCache($key){
        Yii::$app->response->format = Response::FORMAT_JSON;
        Yii::$app->cache->delete($key);
        return ['status'=>200,'message'=>'ok'];
    }

    /**
     * Deletes an existing Document model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        $article = new \backend\models\DocumentArticle;
        $article->findOne($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Document model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Document the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Document::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * 获取按月份分组的数据统计
     * @return [type] [description]
     */
    public function actionMonthCount(){
        $model = new Document();
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $model->getMonthCount(Yii::$app->request->get('date'));
    }
}
