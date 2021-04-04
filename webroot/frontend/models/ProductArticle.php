<?php

namespace frontend\models;

use Yii;

class ProductArticle extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_article';
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
}
