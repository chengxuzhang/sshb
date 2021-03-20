<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'layui/css/layui.css',
        'jquery.ui/jquery-ui.min.css',
    ];
    public $js = [
        // 'js/jquery.min.js',
        'layer/layer.js',
        'js/common.js',
        'layui/layui.js',
        'jquery.ui/jquery-ui.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [  
        'position' => \yii\web\View::POS_HEAD,   // 这是设置所有js放置的位置  
    ];
}
