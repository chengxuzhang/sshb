<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>

<?= Html::jsFile("@web/js/news.js") ?>
<?= Html::cssFile("@web/css/news.css") ?>
<?= Html::cssFile("@web/css/basic.css") ?>
<?= Html::cssFile("@web/css/shownews_cn.css") ?>

<div class="zj_line"></div>
<!--back to top-->
<?php echo $this->render('/common/_right'); ?>
<!--wrap-->
<div class="container-fluid m_common">
    <!--nav-->
    <div class="row vr_nav zj_black_bg">
        <div class="vr_nav_con hidden-xs">
            <div class="col-lg-3 col-xs-3 zj_logo hidden-xs"><h1><a href="/"><img src="<?= Url::to('@web/images/logo_bai.png'); ?>"/></a></h1></div>
            <div class="col-lg-3 col-xs-3 zj_logo_m visible-xs"><h1><img src="<?= Url::to('@web/images/logo_bai.png'); ?>"/></h1></div>
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
                            <img src="<?= Url::to('@web/m-images/icon_daohang.png'); ?>" class="m_dh" style="position: absolute;"/>
                            <img src="<?= Url::to('@web/m-images/close.png'); ?>" class="m_dh1" style="position: absolute;"/>
                        </button>
                        <a class="navbar-brand" href="javascript:;" style="padding-left: 30px;"><img src="<?= Url::to('@web/m-images/logo_black_xiao.png'); ?>" class="img-responsive" style="width: 40%;"/></a>
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
        <div class="news-top-bg auto-height" data-scale="3840|768"></div>
    </div>

    <div class="row">
        <div class="location_met_21_1_50 met-crumbs" m-id="50">
            <div class="container">
                <div class="row">
                    <div class="title-box">
                        <?= $model->title ?>
                    </div>
                    <ol class="breadcrumb m-b-0 subcolumn-crumbs">
                        <li class="breadcrumb-item">
                            <a href="#">您现在所在位置：</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/" title="网站首页">网站首页</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/news.html" title="新闻资讯" class="">新闻资讯</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/news/<?= $model->category_id ?>/1.html" title="<?= $model->category->title ?>" class=""><?= $model->category->title ?></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <main class="news_list_detail_met_16_1_24 met-shownews animsition     left">
            <div class="container">
                <div class="row sm0">
                    <div class="col-md-12 met-shownews-body" m-id="24">
                        <div class="row">
                            <section class="details-title border-bottom1">
                                <h1 class="m-0"><?= $model->title ?></h1>
                                <div class="info font-weight-300">
                                    <span><?= date("Y-m-d H:i:s", $model->create_time); ?></span>
                                    <span>
    								<i class="icon wb-eye m-r-5" aria-hidden="true"></i>
    								<?= $model->view ?>    							</span>
                                </div>
                            </section>
                            <section class="met-editor clearfix">
                                <?= $model->article->content ?>
                            </div>
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