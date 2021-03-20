<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SecondKill */

$this->title = 'Create Second Kill';
$this->params['breadcrumbs'][] = ['label' => 'Second Kills', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="second-kill-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
