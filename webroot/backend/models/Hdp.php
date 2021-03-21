<?php

namespace backend\models;

use Yii;

class Hdp extends \backend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hdp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','remark'], 'required'],
            [['status', 'create_time','type','sort'], 'integer'],
            [['remark'], 'string'],
            [['title', 'path', 'icon', 'pic', 'short_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'path' => '地址',
            'status' => '状态',
            'create_time' => '创建日期',
            'remark' => '描述',
            'icon' => '图标',
            'pic' => '图片',
            'type' => '类型',
            'short_title' => '副标题',
            'sort' => '排序',
        ];
    }

    public function doSave(){
        if($this->isNewRecord){
            $this->create_time=time();
            $this->sort = $this->sort ?: 0;
        }
        return $this->save();
    }
}
