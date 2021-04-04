<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\ActiveSmarty;
use frontend\components\CacheConfig;

$this->title = CacheConfig::getConfigCache("title");
?>


<?php echo $this->render('/common/_check'); ?>
<div id="page-body-wrap">
    <?php echo $this->render('/common/_topbar'); ?>
    <?php echo $this->render('/common/_header'); ?>

    <section id="banner">
        <div class="banner-container">
            <div class="banner home-v1">
                <ul>
                    <li class="slider-2 slide-item" data-transition="random" data-slotamount="7" data-thumb="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("hdp1") ?>"
                        data-title="banner1" >
                        <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("hdp1") ?>" data-bgposition="center top" data-kenburns="off" data-duration="2000" data-ease="Power4.easeInOut"
                             data-bgfit="200" data-bgfitend="100" data-bgpositionend="center top" alt="banner1"/>
                    </li>
                    <li class="slider-2 slide-item" data-transition="random" data-slotamount="7" data-thumb="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("hdp2") ?>"
                        data-title="banner2" >
                        <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("hdp2") ?>" data-bgposition="center top" data-kenburns="off" data-duration="2000" data-ease="Power4.easeInOut"
                             data-bgfit="200" data-bgfitend="100" data-bgpositionend="center top" alt="banner1"/>
                    </li>
                    <li class="slider-2 slide-item" data-transition="random" data-slotamount="7" data-thumb="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("hdp3") ?>"
                        data-title="banner3" >
                        <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("hdp3") ?>" data-bgposition="center top" data-kenburns="off" data-duration="2000" data-ease="Power4.easeInOut"
                             data-bgfit="200" data-bgfitend="100" data-bgpositionend="center top" alt="banner1"/>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="who-we-are">
        <div class="container">
            <div class="row"> <div class="col-lg-6 col-md-12 large-box col-sm-12 col-xs-12 wow zoomIn hvr-float-shadow whyitem-1" data-wow-duration=".5s">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 img-holder">
                        <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("product_img_1") ?>" alt=""/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hvr-bounce-to-left adv-text-one">
                        <h2><?= CacheConfig::getConfigCache("product_title_1") ?></h2>
                        <p>01、<?= CacheConfig::getConfigCache("product_remark_1") ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 single-box wow zoomIn whyitem-2" data-wow-duration=".5s" data-wow-delay=".5s">
                    <div class="img-holder">
                        <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("product_img_2") ?>" alt=""/>
                    </div>
                    <h2>02、<?= CacheConfig::getConfigCache("product_title_2") ?></h2>
                    <p><?= CacheConfig::getConfigCache("product_remark_2") ?></p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 single-box wow zoomIn whyitem-3" data-wow-duration=".5s" data-wow-delay="1s">
                    <div class="img-holder">
                        <img src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . CacheConfig::getConfigCache("product_img_3") ?>" alt=""/>
                    </div>
                    <h2>03、<?= CacheConfig::getConfigCache("product_title_3") ?></h2>
                    <p><?= CacheConfig::getConfigCache("product_remark_3") ?></p>
                </div> </div>
        </div>
    </section>
    <section id="our-projects">
        <div class="container">
            <div class="section-title"> <h1 class="dark-title"><a href="/a/case/">产品系列</a></h1> </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 masonary-gallery">
                    <div class="masonary-item width-1"> <a class="fancybox" href="javascript:;">
                            <div class="img-wrap"> <img src="<?= Url::to('@web/images/1-1P22413034L57.jpg') ?>" alt="Image"/>
                                <div class="content-wrap">
                                    <div class="border">
                                        <div class="content">
                                            <h4 title="案例八">案例八</h4>
                                            <span>定制案例</span> </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h3 class="iport-h3-title"><a href="/a/case/38.html" title="案例八">案例八</a></h3>
                    </div>
                </div>
            </div>
            <div class="view-all-btn"><a href="/a/case/" class="view-all hvr-bounce-to-right">查看更多</a> </div>
        </div>
    </section>
    <section id="our-specialist">
        <div class="container">
            <div class="section-title"> <h1><a href="/video.html">网站视频</a></h1> </div>
            <div class="row">
                <?php foreach($video as $val) { ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow zoomIn hvr-float-shadow team-item" data-wow-duration=".5s" data-wow-delay=".5s">
                    <div class="single-member hvr-bounce-to-bottom">
                        <a href="javascript:;" data-link="<?= $val->link ?>" class="team-url">
                            <img src="<?= Url::to('@web/images/1-1P22413034L57.jpg') ?>" alt="<?= $val->title ?>"/>
                        </a>
                        <div class="info hvr-bounce-to-top">
                            <h2><a href="javascript:;" data-link="<?= $val->link ?>" title="<?= $val->title ?>"><?= $val->title ?></a></h2>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section id="emergency">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3"> <img class="wow bounceInLeft" src="<?= Url::to('@web/images/man.png') ?>"/> </div>
                <div class="col-lg-offset-3 col-md-offset-3 col-lg-9 col-md-9">
                    <h2><span>精益求精，创造您空间的</span> 核心价值</h2>
                    <p>集室内设计、工程施工、材料装饰为一体的专业化中型装饰企业</p>
                    <p class="phone-contact"><b>
                            <?= CacheConfig::getConfigCache('phone'); ?>
                        </b> 或 <a href="/contact.html" class="hvr-bounce-to-right">联系我们</a> </p>
                </div>
            </div>
        </div>
    </section>
    <section id="blog">
        <div class="container">
            <div class="section-title"> <h1><a href="/news.html">新闻资讯</a></h1> </div>
            <div class="row">
                <?php foreach($news as $val) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 blog-wrap hvr-float-shadow">
                    <div class="col-lg-6 col-md-12 img-wrap h-300">
                        <img src="<?= Url::to('@web/images/1-1P22413034L57.jpg') ?>" alt="<?= $val->title ?>"/>
                        <h2><i class="fa fa-calendar"></i><?= date('Y-m-d', $val->create_time) ?></h2>
                    </div>
                    <div class="col-lg-6 col-md-12 content-wrap h-300">
                        <h2><a href="/news/<?= $val->id ?>.html" title="<?= $val->title ?>"><?= $val->title ?></a></h2>
                        <p class="desc"><?= mb_substr($val->description, 0, 60, 'utf-8') ?>...</p>
                        <ul>
                            <li><span><b>发布者：</b> admin</span></li>
                            <li><a href="/news/<?= $val->id ?>.html" class="read-more">查看更多</a></li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="<?= Url::to('@web/images/1-1P2241223450-L.jpg') ?>" alt=""/></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $this->render('/common/_footer', ['news'=>$footerNews]); ?>
</div>
<?= Html::jsFile('@web/js/sshb/wow.js') ?>
<?= Html::jsFile('@web/js/sshb/owl.carousel.min.js') ?>
<?= Html::jsFile('@web/js/sshb/jquery.themepunch.tools.min.js') ?>
<?= Html::jsFile('@web/js/sshb/jquery.themepunch.revolution.min.js') ?>
<?= Html::jsFile('@web/js/sshb/jquery.fancybox.pack.js') ?>
<?= Html::jsFile('@web/js/sshb/custom.js') ?>
<?php echo $this->render('/common/_nav'); ?>
<?= Html::cssFile('@web/css/sshb/jquery.mmenu.all.css') ?>
<?= Html::jsFile('@web/js/sshb/jquery.mmenu.all.min.js') ?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var mmenu=$('nav#mmenu').mmenu({
            slidingSubmenus: true,
            classes		: 'mm-white', //mm-fullscreen mm-light
            extensions	: [ "theme-white" ],
            offCanvas	: {
                position: "right", //left, top, right, bottom
                zposition: "front" //back, front,next
                //modal		: true
            },
            searchfield		: false,
            counters		: false,
            //navbars		: {
            //content : [ "prev", "title", "next" ]
            //},
            navbar 		: {
                title : "网站导航"
            },
            header			: {
                add		: true,
                update	: true,
                title	: "网站导航"
            }
        });
        $(".closemenu").click(function() {
            var mmenuAPI = $("#mmenu").data( "mmenu" );
            mmenuAPI.close();
        });
    });
</script>
<style>
    .copyrights{text-indent:-9999px;height:0;line-height:0;font-size:0;overflow:hidden;}
</style>
<div class="copyrights">
    Collect from <a href="http://www.4shb.com/"  title="四顺环保">四顺环保</a>
</div>

