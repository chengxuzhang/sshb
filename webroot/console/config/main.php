<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','queue'],
    'controllerNamespace' => 'console\controllers',
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'redis' => [
            'class' => \yii\redis\Connection::class,
        ],
        'queue' => [
            'class' => 'shmilyzxt\queue\queues\RedisQueue',
            'jobEvent' => [
                'on beforeExecute' => ['shmilyzxt\queue\base\JobEventHandler','beforeExecute'],
                'on beforeDelete' => ['shmilyzxt\queue\base\JobEventHandler','beforeDelete'],
            ],
            'connector' => [ //需要安装 predis\predis 扩展来操作redis
                'class' => 'shmilyzxt\queue\connectors\PredisConnector',
                'parameters' => [
                    'scheme' => 'tcp',
                    'host' => '127.0.0.1',
                    'port' => 6379,
                    'password' => '123456',
                    'db' => 0
                ],
                'options'=> [],
            ],
            'queue' => 'default',
            'expire' => 60,
            'maxJob' => 0,
            'failed' => [
                'logFail' => true,
                'provider' => [
                    'class' => 'shmilyzxt\queue\failed\DatabaseFailedProvider',
                    'db' => [
                        'class' => 'yii\db\Connection',
                        'dsn' => 'mysql:host=127.0.0.1;dbname=yii2advanced',
                        'username' => 'root',
                        'password' => 'root',
                        'charset' => 'utf8',
                    ],
                    'table' => 'failed_jobs'
                ],
            ],
        ],
    ],
    'params' => $params,
];
