<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "village_style_relationship".
 *
 * @property string $id
 * @property integer $village_id
 * @property string $style
 */
class VillageStyleRelationship extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'village_style_relationship';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['village_id'], 'integer'],
            [['style'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'village_id' => 'Village ID',
            'style' => 'Style',
        ];
    }
}
