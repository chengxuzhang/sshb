<?php

namespace frontend\components;

use Yii;
use yii\base\Widget;

class ActiveSmarty extends Widget
{

    /**
     * 配置项
     * @var [type]
     */
    public $options = [];

    public function init(){
        ob_start();
        ob_implicit_flush(false);
    }

    public function run()
    {
        $content = ob_get_clean();
        echo $content;
    }

    /**
     * 获取到数据
     * @return [type] [description]
     */
    public function getDocument(){
    	$query = ['expand'=>'userinfo,coverinfo,category'];
    	$query = array_merge($this->options,$query);
    	$model = new \frontend\models\Document;
    	$result = $model->getDocumentBySmarty($query);
    	return $result;
    }

    /**
     * 获取链接地址
     * @return [type] [description]
     */
    public function getUrlList(){
        $query = [];
        $query = array_merge($this->options,$query);
        $model = new \frontend\models\Url;
        $result = $model->getUrlListBySmarty($query);
        return $result;
    }

    /**
     * 获取栏目分类
     * @return [type] [description]
     */
    public function getCategory(){
        $model = new \frontend\models\Category;
        $result = $model->getCategory();
        return $result;
    }

    /**
     * 获取最新评论
     * @return [type] [description]
     */
    public function getNewComments(){
        $query = ['expand'=>'userinfo,document'];
        $query = array_merge($this->options,$query);
        $model = new \frontend\models\Document;
        $result = $model->getNewComments($query);
        return $result;
    }

    /**
     * 获取到数据
     * @return [type] [description]
     */
    public function getTag(){
        $query = [];
        $query = array_merge($this->options,$query);
        $model = new \frontend\models\Tags;
        $result = $model->getTagBySmarty($query);
        return $result;
    }

    /**
     * 获取广告代码
     * @return [type] [description]
     */
    public function getAd(){
        $query = [];
        $query = array_merge($this->options,$query);
        $model = new \frontend\models\Ad;
        $result = $model->getAdInfoBySmarty($query);
        return $result;
    }
}
