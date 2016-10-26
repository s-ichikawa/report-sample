<?php

$env = new \Dotenv\Dotenv(__DIR__);
$env->load();

return [
    'environment' => getenv('APP_ENV'),
    'app_name'    => 'report_sample',
    'timezone' => 'Asia/Tokyo',

    'aws' => [
        'access_key' => getenv('AWS_ACCESS_KEY'),
    ],

    'log' => [
        'path'  => __DIR__ . '/logs/app.log',
        'level' => getenv('APP_ENV') === 'production' ? 'info' : 'debug',
    ],
];
