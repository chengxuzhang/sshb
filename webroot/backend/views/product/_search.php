<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'form-inline'],
    ]); ?>

    <?= $form->field($model, 'title')->textInput([
        'placeholder'=>'标题'
    ])->label(false) ?>

    <?= $form->field($model, 'category_id')
             ->dropDownList(getConfigList(\backend\components\CacheConfig::getConfigCache('product_type'), ":") ,['prompt'=>'选择分类'])
             ->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('重置', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
