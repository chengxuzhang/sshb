<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $id
 * @property string $position
 * @property string $name
 * @property integer $createTime
 * @property integer $template_id
 */
class Product extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createTime', 'template_id'], 'integer'],
            [['position', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position' => 'Position',
            'name' => 'Name',
            'createTime' => 'Create Time',
            'template_id' => 'Template ID',
        ];
    }

    // 获取产品模版
    public function getProductAttribute()
    {
        return $this->hasMany(ProductAttribute::className(), ['template_id' => 'template_id', 'product_id' => 'id']);
    }

    /**
     * 扩展字段
     * @return array
     */
    public function extraFields()
    {
        return ['productAttribute'];
    }
}
