<?php

use yii\helpers\Html;

$this->title = '新增股票';
$this->params['breadcrumbs'][] = ['label' => 'Shares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shares-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
