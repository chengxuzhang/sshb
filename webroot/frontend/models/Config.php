<?php

namespace frontend\models;

use Yii;

class Config extends \frontend\components\BaseModel
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'create_time', 'update_time'], 'integer'],
            [['fieldName' ,'type', 'value'], 'required'],
            [['value'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fieldName' => '配置名称',
            'type' => '配置类型',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
            'value' => '默认值',
        ];
    }

    /**
     * 保存数据
     * @return [type] [description]
     */
    public function saveConfig(){
        return $this->save();
    }
}
