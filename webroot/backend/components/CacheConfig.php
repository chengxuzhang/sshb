<?php

namespace backend\components;

use backend\models\Config;
use Yii;

class CacheConfig implements \backend\components\BackGlobalConst {
    /**
     * 获取配置的内容
     * @param null $keys
     * @return bool|mixed
     */
    public static function getConfigCache($keys = null){
        if($keys == null){
            return false;
        }
        if(!Yii::$app->cache->exists("config_" . $keys)){
            $list = Config::find()->all();
            foreach ($list as $val) {
                Yii::$app->cache->set("config_".$val->fieldName, $val->value);
            }
        }
        return Yii::$app->cache->get("config_" . $keys);
    }
}