<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\CacheConfig;

$this->title = $title;
?>


<?php echo $this->render('/common/_check'); ?>
<div class="preloader"></div>
<div id="page-body-wrap">
    <?php echo $this->render('/common/_topbar'); ?>
    <?php echo $this->render('/common/_header'); ?>

    <section id="page-title" style="background-image:url(/images/about.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h1>关于我们</h1>
                    </div>
                    <div class="page-breadcumb"> <i class="fa fa-map-marker"></i> &nbsp;<span>当前位置： <a href='/'>主页</a> > <a href='/about.html'>关于我们</a></span> </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-container" id="innerpage-wrap">
        <div class="container">
            <div class="row">
                <div class="main col-md-9 inner-left" role="main">
                    <div class="about-page-wrap" style="font-size: 24px;">
                        <?= CacheConfig::getConfigCache("remark") ?>
                    </div>
                </div>
                <?php echo $this->render('/common/_right'); ?>
            </div>
        </div>
    </div>
    <div class="for-bottom-padding"></div>
    <?php echo $this->render('/common/_footer'); ?>
</div>