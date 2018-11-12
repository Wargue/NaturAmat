<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/Naturamat/user/plugins/email/email.yaml',
    'modified' => 1542047173,
    'data' => [
        'enabled' => true,
        'from' => 'naturamat@hotmail.com',
        'from_name' => 'Naturamat',
        'to' => 'naturamat@hotmail.com',
        'to_name' => 'Naturamat',
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
