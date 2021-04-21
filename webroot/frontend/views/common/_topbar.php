<?php
use frontend\components\ActiveSmarty;
use frontend\components\CacheConfig;
use frontend\components\Html;
?>

<section id="topbar">
    <div class="container">
        <div class="row">
            <div class="social pull-left topbar-left">
                <ul>
                    <li class="top-phone"><a href="tel:<?= CacheConfig::getConfigCache("phone") ?>" class="hvr-bounce-to-bottom"><i class="fa fa-phone"></i>
                            <?= CacheConfig::getConfigCache("phone") ?>
                        </a></li>
                    <li class="top-email"><a href="mailto:<?= CacheConfig::getConfigCache("email") ?>" class="hvr-bounce-to-bottom"><i class="fa fa-envelope-o"></i>
                            <?= CacheConfig::getConfigCache("email") ?>
                        </a></li>
                </ul>
            </div>
            <div class="contact-info pull-right topbar-right">
                <ul>
                    <li><a href="javascript:;" target="_blank"><i class="fa fa-weibo"></i></a></li>
                    <li><a href="javascript:;" target="_blank"><i class="fa fa-tencent-weibo"></i></a></li>
                    <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=XXX&amp;site=qq&amp;menu=yes" target="_blank"><i class="fa fa-qq"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>