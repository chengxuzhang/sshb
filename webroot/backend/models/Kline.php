<?php

namespace backend\models;

use Yii;

class Kline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kp', 'sp', 'zg', 'zd', 'zdf', 'zde', 'cjl', 'cje', 'zf', 'hsl'], 'number'],
            [['scode'], 'string', 'max' => 20],
            [['riqi'], 'string', 'max' => 255],
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
            'kp' => '开盘',
            'sp' => '收盘',
            'zg' => '最高',
            'zd' => '最低',
            'zdf' => '涨跌幅',
            'zde' => '涨跌额',
            'cjl' => '成交量',
            'cje' => '成交额',
            'zf' => '振幅',
            'hsl' => '换手率',
            'riqi' => '日期',
            'sname'=>'股票名称',
        ];
    }

    /**
     * 获取文档分类信息
     * @return [type] [description]
     */
    public function getShares()
    {
        return $this->hasOne(Shares::className(),['code'=>'scode']);
    }
}
