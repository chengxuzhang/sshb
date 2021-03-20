<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "house_type".
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property string $area
 * @property string $style
 * @property string $img
 * @property integer $createTime
 * @property integer $updateTime
 * @property integer $template_id
 * @property integer $village_id
 */
class HouseType extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createTime', 'updateTime', 'template_id', 'village_id'], 'integer'],
            [['name', 'type', 'area', 'style', 'img'], 'string', 'max' => 255],
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
            'type' => 'Type',
            'area' => 'Area',
            'style' => 'Style',
            'img' => 'Img',
            'createTime' => 'Create Time',
            'updateTime' => 'Update Time',
            'template_id' => 'Template ID',
            'village_id' => 'Village ID',
        ];
    }

    // 获取产品模版
    public function getProductTemplate()
    {
        return $this->hasMany(ProductTemplate::className(), ['id' => 'template_id'])->viaTable('house_type_template_relationship', ['house_type_id' => 'id']);
    }

    /**
     * 扩展字段
     * @return array
     */
    public function extraFields()
    {
        return ['productTemplate'];
    }
}
