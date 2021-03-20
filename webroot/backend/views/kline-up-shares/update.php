<?php

use yii\helpers\Html;

$this->title = 'Update Kline Up Shares: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kline Up Shares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kline-up-shares-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
