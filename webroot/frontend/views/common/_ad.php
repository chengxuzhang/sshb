<?php 
use yii\helpers\Html;
use frontend\components\ActiveSmarty;
 ?>

<div class="widget_ads">
	<?php $rightAdSmarty = ActiveSmarty::begin([
        'options' => [
        	'id' => 1,
        	'keyCache' => 'homeRightAd',
        ],
    ]); ?>
    <?= $rightAdSmarty->getAd(); ?>
    <?php ActiveSmarty::end(); ?>
</div>