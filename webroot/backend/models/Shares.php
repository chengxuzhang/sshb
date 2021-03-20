<?php

namespace backend\models;

use Yii;
use yii\web\Response;

class Shares extends \backend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shares';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'update_time'], 'integer'],
            [['code'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 60],
            [['url', 'content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => '代码',
            'name' => '名称',
            'create_time' => '加入日期',
            'update_time' => '更新日期',
            'url' => '数据地址',
            'content' => 'json数据',
        ];
    }

    /**
     * 初始化默认的字段
     * @return [type] [description]
     */
    public function doSave(){
        if($this->isNewRecord){
            $this->create_time = time();
        }
        $this->update_time = time();
        return $this->save();
    }

    /**
     * 获取今天上涨的股票
     */
    public function getTodayRise(){
        $url = "http://66.push2.eastmoney.com/api/qt/clist/get?cb=jQuery112405597343123098935_1599741863356&pn=1&pz=3000&po=1&np=1&ut=bd1d9ddb04089700cf9c27f6f7426281&fltt=2&invt=2&fid=f3&fs=m:0+t:6,m:0+t:13,m:0+t:80,m:1+t:2,m:1+t:23&fields=f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f12,f13,f14,f15,f16,f17,f18,f20,f21,f23,f24,f25,f22,f11,f62,f128,f136,f115,f152&_=1599741863381";
        $content = curlGet($url);
        $data = $this->getData($content);
        $data = $this->filterShares($data['data']['diff'], 3);
        $res = [];
        foreach ($data as $val){
            if($val['f3'] > 0) {
                array_push($res, $val);
            }else{
                return $res;
            }
        }
        return $res;
    }

    /**
     * 同步K线数据
     */
    public function synchronize(){
        $result = "";
        $content = curlGet($this->url);
        if(strpos($content, "jQuery") !== false){
            $arr = explode("(", $content);
            $arr2 = explode(")", $arr[1]);
            $result = $arr2[0];
        }else{
            return fail(400, $content);
        }
        $data = json_decode($result, true);
        $len = count($data['data']['kline']) - 1;
        foreach ($data['data']['klines'] as $key => $kline) {
            $item = explode(",", $kline);
            $k = Kline::findOne(['riqi'=>$item[0], 'scode'=>$this->code]);
            if($k){
                // do noting
            }else{
                $model = new Kline();
                $model->riqi = $item[0];
                $model->kp = $item[1];
                $model->sp = $item[2];
                $model->zg = $item[3];
                $model->zd = $item[4];
                $model->zdf = 0;
                $model->zde = 0;
                $model->cjl = $item[5];
                $model->cje = $item[6];
                $model->zf = $item[7];
                $model->hsl = $item[8];
                $model->scode = $this->code;
                $model->save();
            }
        }
        return success(['code'=>$this->code]);
    }

    public function selectSharesByThirtyKline() {
        $content = curlGet($this->url);
        $data = $this->getData($content);
        $klines = array_reverse($data['data']['klines']);
        $thirtyRise = $this->checkDayRise($klines);
        $dayDown = $this->isDownDay($klines, 2); // 是否是两日连跌
        $oneDayDown = $this->isDownDay($klines, 1); // 是否符合1日跌
        $yang = $this->checkSunStyle($klines); // 检查收阳的样子
        $five = $this->checkFiveRise($klines);
        $msg = [];

        if($thirtyRise) {
            array_push($msg, "符合30日均线上涨");
        }
        if($yang) {
            array_push($msg, "符合收阳的最佳状态");
        }
        if(!$dayDown && $oneDayDown) {
            array_push($msg, "符合连续1天收阴条件");
        }
        if($this->checkMoreHeadSort($data)) {
            array_push($msg, "符合多头排列");
        }
        if($five){
            array_push($msg, "符合5日均线上涨");
        }
        if($dayDown){
            array_push($msg, "符合两日连跌购买时机");
        }
        return success(['code'=>$this->code, 'result'=>false, 'msg'=>implode(",", $msg)]);
    }

    public function filterShares($datas, $type = 1){
        $result = [];
        foreach ($datas as $key => $data) {
            switch ($type){
                case 1:
                    array_push($result, $data);
                    break;
                case 2:
                    if(strpos($data['f12'], '300') === 0){
                        array_push($result, $data);
                    }
                    break;
                case 3:
                    if(strpos($data['f12'], '600') === 0 || strpos($data['f12'], '601') === 0 ||
                        strpos($data['f12'], '603') === 0){
                        array_push($result, $data);
                    }
                    break;
                case 4:
                    if(strpos($data['f12'], '900') === 0 || strpos($data['f12'], '000') === 0 ||
                        strpos($data['f12'], '200') === 0 || strpos($data['f12'], '002') === 0){
                        array_push($result, $data);
                    }
                    break;
            }
        }
        return $result;
    }

    // 返回反弹上涨概率
    public function rebound($code) {
        $shares = Shares::findOne(['code'=>$code]);
        if($shares) {
            $content = curlGet($shares->url);
            $data = $this->getData($content);
            $klines = array_reverse($data['data']['klines']);
            foreach ($klines as $key => $kline) {
                if(bccomp($kline[1], $kline[2], 2) === -1) { // 开盘小于收盘
//                    if (bccomp($klines[$key+1][2]))
                }
            }
        }
        return [];
    }
}
