<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "experience".
 *
 * @property string $id
 * @property string $name
 * @property string $phone
 * @property string $title
 * @property string $email
 * @property string $content
 * @property integer $create_time
 * @property integer $status
 */
class Experience extends \backend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'status'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['phone'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 255],
            [['email', 'content'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'phone' => '电话',
            'title' => '主题',
            'email' => '邮箱',
            'content' => '留言内容',
            'create_time' => '留言时间',
            'status' => '状态',
        ];
    }
}
