<?php

namespace frontend\models;

use Yii;

class Category extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['pid', 'sort', 'list_row', 'link_id', 'allow_publish', 'display', 'reply', 'check', 'create_time', 'update_time', 'status'], 'integer'],
            [['title', 'meta_title'], 'string', 'max' => 50],
            [['keywords', 'description'], 'string', 'max' => 255],
            [['model', 'type', 'reply_model', 'icon'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '分类ID',
            'title' => '标题',
            'pid' => '上级分类ID',
            'sort' => '排序',
            'list_row' => '列表每页行数',
            'meta_title' => 'SEO的网页标题',
            'keywords' => '关键字',
            'description' => '描述',
            'model' => '关联模型',
            'type' => '允许发布的内容类型',
            'link_id' => '外链',
            'allow_publish' => '是否允许发布内容',
            'display' => '可见性',
            'reply' => '是否允许回复',
            'check' => '发布的文章是否需要审核',
            'reply_model' => '',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
            'status' => '数据状态',
            'icon' => '分类图标',
        ];
    }
}
