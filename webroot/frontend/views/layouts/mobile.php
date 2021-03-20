<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->registerMetaTag(["name"=>"keywords","content"=>Yii::$app->cache->get('keywords')]); // 注册meta
$this->registerMetaTag(["name"=>"description","content"=>Yii::$app->cache->get('description')]); // 注册meta
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="shenma-site-verification" content="e306d183963e45588b42c0242bbbf353_1565774988">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- 面包线开始 -->
<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?= Alert::widget() ?>
<!-- 面包线结束 -->

<!-- 正文部分body -->
<?= $content ?>
<!-- 正文部分结束body -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
