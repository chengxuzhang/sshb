<?php
namespace backend\components;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use backend\components\BackGlobalConst;

class BaseController extends Controller implements BackGlobalConst {
    protected $modelClass ;//让子类重写的  可以不重写，自动取Controller的name
	protected $model;

	public function actions()
    {
        return [
            'upload' => [
                'class' => 'backend\components\UEditorAction',
                'config' => [
                    "imageUrlPrefix"  => CacheConfig::getConfigCache('endpoint') . CacheConfig::getConfigCache('dirname'),//图片访问路径前缀
                    "imagePathFormat" => "/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}", //上传保存路径
                    "imageFieldName"  => "upload",
                    "imageUrlAftfix"  => "", // 文件后缀
                ],
            ]
        ];
    }

    public function init()
    {
        $modelName = !empty($this->modelClass) ? $this->modelClass :
            str_replace("Controller", "", str_replace("controllers", "models", $this->className()) ) ;
        $this->model = new $modelName();
    }

    /**
     * 解决不能跨域API问题
     * @return [type] [description]
     */
    public function actionApiUrl(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        if(Yii::$app->request->isPost){
            $query = Yii::$app->request->post();
            return $this->model->getApiUrlData($query);
        }
    }

    /**
     * 更新缓存
     * @return [type] [description]
     */
    public function actionUpdateCache($key){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $this->model->updateCache($key);
        return ['status'=>1,'info'=>'更新成功'];
    }

    public function actionDelete($id)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $update = $this->model->find()->where(['id'=>$id])->one();
        $update->status = self::COMMENT_STATUS_DELETE;
        $update->save();
        return success();
    }

}
