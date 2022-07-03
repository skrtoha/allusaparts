<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    //'layout' => 'basic',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@net' => '@vendor/net',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'etrf245t3245td1#F$%Yt#%y6#%^y%^yg56y45%^yg',
            'enableCsrfValidation' => false,
            'baseUrl' => '',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
                'asArray' => true,
                ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
            //'class' => 'yii\caching\DummyCache',
        ],
        'cacheApc' => [
            'class' => 'yii\caching\ApcCache',
        ],
        'dummyCache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'user' => [
            //'class' => 'yii\web\User',
            'identityClass' => 'app\models\Clients',
            'enableAutoLogin' => false,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'PHPMailer' => [
            'class' => 'app\models\PHPMailer',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            //'class'          => 'gulltour\phpmailer\Mailer',
            'messageConfig' => [
                'from' => ['bot@allamerican-parts.com' => 'bot'],
            ],
            'useFileTransport' => false,

            /*'viewPath'         => '@common/mail',
            'config'           => [
                'mailer'     => 'smtp',
                'host'       => 'mx1.autozap.ru',
                'port'       => '25',
                'smtpsecure' => 'ssl',
                'smtpauth'   => true,
                'username'   => 'support',
                'password'   => '6JRf5j9JH9l4',
            ],*/

            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'ssl://mx1.autozap.ru',
                'username' => 'support',
                'password' => '6JRf5j9JH9l4',
                'port' => '25',
                //'encryption' => 'ssl',
            ],
            /*'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.mail.com',
                'username' => 'bot@allamerican-parts.com',
                'password' => '#90xxuXYisLI',
                'port' => '465',
                'encryption' => 'ssl',
            ],*/
            /*'transport' => [

                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => 'strlelets60@yandex.ru',
                'password' => '5r4ewq321',
                'port' => '465',
                'encryption' => 'ssl',
            ],*/
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'page/<main:(.*)>' => 'page/main',
                'en/page/<main:(.*)>' => 'en/default/page',
                '<action:brands>' => 'site/ru<action>',
                '<action:brands>/<brand:(.*)>' => 'site/ru<action>',
                '<action:contacts>' => 'site/ru<action>',

                'en/brands/<brand:(.*)>' => 'en/default/brand',

                '<action:tester>' => 'site/<action>',

                '<action:terms_and_conditions_of_personal_data>' => 'site/<action>',
                '<action:cookie_policy>' => 'site/<action>',

                //SEND
                '<action:topostsend>' => 'site/<action>',
                '<action:sendcalc>' => 'site/<action>',

                '<module:\w+>/<controller:w+>/<action:\w+>' => '<module>/<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=> '<controller>/<action>',

            ],
        ],
    ],
    'modules' => [
        'en' => [
            'class' => 'app\modules\en\EnModule',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        //'allowedIPs' => ['95.47.180.225', '::1'],
        'allowedIPs'=>['*'],
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
        //'allowedIPs'=>['*'],
    ];
}

return $config;
