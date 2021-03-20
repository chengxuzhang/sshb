<?php

namespace backend\models;

use Yii;

class Member extends \backend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pl_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at', 'isKol', 'level', 'ledou', 'integral'], 'integer'],
            [['sex'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'phone', 'nickname', 'avator', 'remark','openId'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => '是否启用',
            'created_at' => '注册时间',
            'updated_at' => 'Updated At',
            'phone' => '电话',
            'nickname' => '昵称',
            'avator' => '头像',
            'remark' => '简介',
            'sex' => '性别',
            'isKol' => '是否kol用户',
            'level' => '等级',
            'ledou' => '乐豆',
            'integral' => '积分',
            'openId'=>'openId',
            'receiver_address'=>'收货地址'
        ];
    }

    /**
     * 设置和取消用户的kol标识
     */
    public function setKol($post){
        $sid = $post['sid'];
        $sids = explode(",", $sid);
        foreach ($sids as $sid) {
            $update = self::findOne($sid);
            if($update['isKol'] == self::COMMENT_STATUS_ACTIVE){
                $update['isKol'] = self::COMMENT_STATUS_DELETE;
            }else{
                $update['isKol'] = self::COMMENT_STATUS_ACTIVE;
            }
            $update->save();
        }
        return true;
    }
}
