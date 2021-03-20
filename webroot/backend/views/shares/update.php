<?php

use yii\helpers\Html;

$this->title = '更新股票信息: ' ."：". $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shares-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
