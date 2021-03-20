<?php

namespace backend\components;

use Yii;
use backend\components\GatewayHelper;

class CustomizeHelper {

    /**
     * 获取新闻信息
     * @return [type] [description]
     */
    public function getNewData($page = 1, $pagesize = 10){
        $url = Yii::$app->params['api_news'];
        $query = [
            'page'=>$page,
            'pagesize'=>$pagesize,
            'prevarticalid'=>753581,
            'flagtogether'=>1,
            'labelid'=>3,
        ];
        $result = $this->curl($url,$query,"GET");
        return $result;
    }


    public function curl($url, $query=array(), $method='GET', $headers=array())
    {
        $http = new GatewayHelper();
        $res = $http->curl($method, $url, $query, $headers);
        return json_decode($res, true);
    }

}
