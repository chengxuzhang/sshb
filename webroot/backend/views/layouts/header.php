<?php


use backend\components\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<style>
    .navbar-nav>.user-menu>.dropdown-menu{
        right: 5px;
        top:55px;
        min-width: 100%;
        line-height: 36px;
        padding: 5px 0;
        box-shadow: 0 2px 4px rgba(0,0,0,.12);
        border: 1px solid #d2d2d2;
        background-color: #fff;
        z-index: 100;
        border-radius: 2px;
        white-space: nowrap;
        width: 30px;
    }
    .navbar-nav>.user-menu>.dropdown-menu>.user-footer{
        padding: 0;
    }
    .navbar-nav>.user-menu>.dropdown-menu a{
        width: 100%;
        text-align: center;
    }
    .navbar-nav>.user-menu>.dropdown-menu>li>a{
        padding: 3px 0 !important;
    }
</style>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">股票</span><span class="logo-lg">股票分析系统</span>', Yii::$app->homeUrl.'index.php', ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <a href="javascript:window.history.go(-1);" class="nav-header-btn">
            <span class="fa fa-arrow-left"></span>
        </a>

        <a href="javascript:window.history.go(1);" class="nav-header-btn">
            <span class="fa fa-arrow-right"></span>
        </a>

        <a href="javascript:window.location.reload();" class="nav-header-btn">
            <span class="fa fa-refresh"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="javascript:void(0);" id="fullscreen" class=""><i class="layui-icon layui-icon-screen-full" aria-hidden="true"></i></a>
                </li>

                <li class="dropdown user user-menu">
                    <a href="javascript:void (0);" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?= Yii::$app->user->identity->username; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <?= Html::a(
                                '修改密码',
                                ['/site/password'],
                                ['data-method' => 'get', 'class' => '']
                            ) ?>
                        </li>
                        <li class="user-footer">
                            <?= Html::a(
                                '退出',
                                ['/site/logout'],
                                ['data-method' => 'post', 'class' => '']
                            ) ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<script>
    $(function () {
        $('.dropdown-toggle').dropdown();

        var fullicon = $("#fullscreen").html();

        $("#fullscreen").click(function () {
            if(!$(this).hasClass("open")){
                var e = document.documentElement
                    , a = e.requestFullScreen || e.webkitRequestFullScreen || e.mozRequestFullScreen || e.msRequestFullscreen;
                "undefined" != typeof a && a && a.call(e)
                $(this).html(fullicon.replace('full','restore')).addClass("open");
            }else{
                document.documentElement;
                document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen ? document.webkitCancelFullScreen() : document.msExitFullscreen && document.msExitFullscreen()
                $(this).html(fullicon).removeClass("open");
            }
        });
    })
</script>
