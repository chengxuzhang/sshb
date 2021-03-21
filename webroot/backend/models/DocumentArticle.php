<?php

namespace backend\models;

use Yii;

class DocumentArticle extends \backend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'document_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'content'], 'required'],
            [['id', 'parse', 'bookmark'], 'integer'],
            [['content'], 'string'],
            [['template'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '文档ID',
            'parse' => '内容解析类型',
            'content' => '文章内容',
            'template' => '详情页显示模板',
            'bookmark' => '收藏数',
        ];
    }

    /**
     * 初始化默认的字段
     * @return [type] [description]
     */
    public function doSave(){
        $this->parse = $this->parse ? $this->parse : 0;
        $this->bookmark = $this->bookmark ? $this->bookmark : 0;
        return $this->save();
    }
}
