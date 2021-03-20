<?php

use yii\helpers\Html;

$this->title = "更新密码";
?>
<div class="user-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
