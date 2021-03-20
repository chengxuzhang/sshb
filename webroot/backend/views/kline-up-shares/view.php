<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kline Up Shares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kline-up-shares-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'scode',
            'sname',
            'create_time',
            'is_thirty_up',
            'is_sun',
            'is_one_down',
            'is_more_head',
            'is_five_up',
            'is_two_down',
        ],
    ]) ?>

</div>
