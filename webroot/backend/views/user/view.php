<?php

use backend\components\Html;
use yii\widgets\DetailView;

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/title','Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <p>
        <?php // Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app/html','Delete'), ['delete', 'id' => $model->id], [
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
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            // 'status',
            ['label'=>$model->attributeLabels()['status'],'value'=>$model->commonStatus[$model->status]],
            // 'created_at',
            ['label'=>$model->attributeLabels()['created_at'],'value'=>date('Y-m-d H:i:s', $model->created_at)],
            ['label'=>$model->attributeLabels()['updated_at'],'value'=>date('Y-m-d H:i:s', $model->updated_at)],
            // 'updated_at',
        ],
    ]) ?>

</div>
