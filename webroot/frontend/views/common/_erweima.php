<?php

use frontend\components\CacheConfig;
?>

<div class="row nav3_blue_bg hidden-xs">
    <div class="col-lg-12 col-xs-12 zj_nav3_blue_bg_div">
        <div style="width: 1200px;margin: 0 auto;">
            <span class="title">心动那就行动吧，开始设计之旅！</span>
            <div class="p">
                <a href="javascript:;" class="zj_sqty">马上体验</a>
            </div>
        </div>
    </div>
</div>
<div class="row hhr_txfk hhr_tel hidden-xs" style="background-color: black;">
    <div class="col-lg-12 col-xs-12 bim_solo">
        <h3 class="text-center hhr_dxfk hhr_tel_peo zj_default_color">区域负责人</h3>
        <div class="col-lg-12 col-xs-12 hhr_version">
            <?php foreach ($fuzeren as $item) { ?>
                <div class="col-lg-4 col-xs-4 hhr_version_item">
                    <ul class="zj_ewm">
                        <h3 class="text-center">
                            <span><img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$item->pic ?>"/></span>
                        </h3>
                        <h4 class="text-center zj_black_color"><?= $item->title ?></h4>
                        <p class="text-center zj_hui_color"><?= $item->path ?></p>
                        <p class="text-center zj_jing_color"><?= $item->remark ?></p>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</div>