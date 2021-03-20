<?php

use yii\helpers\Html;

$this->title = Yii::t('app/title', 'Create Config');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/title', 'Configs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
