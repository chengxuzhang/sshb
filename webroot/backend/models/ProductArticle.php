<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product_article".
 *
 * @property string $id
 * @property integer $parse
 * @property string $content
 * @property string $template
 * @property string $bookmark
 */
class ProductArticle extends \backend\components\BaseModel
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
            'id' => 'ID',
            'parse' => 'Parse',
            'content' => '内容',
            'template' => 'Template',
            'bookmark' => 'Bookmark',
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
