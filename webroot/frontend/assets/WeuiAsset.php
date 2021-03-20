<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class WeuiAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/weui/weui.css',
        'css/weui/weuix.css',
        'css/weui/example.css',
    ];
    public $js = [
        'js/weui/zepto.min.js',
        'js/weui/zepto.weui.js',
        'js/weui/weui.min.js',
    ];
    public $depends = [];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,   // 这是设置所有js放置的位置
    ];

    public $cssOptions = [
        'media' => 'all',
    ];
}
