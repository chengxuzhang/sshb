<?php

use yii\helpers\Html;

$this->title = '更新产品';
$this->params['breadcrumbs'][] = ['label' => '产品列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-update">

    <?= $this->render('_form', [
        'model' => $model,
        'article' => $article,
    ]) ?>

</div>
