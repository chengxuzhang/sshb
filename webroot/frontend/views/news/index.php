<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::jsFile("@web/js/news.js") ?>
<?= Html::cssFile("@web/css/news.css") ?>
<?= Html::cssFile("@web/css/basic.css") ?>
<?= Html::cssFile("@web/css/news_cn.css") ?>

<div class="zj_line"></div>
<!--back to top-->
<?php echo $this->render('/common/_right'); ?>
<!--wrap-->
<div class="container-fluid m_common">
    <!--nav-->
    <div class="row vr_nav zj_black_bg">
        <div class="vr_nav_con hidden-xs">
            <div class="col-lg-3 col-xs-3 zj_logo hidden-xs"><h1><a href="/"><img
                                src="<?= Url::to('@web/images/logo_bai.png'); ?>"/></a></h1></div>
            <div class="col-lg-3 col-xs-3 zj_logo_m visible-xs"><h1><img
                            src="<?= Url::to('@web/images/logo_bai.png'); ?>"/></h1></div>
            <ul class="col-lg-9 col-xs-9 zj_menu hidden-xs">
                <!-- 头部开始 -->
                <?php echo $this->render('/common/_header'); ?>
                <!-- 头部结束 -->
            </ul>
        </div>
        <div class="visible-xs">
            <nav class="navbar navbar-default m_loser" role="navigation" style="margin: 0;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#example-navbar-collapse">
                            <img src="<?= Url::to('@web/m-images/icon_daohang.png'); ?>" class="m_dh"
                                 style="position: absolute;"/>
                            <img src="<?= Url::to('@web/m-images/close.png'); ?>" class="m_dh1"
                                 style="position: absolute;"/>
                        </button>
                        <a class="navbar-brand" href="javascript:;" style="padding-left: 30px;"><img
                                    src="<?= Url::to('@web/m-images/logo_black_xiao.png'); ?>" class="img-responsive"
                                    style="width: 40%;"/></a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav m_menu">
                            <!-- 手机端头部开始 -->
                            <?php echo $this->render('/common/_mobile_header'); ?>
                            <!-- 手机端头部结束 -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row" style="margin-top: 60px;">
        <div class="news-top-bg auto-height" data-scale="1920|388"></div>
    </div>

    <div class="row">
        <div class="subcolumn_nav_met_21_1_10" m-id="10" m-type="nocontent">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="subcolumn-nav text-xs-left">
                            <ul class="subcolumn_nav_met_21_1_10-ul m-b-0 p-y-10 p-x-0 ulstyle">
                                <li>
                                    <a href="/news.html" title="全部" class="<?= Yii::$app->request->get('type') ? "" : "active" ?> link">全部</a>
                                </li>
                                <?php foreach ($categoryList as $cate) { ?>
                                    <li>
                                        <a href="/news/<?= $cate->id ?>/1.html" title="<?= $cate->title ?>" class="<?= Yii::$app->request->get('type') == $cate->id ? "active" : ""; ?> link"><?= $cate->title ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <ul class="subcolumn-nav-location clearfix ulstyle">
                            <li class="location">
                                您的位置：						</li>
                            <li>
                                <a href="../" title="网站首页">
                                    网站首页							</a>
                                <i class="glyphicon glyphicon-menu-right"></i>
                            </li>
                            <li>
                                <a href="/news.html" target="_self" title="新闻资讯">新闻资讯</a>
                                <i class="glyphicon glyphicon-menu-right"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <main class="news_list_page_met_21_6_11 met-news">
            <div class="container">
                <div class="row">
                    <div class="met-news-list">
                        <ul class="blocks-100 blocks-md-1 blocks-lg-1 blocks-xxl-1 ulstyle met-pager-ajax imagesize" data-scale="400x600" m-id="11">
                            <!-- 图文模式 -->
                            <?php foreach ($model as $item){ ?>
                            <li class="media media-lg border-bottom1">
                                <div class="media-left">
                                    <a href="/news/detail/<?= $item->id?>.html" title="<?= $item->title ?>" target="_self">
                                        <img class="media-object" src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$item->cover_url; ?>" alt="<?= $item->title ?>" style="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4>
                                        <a href="/news/detail/<?= $item->id?>.html" title="<?= $item->title ?>" target="_self">
                                            <span style=""><?= $item->title ?></span>
                                        </a>
                                    </h4>
                                    <p class="des font-weight-300">
                                        <?= $item->description ?>
                                    </p>
                                    <p class="info font-weight-300">
                                        <span><?= date("Y-m-d", $item->create_time) ?></span>
                                        <span></span>
                                        <span><i class="icon wb-eye m-r-5 font-weight-300" aria-hidden="true"></i><?= $item->view ?></span>
                                    </p>
                                </div>
                            </li>
                        <?php } ?>
                        </ul>
                        <div class="m-t-20 text-xs-center hidden-xs" m-type="nosysdata">
                            <div class="met_pager">
                                <?php
                                    if($prevUrl == null){
                                        echo '<span class="PreSpan">上一页</span>';
                                    }else{
                                        echo '<a href="'.$prevUrl.'" class="PreA">上一页</a>';
                                    }
                                ?>
                                <?php foreach ($pageList as $pl) { ?>
                                    <a href="<?= $pl['url'] ?>" class="<?= $pl['current'] ?>"><?= $pl['index'] ?></a>
                                <?php } ?>
                                <?php
                                    if($nextUrl == null){
                                        echo '<span class="NextSpan">下一页</span>';
                                    }else{
                                        echo '<a href="'.$nextUrl.'" class="NextA">下一页</a>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="met_pager met-pager-ajax-link visible-xs animation-slide-bottom appear-no-repeat"
                             data-plugin="appear" data-animate="slide-bottom" data-repeat="false" m-type="nosysdata"
                             style="">
                            <button type="button" class="btn btn-primary btn-block btn-squared ladda-button"
                                    id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url=""
                                    data-page="1"><span class="ladda-label">
                                        <i class="glyphicon glyphicon-menu-down m-r-5" aria-hidden="true"></i>
                                    </span><span class="ladda-spinner"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- 尾部开始 -->
    <?php echo $this->render('/common/_footer'); ?>
    <!-- 尾部结束 -->
</div>

<script>
    $(function () {
        var url = null;
        if($(".NextA")){
            url = $(".NextA").attr("href");
        }
        $("#met-pager-btn").click(function () {
            if(url != null){
                $.get(url, function (req,status) {
                    $("ul.met-pager-ajax").append($(req).find("ul.met-pager-ajax").html());
                    if($(req).find("a.NextA")){
                        url = $(req).find("a.NextA").attr("href");
                    }else{
                        $(".met-pager-ajax-link").hide();
                        url = null;
                    }
                })
            }
        })
    })
</script>