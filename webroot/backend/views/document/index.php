<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = Yii::t('app/title','Documents');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-index">
    <?php echo $this->render('_search', [
        'model' => $searchModel,
        'category' => $category,
        ]); ?>

    <p>
        <?= Html::a(Yii::t('app/title','Create Document'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            // 'uid',
            [
                'attribute' => 'uid',
                'value' => function($model){
                    return $model->userinfo['username'];
                },
            ],
            // 'name',
            'title',
            // 'category_id',
            [
                'attribute' => 'category_id',
                'value' => function($model){
                    return $model->category['title'];
                },
            ],
            [
                'attribute' => 'create_time',
                // 'format' => ['date', 'Y-m-d H:i'],
                'value' => function ($model) {
                    return date('Y-m-d H:i:s', $model->create_time);
                },
            ],
            // 'update_time',
            [
                'attribute' => 'update_time',
                'value' => function ($model) {
                    return date('Y-m-d H:i:s', $model->update_time);
                },
            ],
            // 'status',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->commonStatus[$model->status];
                },
            ],
            [
                'header' => '操作',
                'class' => 'backend\components\ActionColumn',
                'template' => '{update} {delete}',
                'headerOptions'=>['width'=>'120'],
            ],
        ],
    ]); ?>
</div>
