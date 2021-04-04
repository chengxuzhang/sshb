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

    <section id="page-title" style="background-image:url(/skin/images/p.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h1>产品系列</h1>
                    </div>
                    <div class="page-breadcumb"> <i class="fa fa-map-marker"></i> &nbsp;<span>当前位置： <a href='/'>主页</a> > <a href='/product.html'>产品系列</a> > </span> </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-container" id="innerpage-wrap">
        <div class="container">
            <div class="row">
                <div class="main col-md-9 inner-left" role="main">
                    <div class="prolist-wrap">
                        <div id="portfolio-container">
                            <div class="row portfolio-3-columns isotope-x clearfix">
                                <div class="portfolio-item isotope-item col-sm-4 col-xs-6">
                                    <article>
                                        <figure class="glass-animation">
                                            <a class="swipebox" href="/uploads/allimg/180224/1-1P2241255243a.jpg">
                                                <span class="background"></span>
                                                <span class="glass"><span class="circle"><i class="handle"></i></span></span>
                                                <img class="img-responsive" src="/uploads/allimg/180224/1-1P2241255243a.jpg" alt="产品名称九"/>
                                            </a>
                                        </figure>
                                        <h5 class="item-title"> <a href="/a/product/p2/30.html" title="产品名称九">产品名称九</a> </h5>
                                        <div class="flex separator">
                                            <span class="line"></span>
                                            <span class="wrap"><span class="square"></span></span>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="pagess">
                                <ul>
                                    <li>首页</li>
                                    <li class="thisclass">1</li>
                                    <li><a href='list_1_2.html'>2</a></li>
                                    <li><a href='list_1_2.html'>下一页</a></li>
                                    <li><a href='list_1_2.html'>末页</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="sidebar col-md-3 inner-right" role="complementary">
                    <section class="widget side-search">
                        <h3 class="title">站内搜索</h3>
                        <form  class="searchform" name="formsearch" action="/plus/search.php">
                            <input type="hidden" name="kwtype" value="0" />
                            <div class="sform-div">
                                <label class="screen-reader-text" for="s"></label>
                                <input type="text" value="" name="q" placeholder="输入关键字" id="s"/>
                                <input type="submit" id="searchsubmit" value=""/>
                            </div>
                        </form>
                    </section>
                    <section class="widget side-news">
                        <h3 class="title">热点新闻</h3>
                        <div class="tabbed custom-tabbed">
                            <div class="block current">
                                <ul class="widget-list">
                                    <li>
                                        <figure><a href="/a/news/74.html"><img src="/uploads/180224/1-1P224130532246.jpg" /></a></figure>
                                        <div class="sn-wrapper">
                                            <p class="s-desc"><a href="/a/news/74.html" title="办公室装修设计中您是否忽略了“光健康">办公室装修设计中您是否忽略了“光健康</a></p>
                                            <span class="comments"><i class="fa fa-calendar"></i> &nbsp;2018-02-24</span> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
    <div class="for-bottom-padding"></div>
    <?php echo $this->render('/common/_footer'); ?>
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