<?php

use frontend\components\CacheConfig;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->registerMetaTag(["name"=>"keywords","content"=>CacheConfig::getConfigCache("keywords")]); // 注册meta
$this->registerMetaTag(["name"=>"description","content"=>CacheConfig::getConfigCache("description")]); // 注册meta
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="order by sshb.com" />
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
