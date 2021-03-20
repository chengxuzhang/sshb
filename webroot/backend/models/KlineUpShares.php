<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kline_up_shares".
 *
 * @property string $id
 * @property string $scode
 * @property string $sname
 * @property string $create_time
 * @property integer $is_thirty_up
 * @property integer $is_sun
 * @property integer $is_one_down
 * @property integer $is_more_head
 * @property integer $is_five_up
 * @property integer $is_two_down
 */
class KlineUpShares extends \backend\components\BaseModel
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kline_up_shares';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_thirty_up', 'is_sixty_up', 'is_sun', 'is_one_down', 'is_more_head', 'is_five_up', 'is_two_down', 'is_fall_stop',
                'is_up_to_down', 'is_down_to_up', 'is_kline_rise_five', 'five_day_uptodown', 'five_day_downtoup', 'is_five_bottom'], 'integer'],
            [['scode', 'sname'], 'string', 'max' => 60],
            [['create_time'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'scode' => '股票代码',
            'sname' => '股票名称',
            'create_time' => '分析日期',
            'is_thirty_up' => '30日均线是否上涨',
            'is_sixty_up' => '60日均线是否上涨',
            'is_sun' => '是否收阳最佳状态',
            'is_one_down' => '是否连跌1天',
            'is_more_head' => '是否多头排列',
            'is_up_to_down' => '是否正顺序排列',
            'is_down_to_up' => '是否倒顺序排列',
            'is_five_up' => '5日均线是否上涨',
            'is_two_down' => '是否连跌2天',
            'is_fall_stop' => '是否跌停',
            'is_kline_rise_five' => '5日线是否刚抬头',
            'five_day_uptodown' => '5日前是否正序排列',
            'five_day_downtoup' => '5日前是否倒序排列',
            'is_five_bottom' => '5日线是否在最底部'
        ];
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
     * 获取今天收阳的股票
     */
    public function getTodayCollectYang($type = 'yang') {
        $url = "http://66.push2.eastmoney.com/api/qt/clist/get?cb=jQuery112405597343123098935_1599741863356&pn=1&pz=3000&po=1&np=1&ut=bd1d9ddb04089700cf9c27f6f7426281&fltt=2&invt=2&fid=f3&fs=m:0+t:6,m:0+t:13,m:0+t:80,m:1+t:2,m:1+t:23&fields=f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f12,f13,f14,f15,f16,f17,f18,f20,f21,f23,f24,f25,f22,f11,f62,f128,f136,f115,f152&_=1599741863381";
        $content = curlGet($url);
        $data = $this->getData($content);
        $data = $this->filterShares($data['data']['diff'], 3);
        $res = [];
        foreach ($data as $val){
            if(bccomp($val['f2'], $val['f17'], 2) === ($type == 'yang' ? 1: -1)) {
                array_push($res, $val);
            }
        }
        return $res;
    }

    /**
     * @return array
     */
    public function selectSharesByThirtyKline($code) {
        $klineUpShares = KlineUpShares::findOne(['scode'=>$code, 'create_time'=>date('Ymd')]);

        if(!$klineUpShares){
            $shares = Shares::findOne(['code'=>$code]);
            if($shares){
                $content = curlGet($shares->url);
                $data = $this->getData($content);
                $klines = array_reverse($data['data']['klines']);
                $thirtyRise = $this->checkDayRise($klines);
                $dayDown = $this->isDownDay($klines, 2); // 是否是两日连跌
                $oneDayDown = $this->isDownDay($klines, 1); // 是否符合1日跌
                $yang = $this->checkSunStyle($klines); // 检查收阳的样子
                $five = $this->checkFiveRise($klines);
                $isfallstop = $this->isFallStop($klines); // 是否跌停
                $isklinerisefive = $this->isKlineRiseToday($klines);

                $this->scode = $code;
                $this->sname = $shares->name;
                $this->create_time = date('Ymd');
                $this->is_thirty_up = $thirtyRise ? 10 : 20;
                $this->is_sixty_up = $this->checkDayRise($klines, 60) ? 10 : 20;
                $this->is_sun = $yang ? 10 : 20;
                $this->is_one_down = (!$dayDown && $oneDayDown) ? 10 : 20;
                $this->is_one_down = (!$dayDown && $oneDayDown) ? 10 : 20;
                $this->is_more_head = $this->checkMoreHeadSort($klines) ? 10 : 20;
                $this->is_up_to_down = $this->upOrDown($klines) ? 10 : 20;
                $this->is_down_to_up = $this->upOrDown($klines, 2) ? 10 : 20;
                $this->five_day_uptodown = $this->upOrDown($klines, 1, 5) ? 10 : 20;
                $this->five_day_downtoup = $this->upOrDown($klines, 2, 5) ? 10 : 20;
                $this->is_five_bottom = $this->isFiveBootom($klines) ? 10 : 20;
                $this->is_five_up = $five ? 10 : 20;
                $this->is_two_down = $dayDown ? 10 : 20;
                $this->is_fall_stop = $isfallstop ? 10 : 20;
                $this->is_kline_rise_five = $isklinerisefive ? 10 : 20;
                $this->save();

                $shares->content = json_encode($klines);
                $shares->save();
            }
        }

        return success(['code'=>$code]);
    }

    /**
     * @param $datas
     * @param int $type
     * @return array
     * 过滤掉不需要的数据
     */
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
                        strpos($data['f12'], '603') === 0 || strpos($data['f12'], '900') === 0 || strpos($data['f12'], '000') === 0 ||
                        strpos($data['f12'], '200') === 0 || strpos($data['f12'], '002') === 0){
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
}
