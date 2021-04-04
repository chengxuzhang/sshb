<?php

namespace frontend\models;

use Yii;

class Product extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'category_id', 'root', 'pid', 'model_id', 'type', 'link_id', 'cover_id', 'display', 'deadline', 'attach', 'view', 'comment', 'extend', 'level', 'create_time', 'update_time', 'status'], 'integer'],
            [['category_id','title','status'], 'required'],
            [['name'], 'string', 'max' => 40],
            [['title'], 'string', 'max' => 80],
            [['cover_url'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 140],
            [['tag','position'],'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '文档ID',
            'uid' => '创建人',
            'name' => '标识',
            'title' => '标题',
            'category_id' => '所属分类',
            'description' => '描述',
            'root' => '根节点',
            'pid' => '所属ID',
            'model_id' => '内容模型ID',
            'type' => '内容类型',
            'position' => '推荐位',
            'link_id' => '外链',
            'cover_id' => '封面',
            'display' => '可见性',
            'deadline' => '截至时间',
            'attach' => '附件数量',
            'view' => '浏览量',
            'comment' => '评论数',
            'extend' => '扩展统计字段',
            'level' => '优先级',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
            'status' => '数据状态',
            'cover_url'=>'封面链接地址',
            'tag' => '标签',
        ];
    }

    public function getArticle(){
        return $this->hasOne(ProductArticle::className(), ['id'=>'id']);
    }

    public function extraFields()
    {
        return ['article'];
    }
}
