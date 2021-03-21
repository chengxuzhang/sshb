<?php

use yii\helpers\Html;

$this->title = Yii::t('app/title', 'Create Hdp');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/title', 'Hdps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hdp-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
