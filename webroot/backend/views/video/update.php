<?php

use yii\helpers\Html;

$this->title = 'Update Video: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="video-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
