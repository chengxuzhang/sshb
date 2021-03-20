<?php

/**
 * @link https://github.com/BigKuCha/yii2-ueditor-widget
 * @link http://ueditor.baidu.com/website/index.html
 */
namespace backend\components;

use Yii;
use yii\helpers\ArrayHelper;
//use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\View;
use kucha\ueditor\UEditorAsset;

class UEditor extends \kucha\ueditor\UEditor
{

    public function init()
    {
        parent::init();
    }
    
    /**
     * 注册客户端脚本
     */
    protected function registerClientScript()
    {
        UEditorAsset::register($this->view);
        $clientOptions = Json::encode($this->clientOptions);
        $script = "myeditor = UE.getEditor('" . $this->id . "', " . $clientOptions . ")";
        $this->view->registerJs($script, View::POS_READY);
    }
}