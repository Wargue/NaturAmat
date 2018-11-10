<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/Naturamat/user/themes/customtheme/blueprints/portfolio.yaml',
    'modified' => 1541850959,
    'data' => [
        'title' => 'Gallery',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'images' => [
                            'type' => 'tab',
                            'title' => 'Images',
                            'fields' => [
                                'header.images' => [
                                    'name' => 'images',
                                    'type' => 'list',
                                    'label' => 'Images',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title',
                                            'help' => 'Image\'s title.'
                                        ],
                                        '.description' => [
                                            'type' => 'text',
                                            'label' => 'Description',
                                            'help' => 'Image\'s description.'
                                        ],
                                        '.thumbnail' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'label' => 'thumbnail'
                                        ],
                                        '.size' => [
                                            'type' => 'text',
                                            'label' => 'Dimension(hxL)',
                                            'help' => 'Dimension de la photo'
                                        ],
                                        '.hv' => [
                                            'type' => 'text',
                                            'label' => 'hor or ver',
                                            'help' => 'horizontal ou vertical'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
