<?php

return [
    'mod_auth' => [
        'name' => 'Auth',
        'type' => 'module',
        'providers' => [
            Mods\Auth\AuthServiceProvider::class,
        ],
        'aliases' => [
        ],
        'depends' => [
        ],
        'autoload' => [
            'psr-4' => [
                'Mods\\Auth\\' => realpath(__DIR__.'/src/')
            ]
        ]
    ]
];
