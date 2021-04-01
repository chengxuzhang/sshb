<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property string $id
 * @property string $title
 * @property integer $sort
 * @property string $link
 * @property string $pic
 * @property string $keywords
 */
class Video extends \backend\components\BaseModel
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
            [['sort'], 'integer'],
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
            'keywords' => 'Keywords',
        ];
    }
}
