<?php

namespace frontend\models;

use Yii;

class Video extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'type', 'bigtype'], 'integer'],
            [['title', 'link', 'pic', 'keywords'], 'string', 'max' => 255],
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
            'link' => 'Link',
            'pic' => 'Pic',
            'type' => 'Type',
            'bigtype' => 'Bigtype',
            'keywords' => 'keywords'
        ];
    }
}
