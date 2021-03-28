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
                ['pattern'=>'contact','route'=>'about/contact','suffix'=>'.html'],
                ['pattern'=>'history','route'=>'about/history','suffix'=>'.html'],
                ['pattern'=>'news','route'=>'news/index','suffix'=>'.html'],
                [
                    'pattern'=>'news/<page:\d+>',
                    'route'=>'news/index',
                    'defaults' => ['page'=>1],
                    'suffix'=>'.html'
                ],
                [
                    'pattern'=>'news/<type:\d+>/<page:\d+>',
                    'route'=>'news/index',
                    'defaults' => ['page'=>1,'type'=>1],
                    'suffix'=>'.html'
                ],
                [
                    'pattern'=>'news/detail/<id:\d+>',
                    'route'=>'news/view',
                    'suffix'=>'.html'
                ],
                ['pattern'=>'contact','route'=>'site/contact','suffix'=>'.html'],
                ['pattern'=>'aivr','route'=>'aivr/index','suffix'=>'.html'],
                ['pattern'=>'ai','route'=>'aivr/ai','suffix'=>'.html'],
                ['pattern'=>'vr','route'=>'aivr/vr','suffix'=>'.html'],
                ['pattern'=>'store','route'=>'store','suffix'=>'.html'],
                ['pattern'=>'business','route'=>'business/index','suffix'=>'.html'],
                ['pattern'=>'about','route'=>'about','suffix'=>'.html'],
                ['pattern'=>'design','route'=>'design/index','suffix'=>'.html'],
                ['pattern'=>'soft','route'=>'soft/index','suffix'=>'.html'],
                ['pattern'=>'video-play','route'=>'soft/video-play','suffix'=>'.html'],
                ['pattern'=>'say','route'=>'design/say','suffix'=>'.html'],
                ['pattern'=>'result','route'=>'design/result','suffix'=>'.html'],
                ['pattern'=>'soft','route'=>'source/soft','suffix'=>'.html'],
                ['pattern'=>'video','route'=>'source/video','suffix'=>'.html'],
                ['pattern'=>'video/list/api','route'=>'soft/video-list'],
                ['pattern'=>'online','route'=>'site/online','suffix'=>'.html'],
                ['pattern'=>'tiyan','route'=>'site/tiyan','suffix'=>'.html'],
                ['pattern'=>'cloud','route'=>'cloud-vr/index','suffix'=>'.html'],
                ['pattern'=>'cloud/vr','route'=>'cloud-vr/view','suffix'=>'.html'],
                ['pattern'=>'cloud/api','route'=>'cloud-vr/soft'],
                ['pattern'=>'cloud/mobile/api','route'=>'cloud-vr/mobile'],
                ['pattern'=>'cloud/message/api','route'=>'cloud-vr/message'],
                ['pattern'=>'offer/login','route'=>'offer/login','suffix'=>'.html'],
                ['pattern'=>'offer/login/api','route'=>'offer/login'],
                ['pattern'=>'offer/attributeByTemplateId/api','route'=>'offer/attribute-by-template-id'],
                ['pattern'=>'offer/houseTypes/api','route'=>'offer/house-types'],
                ['pattern'=>'offer/createProjectNum','route'=>'offer/create-project-num','suffix'=>'.html'],
                ['pattern'=>'offer/createProjectNum/api','route'=>'offer/create-project-num'],
                ['pattern'=>'offer/updateProjectNum','route'=>'offer/update-project-num','suffix'=>'.html'],
                ['pattern'=>'offer/updateProjectNum/api','route'=>'offer/update-project-num'],
                ['pattern'=>'offer/villageStyle/api','route'=>'offer/village-style'],
                ['pattern'=>'offer/delete/api','route'=>'offer/del-project-num'],
                ['pattern'=>'offer/projectNumList/api','route'=>'offer/project-num-list'],
                ['pattern'=>'offer/createExcelUrl/api','route'=>'offer/create-excel-url'],
                ['pattern'=>'offer','route'=>'offer/index','suffix'=>'.html'],
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>",
            ],
        ],
    ],
    'params' => $params,
];
