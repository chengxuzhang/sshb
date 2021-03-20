<?php 
use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="site-logo">
    <h1>
        <a href="<?= Url::to(['/']) ?>" title="">
            <?= Html::img(["laod/index/CN2015.png"],['alt'=>'我的网站']) ?>
        </a>
    </h1>
</div>
<div class="site-logo-m">
    <h1>
        <a href="<?= Url::to(['/']) ?>" title="">
            代码功
        </a>
    </h1>
</div>