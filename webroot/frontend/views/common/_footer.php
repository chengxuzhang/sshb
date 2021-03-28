<?php
use frontend\components\ActiveSmarty;
use frontend\components\CacheConfig;
use frontend\components\Html;
use yii\helpers\Url;
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
                        <li><a href="/youshi.html">产品优势</a></li>
                        <li><a href="/team.html">精英团队</a></li>
                        <li><a href="/contact.html">联系我们</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs widget foot-about">
                <h3 class="dark-title"><a href="/a/about/jianjie/">公司简介</a> </h3>
                <div class="f-about">
                    <p>
                        <?= CacheConfig::getConfigCache('remark'); ?>
                    </p>
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