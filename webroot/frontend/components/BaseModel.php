<?php

namespace frontend\components;

use frontend\models\Config;
use Yii;

class BaseModel extends \yii\db\ActiveRecord implements FrontGlobalConst {
    public $perPage = 10;
    public $sort = '-id';
    public $page = 0;

    public $indexDataUrl;
    
    public $commonStatus = [
            self::COMMON_STATUS_ACTIVE => '有效',
            self::COMMON_STATUS_DELETED => '删除',
        ];

	public static function classNameWithoutNamespace(){
        $className = self::className();
        $className = substr(strrchr($className,'\\'), 1);
        return $className;
    }

    /**
     * 获取配置的内容
     * @param null $keys
     * @return bool|mixed
     */
    public function getConfigCache($keys = null){
        if($keys == null){
            return false;
        }
        if(!$result = Yii::$app->cache->get("config_" . $keys)){
            $list = Config::findAll([]);
            foreach ($list as $val) {
                Yii::$app->cache->set("config_".$val->fieldName, $val->value);
            }
            return Yii::$app->cache->get("config_" . $keys);
        }
        return $result;
    }
}