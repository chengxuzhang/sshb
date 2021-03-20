<?php 

use yii\helpers\Url;
use frontend\components\ActiveSmarty;
use frontend\components\Html;
?>

<div class="w_title">
    <h3>
        最新评论
    </h3>
</div>
<ul class="w_comment">
    <?php $commentSmarty = ActiveSmarty::begin([
        'options' => [
            'newComment' => 10
        ],
    ]); ?>
    <?php $newComments = $commentSmarty->getNewComments(); ?>
    <?php if(is_array($newComments) && $newComments) : ?>
    <?php foreach ($newComments as $key => $val) : ?>
    <li>
        <img alt="<?= $val['userinfo']['nickname'] ?>" src="<?= $val['userinfo']['avatar'] ?>" srcset="" class="avatar avatar-55 photo" height="55" width="55">
        <p>
            <a href="javascript:;" title=" 在：<?= $val['document']['title'] ?>" class="comment_r">
                <?= $val['userinfo']['nickname'] ?>
            </a>
            在《<a href="<?= Html::toUrl($val['document']) ?>"><?= $val['document']['title'] ?>》上说：
        </p>
        <div class="cmt-nr">
            <a class="nr" href="javascript:;" title="发表在：<?= $val['document']['title'] ?>">
                <?= $val['content'] ?>
            </a>
            <i class="icon-arrow-up">
            </i>
        </div>
    </li>
    <?php endforeach; ?>
    <?php endif; ?>
    <?php ActiveSmarty::end(); ?>
</ul>