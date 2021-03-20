<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "village".
 *
 * @property string $id
 * @property string $name
 * @property string $address
 * @property integer $createTime
 */
class Village extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'village';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createTime'], 'integer'],
            [['name', 'address'], 'string', 'max' => 255],
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
            'address' => 'Address',
            'createTime' => 'Create Time',
        ];
    }

    /**
     * 获取小区户型
     */
    public function getHouseType(){
        return $this->hasMany(HouseType::className(), ['village_id'=>'id']);
    }

    /**
     * 扩展字段
     * @return array
     */
    public function extraFields()
    {
        return ['houseType'];
    }
}
