<?php

use frontend\components\Html;
use yii\helpers\Url;
use frontend\components\ActiveSmarty;
use frontend\components\CacheConfig;

$this->title = CacheConfig::getConfigCache("title");
?>

<!--[if lt IE 8]>
<div class="lt-ie8-bg">
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <p class="browsehappy">对不起，您正在使用的是 <strong>过时</strong> 的浏览器.</p>
    <p>请升级您的浏览器（IE8+，或者是火狐、谷歌、Opera、Safari等现代浏览器），以改进您的用户体验！</p>
</div>
<style>
    .lt-ie8-bg{z-index:11111;position:absolute;top:0;left:0;right:0;bottom:0;background-color:#333;color:#999;padding:100px 20px;text-align:center;font-size:26px}
    .lt-ie8-bg a{color:#f5f5f5;border-bottom:2px solid #fff}
    .lt-ie8-bg a:hover{text-decoration:none}
    #page-body-wrap{display:none;}
</style>
<![endif]-->
<div id="page-body-wrap">
    <section id="topbar">
        <div class="container">
            <div class="row">
                <div class="social pull-left topbar-left">
                    <ul>
                        <li class="top-phone"><a href="tel:4008-888-888" class="hvr-bounce-to-bottom"><i class="fa fa-phone"></i> 4008-888-888</a></li>
                        <li class="top-email"><a href="mailto:XXX@qq.com" class="hvr-bounce-to-bottom"><i class="fa fa-envelope-o"></i> XXX@qq.com</a></li>
                    </ul>
                </div>
                <div class="contact-info pull-right topbar-right">
                    <ul>
                        <li><a href="http://www.weibo.com/gooxao" target="_blank"><i class="fa fa-weibo"></i></a></li>
                        <li><a href="http://t.qq.com/gooxao2" target="_blank"><i class="fa fa-tencent-weibo"></i></a></li>
                        <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=XXX&amp;site=qq&amp;menu=yes" target="_blank"><i class="fa fa-qq"></i></a></li>
                        <li><a href="https://www.tmall.com/" target="_blank"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <header id="header-sec" class="header">
        <div class="search-box">
            <div class="container">
                <div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <form  class="t-search-form" name="formsearch" action="/plus/search.php">
                        <input type="hidden" name="kwtype" value="0" />
                        <input type="text" value="" name="q" class="search-input" placeholder="输入关键字"/>
                        <button type="submit" class="search-btn"><i class="icon icon-Search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-lg-offset-0 col-md-offset-4 logo">
                    <a href="/">
                        <img src="<?= Url::to('@web/images/logo.png'); ?>" alt="Logo"/>
                    </a> </div>
                <a class="mmenu-btn noDis" href="#mmenu"><i class="fa fa-bars"></i></a>
                <nav class="col-lg-9 col-md-12 col-lg-pull-0 col-md-pull-1 mainmenu-container" id="navigation">
                    <ul class="top-icons-wrap pull-right">
                        <li class="top-icons search"><a href="#"><i class="icon icon-Search"></i></a></li>
                    </ul>
                    <!--<button class="mainmenu-toggler"><i class="fa fa-bars"></i></button>-->
                    <ul class="mainmenu pull-right">
                        <li  class='Lev1 current' > <a href="/" class="menu1 hvr-overline-from-left">网站首页 </a></li>
                        <li class="Lev1 dropdown "> <a href="/a/about/" class="menu1 hvr-overline-from-left">关于我们 <i class="fa fa-caret-down"></i></a>
                            <ul class="submenu dr-menu2">

                                <li class="Lev2"> <a href="/a/about/jianjie/" class="menu2">公司简介</a> </li>

                                <li class="Lev2"> <a href="/a/about/qiyuan/" class="menu2">品牌起源</a> </li>

                                <li class="Lev2"> <a href="/a/about/xiangce/" class="menu2">公司相册</a> </li>

                            </ul>
                        </li><li class="Lev1 dropdown "> <a href="/a/product/" class="menu1 hvr-overline-from-left">产品系列 <i class="fa fa-caret-down"></i></a>
                            <ul class="submenu dr-menu2">

                                <li class="Lev2"> <a href="/a/product/p1/" class="menu2">金融贸易</a> </li>

                                <li class="Lev2"> <a href="/a/product/p2/" class="menu2">信息科技</a> </li>

                                <li class="Lev2"> <a href="/a/product/p3/" class="menu2">医疗保健</a> </li>

                            </ul>
                        </li><li class="Lev1 dropdown "> <a href="/a/case/" class="menu1 hvr-overline-from-left">定制案例 <i class="fa fa-caret-down"></i></a>
                            <ul class="submenu dr-menu2">

                            </ul>
                        </li><li class="Lev1 dropdown "> <a href="/a/news/" class="menu1 hvr-overline-from-left">新闻资讯 <i class="fa fa-caret-down"></i></a>
                            <ul class="submenu dr-menu2">

                            </ul>
                        </li><li class="Lev1 dropdown "> <a href="/a/youshi/" class="menu1 hvr-overline-from-left">服务优势 <i class="fa fa-caret-down"></i></a>
                            <ul class="submenu dr-menu2">

                                <li class="Lev2"> <a href="/a/youshi/tuandui/" class="menu2">专业的服务团队</a> </li>

                                <li class="Lev2"> <a href="/a/youshi/shigong/" class="menu2">专业的施工团队</a> </li>

                            </ul>
                        </li><li class="Lev1 dropdown "> <a href="/a/team/" class="menu1 hvr-overline-from-left">精英团队 <i class="fa fa-caret-down"></i></a>
                            <ul class="submenu dr-menu2">

                                <li class="Lev2"> <a href="/a/team/sheji/" class="menu2">设计团队</a> </li>

                                <li class="Lev2"> <a href="/a/team/shigong/" class="menu2">施工团队</a> </li>

                                <li class="Lev2"> <a href="/a/team/guanli/" class="menu2">管理团队</a> </li>

                            </ul>
                        </li><li class="Lev1 dropdown "> <a href="/a/contact/" class="menu1 hvr-overline-from-left">联系我们 <i class="fa fa-caret-down"></i></a>
                            <ul class="submenu dr-menu2">

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section id="banner">
        <div class="banner-container">
            <div class="banner home-v1">
                <ul>
                    <li class="slider-2 slide-item" data-transition="random" data-slotamount="7" data-thumb="<?= Url::to('@web/images/1-1P2241023190-L.jpg') ?>" data-title="banner1" >
                        <img src="<?= Url::to('@web/images/1-1P2241023190-L.jpg') ?>" data-bgposition="center top" data-kenburns="off" data-duration="2000" data-ease="Power4.easeInOut" data-bgfit="200" data-bgfitend="100" data-bgpositionend="center top" alt="banner1"/>
                        <div class="caption skewfromright light-plumber-slider-caption tp-resizeme" data-x="center" data-y="200" data-speed="600" data-start="1700" data-easing="easeOutBack">
                            <h1>选择决定品味</h1>
                        </div>
                        <div class="caption randomrotate bold-plumber-slider-caption tp-resizeme" data-x="center" data-y="280" data-speed="500" data-start="2200" data-easing="easeOutBack">
                            <h1>集室内设计、工程施工、材料装饰为一体的专业化中型装饰企业</h1>
                        </div>
                    </li>
                    <li class="slider-2 slide-item" data-transition="random" data-slotamount="7" data-thumb="<?= Url::to('@web/images/1-1P2241022380-L.jpg') ?>" data-title="banner2" >
                        <img src="<?= Url::to('@web/images/1-1P2241022380-L.jpg') ?>" data-bgposition="center top" data-kenburns="off" data-duration="2000" data-ease="Power4.easeInOut" data-bgfit="200" data-bgfitend="100" data-bgpositionend="center top" alt="banner1"/>
                        <div class="caption skewfromright light-plumber-slider-caption tp-resizeme" data-x="center" data-y="200" data-speed="600" data-start="1700" data-easing="easeOutBack">
                            <h1>创造您空间的核心价值</h1>
                        </div>
                        <div class="caption randomrotate bold-plumber-slider-caption tp-resizeme" data-x="center" data-y="280" data-speed="500" data-start="2200" data-easing="easeOutBack">
                            <h1>精益求精，拥有一支工艺精湛、装备精良、作风过硬的施工队伍</h1>
                        </div>
                    </li>
                    <li class="slider-2 slide-item" data-transition="random" data-slotamount="7" data-thumb="<?= Url::to('@web/images/1-1P2241022140-L.jpg') ?>" data-title="banner3" >
                        <img src="<?= Url::to('@web/images/1-1P2241022140-L.jpg') ?>" data-bgposition="center top" data-kenburns="off" data-duration="2000" data-ease="Power4.easeInOut" data-bgfit="200" data-bgfitend="100" data-bgpositionend="center top" alt="banner1"/>
                        <div class="caption skewfromright light-plumber-slider-caption tp-resizeme" data-x="center" data-y="200" data-speed="600" data-start="1700" data-easing="easeOutBack">
                            <h1>优质服务，完善售后，精</h1>
                        </div>
                        <div class="caption randomrotate bold-plumber-slider-caption tp-resizeme" data-x="center" data-y="280" data-speed="500" data-start="2200" data-easing="easeOutBack">
                            <h1>胜任不同档次、不同规模、不同类型、不同风格的家居装修等工程。</h1>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <section id="who-we-are">
        <div class="container">
            <div class="row"> <div class="col-lg-6 col-md-12 large-box col-sm-12 col-xs-12 wow zoomIn hvr-float-shadow whyitem-1" data-wow-duration=".5s">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 img-holder"> <img src="<?= Url::to('@web/images/s1.jpg') ?>" alt=""/> </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hvr-bounce-to-left adv-text-one">
                        <h2>服务优势</h2>
                        <p>01、专业的设计团队：我们公司有专业的设计团队，根据业主的需要第一时间为您做好您所需要的装修设计方案。公司专业承接商业家居装修设计施工、商业空间装修设计施工、写字楼装修设计施工、厂房装修设计施工等。</p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 single-box wow zoomIn whyitem-2" data-wow-duration=".5s" data-wow-delay=".5s">
                    <div class="img-holder"> <img src="<?= Url::to('@web/images/s2.jpg') ?>" alt=""/> </div>
                    <h2>2、专业的服务团队</h2>
                    <p>我们公司有专业的服务团队，第一时间为您准确传达公司的装饰设计及报价内容。独特的设计风格，专业的装修保障。</p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 single-box wow zoomIn whyitem-3" data-wow-duration=".5s" data-wow-delay="1s">
                    <div class="img-holder"> <img src="<?= Url::to('@web/images/s2.jpg') ?>" alt=""/> </div>
                    <h2>3、专业的施工团队</h2>
                    <p>我们公司有专业的施工团队，帮助您解决工地上各种施工难点。过硬的施工质量，满足不同的层次和不同的业主需求。</p>
                </div> </div>
        </div>
    </section>
    <section id="our-projects">
        <div class="container">
            <div class="section-title"> <h1 class="dark-title"><a href="/a/case/">定制案例</a></h1> </div>
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
            <div class="section-title"> <h1><a href="/a/team/">精英团队</a></h1> </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow zoomIn hvr-float-shadow team-item" data-wow-duration=".5s" data-wow-delay=".5s">
                    <div class="single-member hvr-bounce-to-bottom">
                        <a href="/a/team/sheji/64.html" class="team-url">
                            <img src="<?= Url::to('@web/images/1-1P22413034L57.jpg') ?>" alt="设计C组主管"/>
                        </a>
                        <div class="info hvr-bounce-to-top">
                            <h2><a href="/a/team/sheji/64.html" title="设计C组主管">设计C组主管</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow zoomIn hvr-float-shadow team-item" data-wow-duration=".5s" data-wow-delay=".5s">
                    <div class="single-member hvr-bounce-to-bottom">
                        <a href="/a/team/sheji/64.html" class="team-url">
                            <img src="<?= Url::to('@web/images/1-1P22413034L57.jpg') ?>" alt="设计C组主管"/>
                        </a>
                        <div class="info hvr-bounce-to-top">
                            <h2><a href="/a/team/sheji/64.html" title="设计C组主管">设计C组主管</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow zoomIn hvr-float-shadow team-item" data-wow-duration=".5s" data-wow-delay=".5s">
                    <div class="single-member hvr-bounce-to-bottom">
                        <a href="/a/team/sheji/64.html" class="team-url">
                            <img src="<?= Url::to('@web/images/1-1P22413034L57.jpg') ?>" alt="设计C组主管"/>
                        </a>
                        <div class="info hvr-bounce-to-top">
                            <h2><a href="/a/team/sheji/64.html" title="设计C组主管">设计C组主管</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow zoomIn hvr-float-shadow team-item" data-wow-duration=".5s" data-wow-delay=".5s">
                    <div class="single-member hvr-bounce-to-bottom">
                        <a href="/a/team/sheji/64.html" class="team-url">
                            <img src="<?= Url::to('@web/images/1-1P22413034L57.jpg') ?>" alt="设计C组主管"/>
                        </a>
                        <div class="info hvr-bounce-to-top">
                            <h2><a href="/a/team/sheji/64.html" title="设计C组主管">设计C组主管</a></h2>
                        </div>
                    </div>
                </div>
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
                    <p class="phone-contact"><b>4008-888-888</b> 或 <a href="/a/contact/" class="hvr-bounce-to-right">联系我们</a> </p>
                </div>
            </div>
        </div>
    </section>
    <section id="blog">
        <div class="container">
            <div class="section-title"> <h1><a href="/a/news/">新闻资讯</a></h1> </div>
            <div class="row"> <div class="col-lg-6 col-md-6 col-sm-6 blog-wrap hvr-float-shadow">
                    <div class="col-lg-6 col-md-12 img-wrap"> <img src="<?= Url::to('@web/images/1-1P22413034L57.jpg') ?>" alt="办公室装修设计中您是否忽略了“光健康"/>
                        <h2><i class="fa fa-calendar"></i> &nbsp;2018-02-24</h2>
                    </div>
                    <div class="col-lg-6 col-md-12 content-wrap">
                        <h2><a href="/a/news/74.html" title="办公室装修设计中您是否忽略了“光健康">办公室装修设计中您是否忽略了“光健康</a></h2>
                        <p class="desc">现代办公室装修中很多的业主往往会看重办公室的装修风格和实用性，很少会有业主去关注办公室环境问题，这环境问题不是我们常说的绿色植物的摆放，...</p>
                        <ul>
                            <li><span><b>By:</b> admin</span></li>
                            <li><a href="/a/news/74.html" class="read-more">查看更多</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 blog-wrap hvr-float-shadow">
                    <div class="col-lg-6 col-md-12 img-wrap"> <img src="<?= Url::to('@web/images/1-1P22413034L57.jpg') ?>" alt="办公室装修公司为您打造标准合理的过道"/>
                        <h2><i class="fa fa-calendar"></i> &nbsp;2018-02-24</h2>
                    </div>
                    <div class="col-lg-6 col-md-12 content-wrap">
                        <h2><a href="/a/news/73.html" title="办公室装修公司为您打造标准合理的过道">办公室装修公司为您打造标准合理的过道</a></h2>
                        <p class="desc">在现代都市生活中，办公室不仅仅是供我们日常办公的重要活动场所，同时也是我们公司企业自身的核心利益所在，彰显出的往往是我们公司企业自身的整...</p>
                        <ul>
                            <li><span><b>By:</b> admin</span></li>
                            <li><a href="/a/news/73.html" class="read-more">查看更多</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="<?= Url::to('@web/images/1-1P2241223450-L.jpg') ?>" alt="三星"/></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer-sec" class="footer">
        <div class="container">
            <div class="row hidden-sm hidden-xs">
                <div class="col-lg-12 col-md-12">
                    <div class="request-for-qoute-wrap"><a href="contact.html" class="request-for-qoute wow slideInDown hvr-bounce-to-right">某某装饰——精益求精</a></div>
                    <nav class="footer-menu">
                        <button class="footer-nav-toggler hvr-bounce-to-right">Footer Menu <i class="fa fa-bars"></i></button>
                        <ul>
                            <li><a href="/">网站首页</a></li>

                            <li><a href="/a/about/">关于我们</a></li>

                            <li><a href="/a/product/">产品系列</a></li>

                            <li><a href="/a/case/">定制案例</a></li>

                            <li><a href="/a/news/">新闻资讯</a></li>

                            <li><a href="/a/youshi/">服务优势</a></li>

                            <li><a href="/a/team/">精英团队</a></li>

                            <li><a href="/a/contact/">联系我们</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs widget foot-about">
                    <h3 class="dark-title"><a href="/a/about/jianjie/">公司简介</a> </h3>
                    <div class="f-about">
                        <p>  某某装饰设计工程有限公司是一家集室内设计、工程施工、材料装饰为一体的专业化中型装饰企业。公司成立于2012年（前身为室内设计工作室，2009年始于深圳市），现注册资金500万元，公司具有施工二级、设计乙级、承接1000万元... </p>
                    </div>
                    <a href="/a/about/jianjie/" class="read-more">查看更多 <i class="fa fa-angle-double-right"></i></a>
                    <ul class="social">
                        <li><a href="http://www.weibo.com/gooxao" class="hvr-radial-out" target="_blank"><i class="fa fa-weibo"></i></a></li>
                        <li><a href="http://t.qq.com/gooxao2" class="hvr-radial-out" target="_blank"><i class="fa fa-tencent-weibo"></i></a></li>
                        <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=XXX&amp;site=qq&amp;menu=yes" class="hvr-radial-out" target="_blank"><i class="fa fa-qq"></i></a></li>
                        <li><a href="https://www.tmall.com/" class="hvr-radial-out" target="_blank"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget hidden-sm hidden-xs">
                    <h3 class="dark-title"><a href="/a/news/">新闻资讯</a> </h3>
                    <ul class="popular-post">
                        <li> <a href="/a/news/74.html">
                                <h5 title="办公室装修设计中您是否忽略了“光健康"><i class="fa fa-angle-right"></i> &nbsp;办公室装修设计中您是否忽略了“光健康</h5>
                            </a>
                            <p class="date"><i class="fa fa-calendar"></i> &nbsp;2018-02-24</p>
                        </li>
                        <li> <a href="/a/news/73.html">
                                <h5 title="办公室装修公司为您打造标准合理的过道"><i class="fa fa-angle-right"></i> &nbsp;办公室装修公司为您打造标准合理的过道</h5>
                            </a>
                            <p class="date"><i class="fa fa-calendar"></i> &nbsp;2018-02-24</p>
                        </li>
                        <li> <a href="/a/news/72.html">
                                <h5 title="办公室设计室内环境私密性问题分析"><i class="fa fa-angle-right"></i> &nbsp;办公室设计室内环境私密性问题分析</h5>
                            </a>
                            <p class="date"><i class="fa fa-calendar"></i> &nbsp;2018-02-24</p>
                        </li>
                        <li> <a href="/a/news/71.html">
                                <h5 title="办公室装饰工程中石材的选用技巧"><i class="fa fa-angle-right"></i> &nbsp;办公室装饰工程中石材的选用技巧</h5>
                            </a>
                            <p class="date"><i class="fa fa-calendar"></i> &nbsp;2018-02-24</p>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget foot-contact hidden-sm hidden-xs">
                    <h3 class="dark-title"><a href="/contactus.html">联系信息</a></h3>
                    <ul class="contact-info">
                        <li> <i class="fa fa-map-marker"></i> 公司地址：江苏省南京市玄武区玄武湖 </li>
                        <li> <i class="fa fa-phone"></i> 电话：4008-888-888 </li>
                        <li> <i class="fa fa-envelope-o"></i> 传真：+86-123-4567 </li>
                        <li> <i class="fa fa-globe"></i> 邮箱：XXX@qq.com </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget foot-qrcode hidden-sm hidden-xs">
                    <h3>扫描二维码</h3>
                    <div class="f-qrcode"> <img src="<?= Url::to('@web/images/qrcode.png') ?>"/> </div>
                </div>
            </div>
        </div>
    </footer>
    <section id="bottom-bar">
        <div class="container">
            <div class="row">
                <div class="copyright pull-left" style="width:100%;text-align:center;">
                    <p> Copyright &copy; 2002-2017  版权所有 </p>
                </div>
                <div class="credit pull-right hidden-sm hidden-xs" style="z-index:100;display:none;">
                    <p>技术支持：<a href="http:///" target="_blank">响应式网站模板</a></p>
                </div>
            </div>
        </div>
    </section>
</div>
<?= Html::jsFile('@web/js/sshb/wow.js') ?>
<?= Html::jsFile('@web/js/sshb/owl.carousel.min.js') ?>
<?= Html::jsFile('@web/js/sshb/jquery.themepunch.tools.min.js') ?>
<?= Html::jsFile('@web/js/sshb/jquery.themepunch.revolution.min.js') ?>
<?= Html::jsFile('@web/js/sshb/jquery.fancybox.pack.js') ?>
<?= Html::jsFile('@web/js/sshb/custom.js') ?>
<nav id="mmenu" class="noDis">
    <div class="mmDiv">
        <div class="MMhead"> <a href="#mm-0" class="closemenu noblock">X</a> <a href="http://www.weibo.com/gooxao" target="_blank" class="noblock"><i class="fa fa-weibo"></i></a> <a href="http://t.qq.com/gooxao2" target="_blank" class="noblock"><i class="fa fa-tencent-weibo"></i></a> </div>
        <div class="mm-search">
            <form  class="mm-search-form" name="formsearch" action="/plus/search.php">
                <input type="hidden" name="kwtype" value="0" />
                <input type="text" autocomplete="off" value="" name="q" class="side-mm-keyword" placeholder="输入关键字..."/>
            </form>
        </div>
        <ul>
            <li class="m-Lev1 m-nav_0"><a href="/">网站首页</a></li>
            <li class="m-Lev1 m-nav_43"> <a href="/a/about/" class="m-menu1">关于我们</a>
                <ul class="m-submenu">

                    <li class="Lev2"> <a href="/a/about/jianjie/" class="m-menu2">公司简介</a> </li>

                    <li class="Lev2"> <a href="/a/about/qiyuan/" class="m-menu2">品牌起源</a> </li>

                    <li class="Lev2"> <a href="/a/about/xiangce/" class="m-menu2">公司相册</a> </li>

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/product/" class="m-menu1">产品系列</a>
                <ul class="m-submenu">

                    <li class="Lev2"> <a href="/a/product/p1/" class="m-menu2">金融贸易</a> </li>

                    <li class="Lev2"> <a href="/a/product/p2/" class="m-menu2">信息科技</a> </li>

                    <li class="Lev2"> <a href="/a/product/p3/" class="m-menu2">医疗保健</a> </li>

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/case/" class="m-menu1">定制案例</a>
                <ul class="m-submenu">

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/news/" class="m-menu1">新闻资讯</a>
                <ul class="m-submenu">

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/youshi/" class="m-menu1">服务优势</a>
                <ul class="m-submenu">

                    <li class="Lev2"> <a href="/a/youshi/tuandui/" class="m-menu2">专业的服务团队</a> </li>

                    <li class="Lev2"> <a href="/a/youshi/shigong/" class="m-menu2">专业的施工团队</a> </li>

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/team/" class="m-menu1">精英团队</a>
                <ul class="m-submenu">

                    <li class="Lev2"> <a href="/a/team/sheji/" class="m-menu2">设计团队</a> </li>

                    <li class="Lev2"> <a href="/a/team/shigong/" class="m-menu2">施工团队</a> </li>

                    <li class="Lev2"> <a href="/a/team/guanli/" class="m-menu2">管理团队</a> </li>

                </ul>
            </li><li class="m-Lev1 m-nav_43"> <a href="/a/contact/" class="m-menu1">联系我们</a>
                <ul class="m-submenu">

                </ul>
            </li>
        </ul>
    </div>
</nav>
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
    Collect from <a href="http://www.cssmoban.com/"  title="网站模板">模板之家</a>
    <a href="https://www.chazidian.com/"  title="查字典">查字典</a>
</div>

