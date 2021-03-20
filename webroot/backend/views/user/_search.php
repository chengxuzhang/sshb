<?php

use backend\components\Html;
use yii\widgets\ActiveForm;
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['class'  => 'form-inline'],
    ]); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app/html','Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app/html','Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
