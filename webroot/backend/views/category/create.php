<?php

use yii\helpers\Html;

$this->title = Yii::t('app/title','Create Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/title','Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
