<?php
header('Access-Control-Allow-Origin:*');
error_reporting(E_ALL ^ E_NOTICE);
// error_reporting(0);

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../../common/function/functions.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/main.php'),
    require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/main-local.php')
);

$application = new yii\web\Application($config);
define('HOME_URL', Yii::$app->getHomeUrl());
define('UPLOAD_URL', Yii::$app->basePath .'/../upload/');
define('AUTO_ONLINE', TRUE);
$application->run();
