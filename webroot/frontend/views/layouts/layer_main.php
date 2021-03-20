<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\LayerAsset;
use common\widgets\Alert;

LayerAsset::register($this);
$this->registerMetaTag(["name"=>"keywords","content"=>Yii::$app->cache->get('keywords')]); // 注册meta
$this->registerMetaTag(["name"=>"description","content"=>Yii::$app->cache->get('description')]); // 注册meta
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,viewport-fit=cover">
    <meta name="shenma-site-verification" content="e306d183963e45588b42c0242bbbf353_1565774988">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- HTML5 Shiv 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
