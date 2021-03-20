<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mobile_user".
 *
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $type
 */
class MobileUser extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mobile_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'type'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['org_id','org_level', 'is_master'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'type' => 'Type',
            'org_id' => '组织',
            'org_level' => '组织级别',
            'is_master' => '是否为组长',
        ];
    }
}
