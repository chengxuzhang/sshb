<?php

use yii\helpers\Html;

$this->title = Yii::t('app/title','Update Category') .'：'. $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/title','Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['update', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app/html','Update');
?>
<div class="category-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
