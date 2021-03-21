<?php

use yii\helpers\Html;

$this->title = Yii::t('app/title','Update Document').': ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/title','Documents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['update', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app/html','Update');
?>
<div class="document-update">

    <?= $this->render('_form', [
        'model' => $model,
        'article' => $article,
        'category' => $category,
    ]) ?>

</div>
