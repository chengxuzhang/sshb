<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LayerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/plu_css/bootstrap.min.css',
        'plugins/layui/css/layui.css',
        'css/online.css',
        'css/mp.css',
    ];
    public $js = [
        'plugins/layui/layui.all.js',
        'plugins/jquery-3.3.1.min.js',
        'plugins/plu_js/bootstrap.min.js',
        'plugins/PCASClass.js',
        'layui/layui.js',
	    'js/formdata.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',// 此处引入bootstrap的部分组件
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,   // 这是设置所有js放置的位置
    ];

    public $cssOptions = [
        'media' => 'all',
    ];
}
