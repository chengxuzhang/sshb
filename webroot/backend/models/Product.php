<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $id
 * @property string $uid
 * @property string $name
 * @property string $title
 * @property string $category_id
 * @property string $description
 * @property string $root
 * @property string $pid
 * @property integer $model_id
 * @property integer $type
 * @property integer $position
 * @property string $link_id
 * @property string $cover_id
 * @property integer $display
 * @property string $deadline
 * @property integer $attach
 * @property string $view
 * @property string $comment
 * @property string $extend
 * @property integer $level
 * @property string $create_time
 * @property string $update_time
 * @property integer $status
 * @property string $cover_url
 */
class Product extends \backend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'category_id', 'root', 'pid', 'model_id', 'type', 'position', 'link_id', 'cover_id', 'display', 'deadline', 'attach', 'view', 'comment', 'extend', 'level', 'create_time', 'update_time', 'status'], 'integer'],
//            [['category_id'], 'required'],
            [['name'], 'string', 'max' => 40],
            [['title'], 'string', 'max' => 80],
            [['description'], 'string', 'max' => 140],
            [['cover_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => '发布者',
            'name' => '标识',
            'title' => '标题',
            'category_id' => '产品类型',
            'description' => '描述',
            'root' => 'Root',
            'pid' => 'Pid',
            'model_id' => 'Model ID',
            'type' => 'Type',
            'position' => 'Position',
            'link_id' => 'Link ID',
            'cover_id' => 'Cover ID',
            'display' => '是否启用',
            'deadline' => 'Deadline',
            'attach' => 'Attach',
            'view' => 'View',
            'comment' => 'Comment',
            'extend' => 'Extend',
            'level' => 'Level',
            'create_time' => '发布日期',
            'update_time' => '更新日期',
            'status' => '状态',
            'cover_url' => '图片地址',
        ];
    }

    /**
     * 初始化默认的字段
     * @return [type] [description]
     */
    public function doSave(){
        $this->uid = Yii::$app->user->id;
        $this->root = $this->root ? $this->root : 0;
        $this->pid = $this->pid ? $this->pid : 0;
        $this->model_id = $this->model_id ? $this->model_id : 0;
        $this->type = $this->type ? $this->type : 0;
        $this->position = $this->position ? $this->position : self::COMMON_STATUS_DELETED;
        $this->link_id = $this->link_id ? $this->link_id : 0;
        $this->cover_id = $this->cover_id ? $this->cover_id : 0;
        $this->display = $this->display ? $this->display : 0;
        $this->deadline = $this->deadline ? $this->deadline : 0;
        $this->attach = $this->attach ? $this->attach : 0;
        $this->view = $this->view ? $this->view : 0;
        $this->comment = $this->comment ? $this->comment : 0;
        $this->extend = $this->extend ? $this->extend : 0;
        $this->level = $this->level ? $this->level : 0;
        $this->status = $this->status ? $this->status : 10;
        if($this->id && is_numeric($this->id)){
            $this->update_time=time();
        }else{
            $this->create_time=time();
            $this->update_time=$this->create_time;
        }
        return $this->save();
    }
}
