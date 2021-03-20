<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'K线列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kline-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'summary' => false, 
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'scode',
            'kp',
            'sp',
            'zg',
             'zd',
             'zdf',
             'zde',
             'cjl',
             'cje',
             'zf',
             'hsl',
             'riqi'
        ],
    ]); ?>
</div>
