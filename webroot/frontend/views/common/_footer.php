<?php
use frontend\components\ActiveSmarty;
use frontend\components\CacheConfig;
use frontend\components\Html;
use frontend\models\News;
use yii\helpers\Url;


$news = News::find()->limit(4)->orderBy('create_time desc')->all();
?>

<footer id="footer-sec" class="footer">
    <div class="container">
        <div class="row hidden-sm hidden-xs">
            <div class="col-lg-12 col-md-12">
                <div class="request-for-qoute-wrap"><a href="contact.html" class="request-for-qoute wow slideInDown hvr-bounce-to-right">四顺环保——精益求精</a></div>
                <nav class="footer-menu">
                    <button class="footer-nav-toggler hvr-bounce-to-right">Footer Menu <i class="fa fa-bars"></i></button>
                    <ul>
                        <li><a href="/">网站首页</a></li>
                        <li><a href="/about.html">关于我们</a></li>
                        <li><a href="/product.html">产品系列</a></li>
                        <li><a href="/news.html">新闻资讯</a></li>
                        <li><a href="/video.html">企业视频</a></li>
                        <li><a href="/contact.html">联系我们</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs widget foot-about">
                <h3 class="dark-title"><a href="/about.html">公司简介</a> </h3>
                <div class="f-about">
                    <p>
                        <?= CacheConfig::getConfigCache('remark'); ?>
                    </p>
                </div>
                <a href="/about.html" class="read-more">查看更多 <i class="fa fa-angle-double-right"></i></a>
                <ul class="social">
                    <li><a href="http://www.weibo.com/gooxao" class="hvr-radial-out" target="_blank"><i class="fa fa-weibo"></i></a></li>
                    <li><a href="http://t.qq.com/gooxao2" class="hvr-radial-out" target="_blank"><i class="fa fa-tencent-weibo"></i></a></li>
                    <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=XXX&amp;site=qq&amp;menu=yes" class="hvr-radial-out" target="_blank"><i class="fa fa-qq"></i></a></li>
                    <li><a href="https://www.tmall.com/" class="hvr-radial-out" target="_blank"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget hidden-sm hidden-xs">
                <h3 class="dark-title"><a href="/news.html">新闻资讯</a> </h3>
                <ul class="popular-post">
                    <?php foreach($news as $key => $val) { ?>
                    <li> <a href="/news/detail/<?= $val->id ?>.html">
                            <h5 title="<?= $val->title ?>"><i class="fa fa-angle-right"></i> &nbsp;&nbsp; <?= $val->title ?></h5>
                        </a>
                        <p class="date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?= date('Y-m-d', $val->create_time) ?></p>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget foot-contact hidden-sm hidden-xs">
                <h3 class="dark-title"><a href="/contactus.html">联系信息</a></h3>
                <ul class="contact-info">
                    <li> <i class="fa fa-map-marker"></i> 公司地址：<?= CacheConfig::getConfigCache('address') ?> </li>
                    <li> <i class="fa fa-phone"></i> 电话：<?= CacheConfig::getConfigCache('phone') ?> </li>
                    <li> <i class="fa fa-envelope-o"></i> 传真：<?= CacheConfig::getConfigCache('phone') ?> </li>
                    <li> <i class="fa fa-globe"></i> 邮箱：<?= CacheConfig::getConfigCache('email') ?> </li>
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