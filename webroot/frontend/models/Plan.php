<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property string $id
 * @property string $title
 * @property string $remark
 * @property string $type
 * @property string $pic
 * @property string $link
 */
class Plan extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['remark', 'pic'], 'string'],
            [['title', 'type', 'link'], 'string', 'max' => 255],
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
            'remark' => 'Remark',
            'type' => 'Type',
            'pic' => 'Pic',
            'link' => 'Link',
        ];
    }
}
