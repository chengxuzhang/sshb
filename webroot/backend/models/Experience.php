<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "experience".
 *
 * @property string $id
 * @property string $name
 * @property string $phone
 * @property string $type
 * @property string $province
 * @property string $city
 * @property integer $createTime
 * @property integer $status
 */
class Experience extends \backend\components\BaseModel
{
    public $statusParams = [
        '10' => '已处理',
        '20' => '未处理',
    ];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createTime', 'status'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['phone'], 'string', 'max' => 20],
            [['type'], 'string', 'max' => 10],
            [['province', 'city'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'phone' => '电话',
            'type' => '来源',
            'province' => '省份',
            'city' => '城市',
            'createTime' => '申请日期',
            'status' => '状态',
        ];
    }
}
