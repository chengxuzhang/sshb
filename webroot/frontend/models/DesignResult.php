<?php

namespace frontend\models;

use Yii;

class DesignResult extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'design_result';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qt'], 'integer'],
            [['remark', 'pics'], 'string'],
            [['title', 'style'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'qt' => 'Qt',
            'title' => 'Title',
            'remark' => 'Remark',
            'pics' => 'Pics',
            'style' => 'Style',
        ];
    }
}
