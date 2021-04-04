<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\NextUrlPager;

$this->title = '四顺环保';
?>

<?php echo $this->render('/common/_check'); ?>
<div class="preloader"></div>
<div id="page-body-wrap">
    <?php echo $this->render('/common/_topbar'); ?>
    <?php echo $this->render('/common/_header'); ?>

    <section id="page-title" style="background-image:url(/skin/images/news.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h1>新闻资讯</h1>
                    </div>
                    <div class="page-breadcumb"><i class="fa fa-map-marker"></i> &nbsp;<span>当前位置： <a
                                    href='http://demo559.admin868.com/'>主页</a> > <a href='/a/news/'>新闻资讯</a> > </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-container" id="innerpage-wrap">
        <div class="container">
            <div class="row">
                <div class="main col-md-9 inner-left" role="main">
                    <article class="blog-wrap">
                        <div class="blog-article hentry format-image">
                            <figure>
                                <a class="swipebox-x" href="/a/news/74.html"> <img class="img-responsive"
                                                                                   alt="办公室装修设计中您是否忽略了“光健康”"
                                                                                   src="/uploads/180224/1-1P224130532246.jpg"/>
                                </a></figure>
                            <div class="entry-summary post-summary">
                                <header class="entry-header">
                                    <h2 class="entry-title post-title"><a href="/a/news/74.html"
                                                                          title="办公室装修设计中您是否忽略了“光健康”">办公室装修设计中您是否忽略了“光健康”</a>
                                    </h2>
                                </header>
                                <div class="entry-meta post-meta">
                                    <ul>
                                        <li class="entry-date date">
                                            <time class="entry-date" datetime="2018-02-24">2018-02-24</time>
                                        </li>
                                        <li class="tags"><a href="/a/news/">新闻资讯</a></li>
                                        <li class="byline author vcard">by <a href="javascript:void(0)"
                                                                              class="fn">admin</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>
                                        现代办公室装修中很多的业主往往会看重办公室的装修风格和实用性，很少会有业主去关注办公室环境问题，这环境问题不是我们常说的绿色植物的摆放，或是装修材料的选择是否环保...</p>
                                </div>
                                <a href="/a/news/74.html" class="read-more-link">查看详细</a></div>
                        </div>
                    </article>
                    <div class="pagess">
                        <ul>
                            <li>首页</li>
                            <li class="thisclass">1</li>
                            <li><a href='list_16_2.html'>2</a></li>
                            <li><a href='list_16_2.html'>下一页</a></li>
                            <li><a href='list_16_2.html'>末页</a></li>

                        </ul>
                    </div>
                </div>
                <aside class="sidebar col-md-3 inner-right" role="complementary">
                    <section class="widget side-search">
                        <h3 class="title">站内搜索</h3>
                        <form class="searchform" name="formsearch" action="/plus/search.php">
                            <input type="hidden" name="kwtype" value="0"/>
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
                                        <figure><a href="/a/news/74.html"><img
                                                        src="/uploads/180224/1-1P224130532246.jpg"/></a></figure>
                                        <div class="sn-wrapper">
                                            <p class="s-desc"><a href="/a/news/74.html" title="办公室装修设计中您是否忽略了“光健康">办公室装修设计中您是否忽略了“光健康</a>
                                            </p>
                                            <span class="comments"><i
                                                        class="fa fa-calendar"></i> &nbsp;2018-02-24</span></div>
                                    </li>
                                    <li>
                                        <figure><a href="/a/news/73.html"><img
                                                        src="/uploads/allimg/180224/1-1P2241239480-L.jpg"/></a></figure>
                                        <div class="sn-wrapper">
                                            <p class="s-desc"><a href="/a/news/73.html" title="办公室装修公司为您打造标准合理的过道">办公室装修公司为您打造标准合理的过道</a>
                                            </p>
                                            <span class="comments"><i
                                                        class="fa fa-calendar"></i> &nbsp;2018-02-24</span></div>
                                    </li>
                                    <li>
                                        <figure><a href="/a/news/72.html"><img
                                                        src="/uploads/allimg/180224/1-1P2241239280-L.jpg"/></a></figure>
                                        <div class="sn-wrapper">
                                            <p class="s-desc"><a href="/a/news/72.html" title="办公室设计室内环境私密性问题分析">办公室设计室内环境私密性问题分析</a>
                                            </p>
                                            <span class="comments"><i
                                                        class="fa fa-calendar"></i> &nbsp;2018-02-24</span></div>
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
    jQuery(document).ready(function ($) {
        var mmenu = $('nav#mmenu').mmenu({
            slidingSubmenus: true,
            classes: 'mm-white', //mm-fullscreen mm-light
            extensions: ["theme-white"],
            offCanvas: {
                position: "right", //left, top, right, bottom
                zposition: "front" //back, front,next
                //modal		: true
            },
            searchfield: false,
            counters: false,
            //navbars		: {
            //content : [ "prev", "title", "next" ]
            //},
            navbar: {
                title: "网站导航"
            },
            header: {
                add: true,
                update: true,
                title: "网站导航"
            }
        });
        $(".closemenu").click(function () {
            var mmenuAPI = $("#mmenu").data("mmenu");
            mmenuAPI.close();
        });
    });
</script>