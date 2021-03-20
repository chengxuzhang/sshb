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
            // username and password are both required
            [['type'],'safe'],
            [['name', 'phone', 'province', 'city'], 'required'],
        ];
    }

    public function doSave(){
        $this->createTime = time();
        $this->status = self::COMMON_STATUS_DELETED;
        if($this->save()){
            return true;
        }
        return false;
    }
}
