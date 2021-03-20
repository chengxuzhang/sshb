<?php

namespace frontend\models;

use Yii;

class Hdp extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hdp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'create_time', 'type', 'sort'], 'integer'],
            [['remark'], 'string'],
            [['title', 'path', 'icon', 'pic', 'short_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'path' => 'Path',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'remark' => 'Remark',
            'icon' => 'Icon',
            'pic' => 'Pic',
            'type' => 'Type',
            'short_title' => 'Short Title',
            'sort' => 'Sort',
        ];
    }
}
