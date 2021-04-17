<?php

namespace backend\components;

use Yii;
use yii\web\UploadedFile;
use backend\components\BackGlobalConst;

class BaseModel extends \yii\db\ActiveRecord implements BackGlobalConst
{
	public $pageSize = 10;
    public $commonStatus = [
        self::COMMON_STATUS_ACTIVE => '是',
        self::COMMON_STATUS_DELETED => '否',
    ];
    public $result = [
        "status" => 200,
        "msg"=>"成功！",
        "data"=>null
    ];
    public $httpOssUrl = self::HTTP_OSS_DOMAIN;
    public $httpOssDirname = self::HTTP_OSS_DIRNAME;

	public static function classNameWithoutNamespace(){
        $className = self::className();
        $className = substr(strrchr($className,'\\'), 1);
        return $className;
    }

    /**
     * 获取api数据 设置api数据
     * @param  array  $query   [description]
     * @param  string $method  [description]
     * @return [type]          [description]
     */
    public function getApiUrlData($query=array()){
        $excelFile = UploadedFile::getInstance($this, $query['filename']);
        $filename = date("YmdHis") . '.' . $excelFile->extension;
        $tmpPath = UPLOAD_URL;
        $excelFile->saveAs($tmpPath . $filename);//临时保存文件
        return [
        	'status' => 200,
        	'data' => [
        		'name' => $filename,
        	],
        ];
    }

    /**
     * 更新缓存
     * @param  [type] $key [description]
     * @return [type]      [description]
     */
    public function updateCache($key){
        $cacheKey = Yii::$app->params['cacheKey'];
        return Yii::$app->cache->delete($cacheKey[$key]);
    }

    /**
     * @param $option
     * 更新
     */
    public function updateSolrInfo($option){
        $client = new \SolrClient(Yii::$app->params['solrConfig']);
        $doc = new \SolrInputDocument();
        foreach ($option as $key => $val) {
            if(is_array($val) && $val){
                foreach ($val as $v){
                    $doc->addField($key, $v);
                }
            }else{
                $doc->addField($key, $val);
            }
        }
        $client->addDocument($doc);
        $client->commit();
    }

    public function success($data = null){
        $result = $this->result;
        $result["data"] = $data;
        return $result;
    }

    public function fail($status = 400,$msg=""){
        $result = $this->result;
        $result["status"] = $status;
        $result["msg"] = $msg;
        return $result;
    }

    public function getErrorMsg($data){
        foreach ($data as $key => $msg) {
            return $msg;
        }
    }
}