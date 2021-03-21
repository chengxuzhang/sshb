<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HdpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app/title', 'Hdps');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hdp-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app/title', 'Create Hdp'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false, 
        'columns' => [
            'title',
            [
                'attribute' => 'type',
                'value' => function($model){
                    return getConfigList(\backend\components\CacheConfig::getConfigCache("hdptype"), ":")[$model->type];
                },
            ],
            [
                'attribute' => 'path',
                'headerOptions' => ['class'=>'visible-lg'],
                'contentOptions' => ['class'=>'visible-lg'],
            ],
            [
                'attribute' => 'status',
                'value' => function($model){
                    return $model->commonStatus[$model->status];
                },
            ],
            [
                'attribute' => 'create_time',
                // 'format' => ['date', 'Y-m-d H:i'],
                'value' => function ($model) {
                    return date('Y-m-d', $model->create_time);
                },
            ],
            'sort',
            [
                'header' => '操作',
                'class' => 'backend\components\ActionColumn',
                'template' => '{update} {delete}',
                'headerOptions'=>['width'=>'120'],
            ],
        ],
    ]); ?>
</div>
