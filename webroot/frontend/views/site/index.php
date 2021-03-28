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
                    <p class="phone-contact"><b>
                            <?= CacheConfig::getConfigCache('phone'); ?>
                        </b> 或 <a href="/a/contact/" class="hvr-bounce-to-right">联系我们</a> </p>
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
<style>
    .copyrights{text-indent:-9999px;height:0;line-height:0;font-size:0;overflow:hidden;}
</style>
<div class="copyrights">
    Collect from <a href="http://www.cssmoban.com/"  title="网站模板">模板之家</a>
    <a href="https://www.chazidian.com/"  title="查字典">查字典</a>
</div>

