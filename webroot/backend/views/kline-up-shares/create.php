<?php

use yii\helpers\Html;

$this->title = 'Create Kline Up Shares';
$this->params['breadcrumbs'][] = ['label' => 'Kline Up Shares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kline-up-shares-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
