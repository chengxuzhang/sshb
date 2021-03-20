<?php

namespace frontend\models;

use Yii;

class OfferInfo extends \frontend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offer_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_num'], 'unique'],
            [['project_attribute','sex'], 'string'],
            [['createTime', 'updateTime', 'user_id', 'house_id', 'status', 'group_id', 'template_id','is_create_excel'], 'integer'],
            [['project_num', 'village_name', 'village_address', 'house_type', 'house_type_name', 'house_area', 'house_style', 'mac', 'client_name', 'house_address', 'client_phome', 'salesperson'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_num' => 'Project Num',
            'village_name' => 'Village Name',
            'village_address' => 'Village Address',
            'house_type' => 'House Type',
            'house_type_name' => 'House Type Name',
            'house_area' => 'House Area',
            'house_style' => 'House Style',
            'project_attribute' => 'Project Attribute',
            'createTime' => 'Create Time',
            'updateTime' => 'Update Time',
            'mac' => 'Mac',
            'user_id' => 'User ID',
            'client_name' => 'Client Name',
            'house_address' => 'House Address',
            'client_phome' => 'Client Phome',
            'salesperson' => 'Salesperson',
            'sex' => 'Sex',
            'house_id' => 'House Id',
            'status' => 'Status',
            'group_id' => 'Group Id',
            'template_id' => 'Template Id',
            'is_create_excel' => '是否创建Excel文档'
        ];
    }

    /**
     * 保存信息
     * @param  [type] $userInfo [description]
     * @return [type]           [description]
     */
    public function doSave($userInfo){
        if($this->isNewRecord){
            $this->createTime=time();
            $this->updateTime=$this->createTime;
        }else{
            $this->updateTime = time();
        }
        $this->is_create_excel = self::COMMON_STATUS_DELETED;
        $this->user_id = $userInfo['id'];
        $this->status = self::COMMON_STATUS_ACTIVE;
        $this->group_id = $userInfo['org_id'];
        $this->salesperson = $userInfo['username'];
        return $this->save();
    }

    /**
     * 获取小区户型
     */
    public function getHouseType(){
        return $this->hasOne(HouseType::className(), ['id'=>'house_id']);
    }

    /**
     * 扩展字段
     * @return array
     */
    public function extraFields()
    {
        return ['houseType'];
    }
}
