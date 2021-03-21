<?php

use yii\helpers\Html;

$this->title = Yii::t('app/html', 'Update Hdp') ."：". $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/html', 'Hdps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['update', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app/html', 'Update');
?>
<div class="hdp-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
