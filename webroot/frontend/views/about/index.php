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
                    <div class="about-page-wrap">
                        <?= CacheConfig::getConfigCache("remark") ?>
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
                                        <figure><a href="/a/news/74.html">
                                                <img src="<?= Url::to('@web/images/news.jpg') ?>" />
                                            </a></figure>
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