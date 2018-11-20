<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/Naturamat/user/config/plugins/email.yaml',
    'modified' => 1542654758,
    'data' => [
        'enabled' => true,
        'from' => 'gillet_l@hotmail.com',
        'from_name' => 'Laurent',
        'to' => 'gillet_l@hotmail.com',
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'ssl'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
