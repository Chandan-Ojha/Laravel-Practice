<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '584931646475615',
        'client_secret' => 'a1d5e501822f38f854250a85618d92ee',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ], 

    'google' => [
        'client_id' => '821339792321-thmuabjdg7t5i4h32re7q08qsr6trep5.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'github' => [
        'client_id' => '2c2b54e56a19bd7943e9',
        'client_secret' => '1dca7b8fbbb2f1f19021708035b044c9bbf8f146',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

];
