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

    <section id="page-title" style="background-image:url(/images/p.jpg);">
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
                                <?php foreach($model as $val) { ?>
                                <div class="portfolio-item isotope-item col-sm-4 col-xs-6">
                                    <article>
                                        <figure class="glass-animation">
                                            <a class="swipebox" href="/product/detail/<?= $val->id ?>.html">
                                                <span class="background"></span>
                                                <span class="glass"><span class="circle"><i class="handle"></i></span></span>
                                                <img class="img-responsive" src="<?= CacheConfig::getConfigCache("endpoint") . CacheConfig::getConfigCache("dirname") . $val->cover_url ?>" alt="<?= $val->title ?>"/>
                                            </a>
                                        </figure>
                                        <h5 class="item-title"> <a href="/product/detail/<?= $val->id ?>.html" title="<?= $val->title ?>"><?= $val->title ?></a> </h5>
                                        <div class="flex separator">
                                            <span class="line"></span>
                                            <span class="wrap"><span class="square"></span></span>
                                        </div>
                                    </article>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="pagess">
                                <ul>
                                    <li><a href="<?= $prevUrl ?>">上一页</a></li>
                                    <?php foreach($pageList as $val) { ?>
                                        <li class="<?= $val['current'] == 'Ahover' ? 'thisclass' : '' ?>">
                                            <?= $val['current'] == 'Ahover' ? $val['index'] : '<a href="'.$val['url'].'">'.$val['index'].'</a>' ?>
                                        </li>
                                    <?php } ?>
                                    <li><a href="<?= $nextUrl ?>">下一页</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $this->render('/common/_right'); ?>
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