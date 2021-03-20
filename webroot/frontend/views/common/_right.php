<?php

use frontend\components\CacheConfig;
?>
<div class="sideBar hidden-xs">
    <div class="backToTop_1">
        <a><img src="/images/icon_top.png" /></a>
    </div>
    <div class="zixun">
        <a><img src="/images/icon_zx.png" /></a>
        <p class="zx_call"><?= CacheConfig::getConfigCache("phone") ?></p>
    </div>
    <div class="kf" style="display: none;">
        <a><img src="/images/icon_kf.png" /></a>
    </div>
</div>