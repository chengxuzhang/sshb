<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "house_type_template_relationship".
 *
 * @property string $id
 * @property integer $template_id
 * @property integer $house_type_id
 */
class HouseTypeTemplateRelationship extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house_type_template_relationship';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['template_id', 'house_type_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'template_id' => 'Template ID',
            'house_type_id' => 'House Type ID',
        ];
    }
}
