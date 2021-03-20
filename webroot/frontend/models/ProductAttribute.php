<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product_attribute".
 *
 * @property string $id
 * @property string $name
 * @property string $value
 * @property string $price_default
 * @property string $price
 * @property integer $createTime
 * @property integer $template_id
 * @property integer $product_id
 */
class ProductAttribute extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_attribute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_default', 'price'], 'number'],
            [['createTime', 'template_id', 'product_id'], 'integer'],
            [['name', 'value'], 'string', 'max' => 255],
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
            'value' => 'Value',
            'price_default' => 'Price Default',
            'price' => 'Price',
            'createTime' => 'Create Time',
            'template_id' => 'Template ID',
            'product_id' => 'Product ID',
        ];
    }
}
