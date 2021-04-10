<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ExperienceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '留言列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experience-index">
    <?php echo $this->render('_search', [
        'model' => $searchModel,
    ]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false, 
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'phone',
            'title',
            'email',
            'content',
            [
                'attribute' => 'create_time',
                'value' => function ($model) {
                    return date('Y-m-d H:i:s', $model->create_time);
                },
            ],
            'status',
            [
                'header' => '操作',
                'class' => 'backend\components\ActionColumn',
                'template' => '{view}',
                'headerOptions'=>['width'=>'60'],
            ],
        ],
    ]); ?>
</div>
