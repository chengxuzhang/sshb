<?php

namespace backend\models;

use Yii;

class Category extends \backend\components\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['pid', 'sort', 'list_row', 'link_id', 'allow_publish', 'display', 'reply', 'check', 'create_time', 'update_time', 'status'], 'integer'],
            [['title', 'meta_title'], 'string', 'max' => 50],
            [['keywords', 'description'], 'string', 'max' => 255],
            [['model', 'type', 'reply_model', 'icon'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '分类ID',
            'title' => '标题',
            'pid' => '上级分类ID',
            'sort' => '排序',
            'list_row' => '列表每页行数',
            'meta_title' => 'SEO的网页标题',
            'keywords' => '关键字',
            'description' => '描述',
            'model' => '关联模型',
            'type' => '允许发布的内容类型',
            'link_id' => '外链',
            'allow_publish' => '是否允许发布内容',
            'display' => '可见性',
            'reply' => '是否允许回复',
            'check' => '发布的文章是否需要审核',
            'reply_model' => '',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
            'status' => '数据状态',
            'icon' => '分类图标',
        ];
    }

    /**
     * 获取分类列表并处理成数组形式 组成下拉选择
     * @return [type] [description]
     */
    public function getCategoryList(){
        $list = $this->getCategory();
        $temp = [];
        foreach ($list as $val) {
            $temp[$val->id] = $val->title;
        }
        return $temp;
    }

    /**
     * 获取所有的分类信息
     * @return [type] [description]
     */
    public function getCategory(){
        return $this->find()->all();
    }

    /**
     * 获取分类树，指定分类则返回指定分类极其子分类，不指定则返回所有分类树
     * @param  integer $id    分类ID
     * @param  boolean $field 查询字段
     * @return array          分类树
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function getTree($id = 0, $field = true){
        /* 获取当前分类信息 */
        if($id){
            $info = self::findOne($id)->toArray();
            $id   = $info['id'];
        }

        /* 获取所有分类 */
        $map  = array('status' => 10);
        $list = self::find()->where($map)->orderBy('sort asc')->asArray()->all();
        $list = list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_', $root = $id);

        /* 获取返回数据 */
        if(isset($info)){ //指定分类则返回当前分类极其子分类
            $info['_'] = $list;
        } else { //否则返回所有分类
            $info = $list;
        }

        return $info;
    }

    /**
     * 获取分类树，指定分类则返回指定分类极其子分类，不指定则返回所有分类树
     * @param  integer $id    分类ID
     * @param  boolean $field 查询字段
     * @return array          分类树
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function getTrees($id = 0, $field = true){
        /* 获取当前分类信息 */
        if($id){
            $info = self::findOne($id)->toArray();
            $id   = $info['id'];
        }

        /* 获取所有分类 */
        $list = self::find()->orderBy('sort asc')->asArray()->all();
        // $list = list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_', $root = $id);
        $list = selectTree($list);

        /* 获取返回数据 */
        if(isset($info)){ //指定分类则返回当前分类极其子分类
            $info['_'] = $list;
        } else { //否则返回所有分类
            $info = $list;
        }

        return $info;
    }

    /**
     * 初始化默认的字段
     * @return [type] [description]
     */
    public function doSave(){
        $this->pid = $this->pid ? $this->pid : 0;
        $this->sort = $this->sort ? $this->sort : 0;
        $this->list_row = $this->list_row ? $this->list_row : 10;
        $this->link_id = $this->link_id ? $this->link_id : 0;
        $this->allow_publish = $this->allow_publish ? $this->allow_publish : 0;
        $this->display = $this->display ? $this->display : 0;
        $this->reply = $this->reply ? $this->reply : 0;
        $this->check = $this->check ? $this->check : 0;
        $this->status = $this->status ? $this->status : 0;
        $this->icon = $this->icon ? $this->icon : 0;
        $this->create_time=time();
        $this->update_time=$this->create_time;
        return $this->save();
    }
}
