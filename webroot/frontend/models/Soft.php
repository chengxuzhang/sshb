<?php

namespace frontend\models;

use Yii;

class Soft extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soft';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createTime', 'updateTime', 'publishDate'], 'integer'],
            [['version', 'remark', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'version' => 'Version',
            'createTime' => 'Create Time',
            'remark' => 'Remark',
            'link' => 'Link',
            'updateTime' => 'Update Time',
            'publishDate' => 'Publish Date',
        ];
    }
}
