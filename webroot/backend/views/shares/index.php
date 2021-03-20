<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '股票列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shares-index">

    <p>
        <?= Html::a('加入股票', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('获取所有股票', 'javascript:;', ['class' => 'btn btn-success all']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'summary' => false, 
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\CheckboxColumn',
                'checkboxOptions' => function ($model, $key, $index, $column) {
                    return ['value' => $model->code];
                }
            ],

            'id',
            'code',
            'name',
            [
                'attribute' => 'create_time',
                'value' => function ($model) {
                    return date("Y-m-d", $model->create_time);
                },
            ],
            [
                'attribute' => 'update_time',
                'value' => function ($model) {
                    return date("Y-m-d", $model->update_time);
                },
            ],

            [
                'header' => '操作',
                'class' => 'backend\components\ActionColumn',
                'template' => '{synchronize}',
                'buttons' => [
                    'synchronize' => function ($url, $model, $key) {
                        return Html::a('<i class=\'glyphicon glyphicon-cog\'></i>  同步数据', 'javascript:;',['class'=>'btn btn-default btn-xs synchronize','data-code'=>$model->code]);
                    },
                ],
                'headerOptions'=>['width'=>'120'],
            ],
        ],
    ]); ?>
</div>


<script>
    $(function () {
        layui.use(['form','laydate', 'table'], function() {
            var form = layui.form;
            var laydate = layui.laydate;
            var table = layui.table;
        })
    });
</script>
