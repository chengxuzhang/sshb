<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ExperienceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '留言列表');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experience-index">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('导出数据', ['export-excel'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'columns' => [
            'name',
            'phone',
            'type',
            'province',
            'city',
            [
                'attribute' => 'createTime',
                'value' => function ($model) {
                    return date('Y-m-d H:i:s', $model->createTime);
                },
            ],
            // 'createTime:datetime',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->statusParams[$model->status];
                },
            ],

            [
                'header' => '操作',
                'class' => 'backend\components\ActionColumn',
                'template' => '{del}',
                'buttons' => [
                    'del' => function ($url, $model, $key) {
                        $options = [
                            'title' => '完成处理',
                            'class' => 'btn btn-danger btn-xs ajax-get confirm',
                        ];
                        return Html::a('完成处理', ['delete','id'=>$model->id], $options);
                    },
                ],
                'headerOptions'=>['width'=>'120'],
            ],
        ],
    ]); ?>
</div>
