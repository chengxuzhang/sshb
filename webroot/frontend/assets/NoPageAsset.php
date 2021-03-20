<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class NoPageAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/plu_css/bootstrap.min.css',
//        'plugins/plu_css/jquery.fullPage.css',
        'plugins/plu_css/animate.min.css',
        'css/main.css',
        'css/mp.css',
        'plugins/dist/css/swiper.min.css',
        'css/video-js.css',
        'css/colors.css',
    ];
    public $js = [
        'plugins/jquery-3.3.1.min.js',
        'js/video.min.js',
        'plugins/plu_js/bootstrap.min.js',
//        'plugins/plu_js/jquery.fullPage.js',
        'plugins/dist/js/swiper.min.js',
        'plugins/layui/layui.all.js',
        'js/nopage-main.js',
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
