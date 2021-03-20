<?php

namespace backend\models;

use Yii;

class Config extends \backend\components\BaseModel
{
    public $_types = [
        1=>'输入框',
        2=>'文本框',
        3=>'下拉',
        4=>'图片',
        5=>'富文本',
    ];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pl_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'create_time', 'update_time', 'isShow', 'config_type', 'sort', 'status'], 'integer'],
            [['value'], 'required'],
            [['value', 'content'], 'string'],
            [['fieldName'], 'string', 'max' => 60],
            [['title', 'remark'], 'string', 'max' => 255],
            [['fieldName'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fieldName' => '字段名称',
            'type' => '类型',
            'create_time' => '创建日期',
            'update_time' => '更新日期',
            'value' => '初始值',
            'isShow' => '是否提供给前端',
            'title' => '标题',
            'remark' => '描述',
            'content' => '配置值',
            'config_type' => '配置分类',
            'sort' => '排序',
            'status' => '状态',
        ];
    }

    /**
     * 保存配置
     * @return bool
     */
    public function doSave(){
        if($this->isNewRecord){
            $this->create_time = time();
            $this->update_time = $this->create_time;
        }else{
            $this->update_time = time();
        }
        return $this->save();
    }
}
