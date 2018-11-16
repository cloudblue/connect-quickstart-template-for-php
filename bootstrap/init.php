<?php

return [
    'configuration' => [
        'type' => '\Connect\Config',
        'source' => dirname(__DIR__) . '/config.json'
    ],
    'providers' => [

    ],
    'handlers' => [
        'requests' => [
            'suspend' => null,
            'resume' => null,
            'purchase' => '\App\Handlers\Requests\PurchaseRequestHandler',
            'cancel' => null,
            'change' => null,
            'test' => null
        ],
        'actions' => [
            'sso' => ['GET', '/sso', '\App\Handlers\Actions\SSOActionHandler'],
        ]
    ]
];