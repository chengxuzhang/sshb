<?php
use frontend\components\CacheConfig;
?>

<div class="row visible-xs">
    <div class="zj_area_ren">
        <div class="title">区域负责人</div>
        <div class="list">
            <ul>
                <?php foreach ($fuzeren as $item) { ?>
                    <li>
                        <div class="li-box">
                            <div class="l">
                                <img src="<?= CacheConfig::getConfigCache("endpoint").CacheConfig::getConfigCache("dirname").$item->pic ?>" alt="">
                            </div>
                            <div class="r">
                                <span class="name"><?= $item->title ?></span>
                                <span class="area"><?= $item->path ?></span>
                                <span class="phone"><?= $item->remark ?></span>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>