<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/sshb/main.css',
        "css/sshb/bootstrap.min.css",
        "css/sshb/animate.css",
        "css/sshb/font-awesome.min.css",
        "css/sshb/hover.css",
        "css/sshb/owl.carousel.css",
        "css/sshb/owl.theme.default.min.css",
        "css/sshb/settings.css",
        "css/sshb/strocke-gap-icons-style.css",
        "css/sshb/jquery.fancybox.css",
        "css/sshb/style.css",
        "css/sshb/responsive.css",
        "css/sshb/tk.css",
        "layui/css/layui.css",
        "backtop/backtop.css",
    ];
    public $js = [
        "js/sshb/jquery.min.js",
        "js/sshb/bootstrap.min.js",
        'layui/layui.js',
        "backtop/backtop.js",
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
