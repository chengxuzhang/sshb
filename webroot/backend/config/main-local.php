<?php
$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'SyKQiTdZsX2UgxZmx4B7shGF7orp5tpw',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'crud' => [ //生成器名称
                'class' => 'backend\giitemp\crud\Generator',
                'templates' => [ //设置我们自己的模板
                    'myCrud' => '@backend/giitemp/crud/default',
                ]
            ]
        ],
    ];
}

return $config;
