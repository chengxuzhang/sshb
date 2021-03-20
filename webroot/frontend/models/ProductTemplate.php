<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product_template".
 *
 * @property string $id
 * @property string $name
 * @property integer $createTime
 */
class ProductTemplate extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_template';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createTime'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'createTime' => 'Create Time',
        ];
    }
}
