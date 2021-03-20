<?php
use frontend\components\ActiveSmarty;
use frontend\components\CacheConfig;
use frontend\components\Html;
?>

<style>
    .erweimadiv span{
        display: block;
        color: white;
        text-align: left;
        margin-bottom: 10px;
    }
</style>

<div class="row vr_footer hidden-xs">
    <div class="vr_footer_con">
        <div class="zj_footer">
            <div class="menu" style="text-align: center;">
                <ul>
                    <li><a href="/design.html" class="txt">智能设计</a></li>
                    <li><a href="aivr.html" class="txt">AI+VR云台</a></li>
                    <li><a href="/business.html" class="txt">招商加盟</a></li>
                    <li><a href="/store.html" class="txt">智慧门店</a></li>
                    <li><a href="/soft.html" class="txt">下载与视频</a></li>
                    <li><a href="/about.html" class="txt">关于我们</a></li>
                    <li style="width: 200px;"><a style="color: #ffffff;text-decoration: none;" href="http://beian.miit.gov.cn" target="_blank">京ICP备19055970号</a></li>
                </ul>
            </div>

            <div class="erweima">
                <?= Html::img("@web/images/dy.png") ?>
                <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").CacheConfig::getConfigCache("erweima"); ?>" alt="">
                <div style="float: right;" class="erweimadiv">
                    <span>关注真家公众号</span>
                    <span>TEL：<?= CacheConfig::getConfigCache("phone") ?></span>
                    <span>周一至周五9:00——19:00</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?= CacheConfig::getConfigCache("baidu_tongji") ?>