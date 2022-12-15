<?php

return [
    'services' => [
        'array' => ['latest_rates' => []],
        'fixer' => ['access_key' => env('FIXER_ACCESS_KEY')],
        'coinlayer' => ['access_key' => env('COINLAUER_ACCESS_KEU')],
        'forge' => ['api_key' => env('FORGE_API_KEY')],
        'currency_data_feed' => ['api_key' => env('CURRENCY_DATA_FEED_API_KEY')],
        'abstract_api' => ['api_key' => env('ABSTRACT_API_KEY')],
    ],
];
