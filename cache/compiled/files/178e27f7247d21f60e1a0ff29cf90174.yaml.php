<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/Naturamat/user/config/site.yaml',
    'modified' => 1542217784,
    'data' => [
        'title' => 'Naturamat',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Laurent Gillet',
            'email' => 'gillet_l@hotmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
