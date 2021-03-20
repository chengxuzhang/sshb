<?php

use yii\helpers\Html;

$this->title = Yii::t('app/title', 'Update Config') .":". $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/title', 'Configs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app/title', 'Update');
?>
<div class="config-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
