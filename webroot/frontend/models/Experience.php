<?php
namespace frontend\models;

use Yii;
use frontend\components\BaseModel;

/**
 * Login form
 */
class Experience extends BaseModel
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
            [['phone'], 'string', 'max' => 11],
            [['title'], 'string', 'max' => 255],
            [['email', 'content'], 'string', 'max' => 255],
        ];
    }

    public function doSave(){
        $this->create_time = time();
        $this->status = self::COMMON_STATUS_DELETED;
        if($this->save()){
            return true;
        }
        return false;
    }
}
