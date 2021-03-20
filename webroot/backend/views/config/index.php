<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('app/title', 'Configs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app/title', 'Create Config'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a("开始配置", ['set-config'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'summary' => false, 
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fieldName',
//            'type',
            [
                'attribute' => 'type',
                'value' => function($model){
                    return $model->_types[$model->type];
                },
            ],
//            'create_time',
//            'update_time',
            // 'value:ntext',
//             'isShow',
            [
                'attribute' => 'isShow',
                'value' => function($model){
                    return $model->commonStatus[$model->isShow];
                },
            ],
             'title',
             'remark',
            // 'content:ntext',
//             'config_type',
            [
                'attribute' => 'config_type',
                'value' => function($model){
                    return getConfigList(\backend\components\CacheConfig::getConfigCache("config_type"),":")[$model->config_type];
                },
            ],
             'sort',
            [
                'attribute' => 'status',
                'value' => function($model){
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
