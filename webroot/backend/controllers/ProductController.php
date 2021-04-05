<?php

namespace backend\controllers;

use backend\models\ProductArticle;
use Yii;
use backend\models\Product;
use backend\models\ProductSearch;
use backend\components\BaseController;
use yii\db\Exception;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends BaseController
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Document model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        $article = new ProductArticle();

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
            return $this->render('create', [
                'model' => $model,
                'article' => $article,
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
        $article = ProductArticle::findOne($id);

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
            return $this->render('update', [
                'model' => $model,
                'article' => $article,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
