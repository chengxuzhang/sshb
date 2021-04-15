<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '产品列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增产品', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'summary' => false, 
        'columns' => [
            'id',
            'uid',
            'name',
            'title',
            [
                'attribute' => 'create_time',
                // 'format' => ['date', 'Y-m-d H:i'],
                'value' => function ($model) {
                    return date('Y-m-d H:i:s', $model->create_time);
                },
            ],
            [
                'attribute' => 'update_time',
                'value' => function ($model) {
                    return date('Y-m-d H:i:s', $model->update_time);
                },
            ],
            [
                'attribute' => 'category_id',
                'value' => function ($model, $category) {
                    return $category[$model->category_id];
                },
            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->commonStatus[$model->status];
                },
            ],
            [
                'header' => '操作',
                'class' => 'backend\components\ActionColumn',
                'template' => '{view} {update} {delete}',
                'headerOptions'=>['width'=>'120'],
            ],
        ],
    ]); ?>
</div>
