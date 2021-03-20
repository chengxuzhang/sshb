<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property string $id
 * @property string $title
 * @property string $pid
 * @property string $sort
 * @property string $description
 * @property string $create_time
 * @property string $update_time
 * @property integer $level
 * @property string $address
 */
class Organization extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'sort', 'create_time', 'update_time', 'level'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['description', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'pid' => 'Pid',
            'sort' => 'Sort',
            'description' => 'Description',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'level' => 'Level',
            'address' => 'Address',
        ];
    }
}
