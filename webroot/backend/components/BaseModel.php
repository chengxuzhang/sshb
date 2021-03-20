<?php

namespace backend\components;

use Yii;
use yii\web\UploadedFile;
use backend\components\BackGlobalConst;

class BaseModel extends \yii\db\ActiveRecord implements BackGlobalConst
{
	public $pageSize = 10;
    public $commonStatus = [
        self::COMMON_STATUS_ACTIVE => '符合',
        self::COMMON_STATUS_DELETED => '不符合',
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

    /**
     * 是否符合多头排列
     */
    public function checkMoreHeadSort($data, $day = 3) {
        $fiveDayNow = $this->getKlineAverage($data, 5);
        $tenDayNow = $this->getKlineAverage($data, 10);
        $twentyDayNow = $this->getKlineAverage($data, 20);
        $thirtyDayNow = $this->getKlineAverage($data, 30);
        if(bccomp($fiveDayNow, $tenDayNow, 2) == 1 && bccomp($tenDayNow, $twentyDayNow, 2) == 1 &&
            bccomp($twentyDayNow, $thirtyDayNow, 2) == 1){
            $fiveDayPrev = $this->getKlineAverage($data, 5, $day);
            $tenDayPrev = $this->getKlineAverage($data, 10, $day);
            $twentyDayPrev = $this->getKlineAverage($data, 20, $day);
            $thirtyDayPrev = $this->getKlineAverage($data, 30, $day);
            if(bccomp($fiveDayPrev, $tenDayPrev, 2) == 1 && bccomp($tenDayPrev, $twentyDayPrev, 2) == 1 &&
                bccomp($twentyDayPrev, $thirtyDayPrev, 2) == 1){
                return true;
            }
        }
        return false;
    }

    /**
     * 5日线是否最底部
     */
    public function isFiveBootom($data) {
        $fiveDayNow = $this->getKlineAverage($data, 5);
        $tenDayNow = $this->getKlineAverage($data, 10);
        $twentyDayNow = $this->getKlineAverage($data, 20);
        $thirtyDayNow = $this->getKlineAverage($data, 30);
        if (bccomp($fiveDayNow, $tenDayNow, 2) <= 0 && bccomp($fiveDayNow, $twentyDayNow, 2) <= 0 &&
        bccomp($fiveDayNow, $thirtyDayNow, 2) <= 0) {
            return true;
        }
        return false;
    }

    /**
     * 正排序和到排序
     * @param $data
     * @param int $check
     */
    public function upOrDown($data, $check = 1, $day = 0) {
        $fiveDayNow = $this->getKlineAverage($data, 5, $day);
        $tenDayNow = $this->getKlineAverage($data, 10, $day);
        $twentyDayNow = $this->getKlineAverage($data, 20, $day);
        $thirtyDayNow = $this->getKlineAverage($data, 30, $day);
        if ($check == 1) {
            if(bccomp($fiveDayNow, $tenDayNow, 2) == 1 && bccomp($tenDayNow, $twentyDayNow, 2) == 1 &&
                bccomp($twentyDayNow, $thirtyDayNow, 2) == 1){
                return true;
            }
        } else if ($check == 2) {
            if(bccomp($fiveDayNow, $tenDayNow, 2) == -1 && bccomp($tenDayNow, $twentyDayNow, 2) == -1 &&
                bccomp($twentyDayNow, $thirtyDayNow, 2) == -1){
                return true;
            }
        }
        return false;
    }

    /**
     * 均线是否刚抬头
     */
    public function isKlineRiseToday($data, $day = 5) {
        $dayNow = $this->getKlineAverage($data, $day);
        $prevDay = $this->getKlineAverage($data, $day, 1);
        $threeDay = $this->getKlineAverage($data, $day, 3);
        if (bccomp($dayNow, $prevDay, 2) === 1 && bccomp($threeDay, $prevDay, 2) === 1) {
            return true;
        }
        return false;
    }

    /**
     * 是否跌停
     */
    public function isFallStop($data) {
        if (bccomp($data[1][2], $data[2][2], 2) === -1) {
            $cj = abs($data[1][2] - $data[2][2]);
            $cjl = $cj / $data[2][2];
            if (bccomp(9.8, $cjl, 2) === -1) {
                return true;
            }
        }
        return false;
    }


    /**
     * @param $data
     * @param $day
     * 获取某天的均线值
     */
    public function getKlineAverage($data, $len, $day = 0){
        $total = 0;
        for($i = 0;$i < $len;$i++){
            $arr = explode(",", $data[$i + $day]);
            $total += $arr[2];
        }
        $result = $total/$len;
        return $result;
    }


    /**
     * @param $klines
     * @return bool
     * 判断5日均线是否拐头
     */
    public function checkFiveRise($klines){
        $todayNum = $yesterdayNum = 0;
        for($i = 0; $i < 5; $i++){
            $yesterday = $i + 1; // 求第二天的均线数据值
            $item1 = explode(",", $klines[$i]);
            $item2 = explode(",", $klines[$yesterday]);
            $todayNum += $item1[2];
            $yesterdayNum += $item2[2];
        }
        $todayNum = $todayNum / 5;
        $yesterdayNum = $yesterdayNum / 5;
        if(bccomp($todayNum, $yesterdayNum, 2) == 1){
            return true;
        }
        return false;
    }


    /**
     * @param $klines
     * 收阳的最佳状态
     */
    public function checkSunStyle($klines) {
        $today = explode(",", $klines[0]);
        $yesterday = explode(",", $klines[1]);
        if(bccomp($today[2], $yesterday[1], 2) == -1){
            return true;
        }
        return false;
    }


    /**
     * @param $num
     * 是否是几日连跌
     */
    public function isDownDay($klines, $num) {
        for($i = 0;$i<$num;$i++){
            $arr = explode(",", $klines[$i+1]);
            if(bccomp($arr[1], $arr[2], 2) == -1){
                return false;
            }
        }
        return true;
    }

    /**
     * @param $data
     * 判断三十日均线是否处于上涨趋势
     */
    public function checkDayRise($klines, $daylen = 30, $angle = 10){
        $todayNum = $yesterdayNum = $dynamicNum = 0;
        for($i = 0; $i < $daylen; $i++){
            $yesterday = $i + 1; // 求第二天的均线数据值
            $dynamic = $i + 10; // 求十天前的均线数据值
            $item1 = explode(",", $klines[$i]);
            $item2 = explode(",", $klines[$yesterday]);
            $item3 = explode(",", $klines[$dynamic]);
            $todayNum += $item1[2];
            $yesterdayNum += $item2[2];
            $dynamicNum += $item3[2];
        }
        $todayNum = $todayNum / $daylen;
        $yesterdayNum = $yesterdayNum / $daylen;
        $dynamicNum = $dynamicNum / $daylen;

        if(bccomp($todayNum, $yesterdayNum, 2) == 1 && bccomp($todayNum, $dynamicNum, 2) == 1) {
            return true;
        }
        return false;
    }

    /**
     * @param $content
     * @return array
     * 获取数组数据
     */
    public function getData($content) {
        if(strpos($content, "jQuery") !== false){
            $arr = explode("(", $content);
            $arr2 = explode(")", $arr[1]);
            $result = $arr2[0];
        }else{
            return fail(401, $content);
        }
        $data = json_decode($result, true);
        return $data;
    }
}