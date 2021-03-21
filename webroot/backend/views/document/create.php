<?php

use yii\helpers\Html;

$this->title = Yii::t('app/title','Create Document');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/title','Documents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-create">

    <?= $this->render('_form', [
        'model' => $model,
        'article' => $article,
        'category' => $category,
    ]) ?>

</div>
