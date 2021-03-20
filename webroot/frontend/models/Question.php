<?php

namespace frontend\models;

use Yii;

class Question extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'next_id', 'type', 'createTime', 'updateTime'], 'integer'],
            [['answer_list'], 'string'],
            [['title', 'answer', 'pic'], 'string', 'max' => 255],
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
            'sort' => 'Sort',
            'next_id' => 'Next ID',
            'type' => 'Type',
            'answer_list' => 'Answer List',
            'answer' => 'Answer',
            'createTime' => 'Create Time',
            'updateTime' => 'Update Time',
            'pic' => 'Pic',
        ];
    }
}
