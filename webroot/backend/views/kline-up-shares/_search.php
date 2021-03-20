<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="kline-up-shares-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['class'  => 'form-inline'],
    ]); ?>


    <?= $form->field($model, 'scode')->label(false)->textInput(['placeholder'=>"股票代码"]) ?>

    <?= $form->field($model, 'sname')->label(false)->textInput(['placeholder'=>"股票名称"]) ?>

    <?= $form->field($model, 'create_time')->label(false)->textInput(['placeholder'=>"日期"]) ?>

    <?= $form->field($model, 'is_thirty_up')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'30日均线是否上涨']) ?>

    <?= $form->field($model, 'is_sixty_up')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'60日均线是否上涨']) ?>

    <?php  echo $form->field($model, 'is_sun')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'完美收阳条件']) ?>

    <?php  echo $form->field($model, 'is_one_down')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'1日连跌'])  ?>

    <?php  echo $form->field($model, 'is_more_head')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'多头排列'])  ?>

    <?php  echo $form->field($model, 'is_five_up')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'5日均线上涨'])  ?>

    <?php  echo $form->field($model, 'is_two_down')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'2日连跌'])  ?>

    <?php  echo $form->field($model, 'is_fall_stop')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'上次是否跌停'])  ?>

    <?php  echo $form->field($model, 'is_up_to_down')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'正顺序排列'])  ?>

    <?php  echo $form->field($model, 'is_down_to_up')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'倒顺序排列'])  ?>

    <?php  echo $form->field($model, 'is_kline_rise_five')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'5日均线是否刚抬头'])  ?>

    <?php  echo $form->field($model, 'five_day_uptodown')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'5日前是否正序排列'])  ?>

    <?php  echo $form->field($model, 'five_day_downtoup')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'5日前是否倒序排列'])  ?>

    <?php  echo $form->field($model, 'is_five_bottom')->label(false)->dropDownList($model->commonStatus ,['prompt'=>'5日线是否在最底部'])  ?>

    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
