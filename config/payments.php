<?php
return [

    'default_driver' => 'IPay',

    'gateways' => [
        'unipay' => [
            'merchantId' => env('UNIPAY_MERCHANT_ID'),
            'secretKey' => env('UNIPAY_SECRET_KEY'),
        ],
        'ipay' => [],
    ]
];
