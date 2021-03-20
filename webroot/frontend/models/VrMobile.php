<?php

namespace frontend\models;

use Yii;

class VrMobile extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vr_mobile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile','url'],'required'],
            [['is_view', 'is_down', 'createTime', 'updateTime', 'cloud_id', 'count'], 'integer'],
            [['mobile'], 'string', 'max' => 20],
            [['name','designer'], 'string', 'max' => 60],
            [['url'], 'string', 'max' => 255],
            [['city','plan_style'], 'string', 'max' => 255],
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
            'mobile' => 'Mobile',
            'url' => 'Url',
            'is_view' => 'Is View',
            'is_down' => 'Is Down',
            'createTime' => 'Create Time',
            'updateTime' => 'Update Time',
            'cloud_id' => 'Cloud ID',
            'city' => 'City',
            'count' => 'Count',
            'plan_style' => 'plan_style',
            'designer' => 'designer'
        ];
    }

    /**
     * 保存信息
     */
    public function doSave(){
        $url = Cloud::findOne(['md5'=>$this->url]);
        if(!$url){
            return false;
        }
        // 如果存在相同的数据则执行更新操作
        $query = self::findOne(['mobile'=>$this->mobile, 'url'=>$url->url]);
        if($query){
            if($this->is_view){
                $query->is_view = $this->is_view;
            }
            if($this->is_down){
                $query->is_down = $this->is_down;
            }
            $query->url = $url->url;
            $query->updateTime = time();
            if($query->save()){
                return $url;
            }
            return false;
        }else{
            if($this->is_view || $this->is_down){
                return false;
            }
            $this->createTime = time();
            $this->updateTime = $this->createTime;
            $this->cloud_id = $url->id;
            $this->plan_style = $url->plan_style;
            $this->designer = $url->designer;
            $this->is_view = self::COMMON_STATUS_DELETED;
            $this->is_down = self::COMMON_STATUS_DELETED;
            $this->count = 1;
            $this->url = $url->url;
            return $this->save();
        }
    }
}
