<?php

namespace frontend\models;

use Yii;

class Cloud extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cloud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createTime', 'updateTime'], 'integer'],
            [['project_num', 'plan_style', 'designer', 'city', 'address', 'type', 'url', 'pdf', 'md5'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_num' => 'Project Num',
            'plan_style' => 'Plan Style',
            'designer' => 'Designer',
            'city' => 'City',
            'address' => 'Address',
            'type' => 'Type',
            'url' => 'Url',
            'createTime' => 'Create Time',
            'updateTime' => 'Update Time',
            'pdf' => 'Pdf',
            'md5' => 'Md5'
        ];
    }

    /**
     * 保存
     */
    public function doSave(){
        $this->createTime=time();
        $this->updateTime=$this->createTime;
        return $this->save();
    }
}
