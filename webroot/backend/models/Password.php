<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\User as CommonUser;

/**
 * Signup form
 */
class Password extends Model
{
    public $newPwd;
    public $newPwdRe;


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newPwd' => '新密码',
            'newPwdRe' => '确认密码',
        ];
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['newPwd','newPwdRe'], 'required'],
            [['newPwd','newPwdRe'], 'string', 'min' => 6, 'max' => 20],
            [['newPwdRe'], 'checkPwd'],
        ];
    }

    /**
     * 自定义验证B
     */
    public function checkPwd($attribute, $params)
    {
        if ($this->newPwdRe != $this->newPwd)
        {
            $this->addError($attribute, "密码输入不一致！");
        }
    }

    /**
     * @param $errors
     * @return mixed
     * 返回验证规则的第一个错误信息
     */
    public function getErrorInfo($errors){
        foreach ($errors as $key => $error) {
            return $error;
        }
        return false;
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function doSave()
    {
        $user = CommonUser::findOne(['username'=>Yii::$app->user->identity->username]);
        $user->setPassword($this->newPwdRe);
        $user->generateAuthKey();

        return $user->save();
    }
}
