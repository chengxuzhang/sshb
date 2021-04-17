<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','gii'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
                'text/json' => 'yii\web\JsonParser',
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '127.0.0.1',
            'port' => 6379,
            'database' => 0,
        ],
        'cache' => [
            'class' => 'yii\redis\Cache',
            //'redis' => 'redis',
        ],
        // 'cache' => [
        //     'class' => 'yii\caching\MemCache',
        //     'servers' => [
        //         [
        //             'host' => '127.0.0.1',
        //             'port' => 11211,
        //             'weight' => 100,
        //         ]
        //     ],
        // ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            //用于表明urlManager是否启用URL美化功能，在Yii1.1中称为path格式URL，    
            // Yii2.0中改称美化。   
            // 默认不启用。但实际使用中，特别是产品环境，一般都会启用。   
            "enablePrettyUrl" => true,    
            // 是否启用严格解析，如启用严格解析，要求当前请求应至少匹配1个路由规则，    
            // 否则认为是无效路由。    
            // 这个选项仅在 enablePrettyUrl 启用后才有效。    
            "enableStrictParsing" => false,    
            // 是否在URL中显示入口脚本。是对美化功能的进一步补充。    
            "showScriptName" => false,    
            // 指定续接在URL后面的一个后缀，如 .html 之类的。仅在 enablePrettyUrl 启用时有效。    
            "suffix" => "",
            "rules" => [
                // 新闻路由
                ['pattern'=>'news','route'=>'news','suffix'=>'.html'],
                [
                    'pattern'=>'news/<page:\d+>',
                    'route'=>'news',
                    'defaults' => ['page'=>1],
                    'suffix'=>'.html'
                ],
                [
                    'pattern'=>'news/<type:\d+>/<page:\d+>',
                    'route'=>'news',
                    'defaults' => ['page'=>1,'type'=>1],
                    'suffix'=>'.html'
                ],
                [
                    'pattern'=>'news/detail/<id:\d+>',
                    'route'=>'news/view',
                    'suffix'=>'.html'
                ],
                // 视频路由
                ['pattern'=>'video','route'=>'video','suffix'=>'.html'],
                [
                    'pattern'=>'video/<page:\d+>',
                    'route'=>'video',
                    'defaults' => ['page'=>1],
                    'suffix'=>'.html'
                ],
                [
                    'pattern'=>'video/detail/<id:\d+>',
                    'route'=>'video/view',
                    'suffix'=>'.html'
                ],
                ['pattern'=>'video-play','route'=>'video/video-play','suffix'=>'.html'],
                // 产品路由
                ['pattern'=>'product','route'=>'product','suffix'=>'.html'],
                [
                    'pattern'=>'product/<page:\d+>',
                    'route'=>'product/index',
                    'defaults' => ['page'=>1],
                    'suffix'=>'.html'
                ],
                [
                    'pattern'=>'product/<type:\d+>/<page:\d+>',
                    'route'=>'product/index',
                    'defaults' => ['page'=>1,'type'=>1],
                    'suffix'=>'.html'
                ],
                [
                    'pattern'=>'product/detail/<id:\d+>',
                    'route'=>'product/view',
                    'suffix'=>'.html'
                ],
                // 搜索路由
                ['pattern'=>'search','route'=>'search','suffix'=>'.html'],
                [
                    'pattern'=>'search/<page:\d+>',
                    'route'=>'search/index',
                    'defaults' => ['page'=>1],
                    'suffix'=>'.html'
                ],
                ['pattern'=>'contact','route'=>'contact','suffix'=>'.html'],
                ['pattern'=>'about','route'=>'about','suffix'=>'.html'],
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>",
            ],
        ],
    ],
    'params' => $params,
];
