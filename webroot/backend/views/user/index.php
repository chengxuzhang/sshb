<?php

use backend\components\Html;
use yii\grid\GridView;

$this->title = Yii::t('app/title','Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('app/title','Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'email:email',
            // 'status',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->commonStatus[$model->status];
                },
            ],
            [
                'attribute' => 'created_at',
                // 'format' => ['date', 'Y-m-d H:i'],
                'value' => function ($model) {
                    return date('Y-m-d H:i:s', $model->created_at);
                },
            ],
            [
                'attribute' => 'updated_at',
                // 'format' => ['date', 'Y-m-d H:i'],
                'value' => function ($model) {
                    return date('Y-m-d H:i:s', $model->created_at);
                },
            ],
            [
                'header' => '操作',
                'template' => '{delete} {nodelete}',
                'class' => 'backend\components\ActionColumn',
                'visibleButtons'=>[
                    'delete'=>function ($model, $key, $index) {
                        return $model->status === $model::COMMON_STATUS_ACTIVE;
                    },
                    'nodelete'=>function ($model, $key, $index) {
                        return $model->status === $model::COMMON_STATUS_DELETED;
                    }
                ],
            ],
        ],
    ]); ?>
</div>
