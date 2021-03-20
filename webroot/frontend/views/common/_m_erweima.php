<?php
use frontend\components\CacheConfig;
?>

<div class="row visible-xs">
    <div class="col-xs-12 zj_mobile_footer">
<!--        <div style="width:96%;height:1px;background-color: rgba(83,83,83,1);margin: 0 auto;margin-bottom: 30px;"></div>-->
        <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").CacheConfig::getConfigCache("erweima"); ?>" alt="">
        <p style="margin-top: 10px;">关注真家公众号</p>
        <p>TEL:<?= CacheConfig::getConfigCache("phone") ?></p>
        <p>周一至周五9:00——19:00</p>
<!--        <ul>-->
<!--            <li><a href="/design.html">智能设计</a></li>-->
<!--            <li><a href="/aivr.html">AI+VR云台</a></li>-->
<!--            <li><a href="/business.html">招商加盟</a></li>-->
<!--            <li><a href="/sotre.html">智慧门店</a></li>-->
<!--            <li><a href="/about.html">关于我们</a></li>-->
<!--        </ul>-->
    </div>
</div>