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
        'client_id' => "763477644851880",
        'client_secret' => "bc95b21a7412901bc6e3aea58f5a4a9c",
        'redirect' => 'http://localhost/socialloginsystem/facebookresponse',
    ],

    'google' => [
        'client_id' => "713164360857-kdcqu6ag40lnjov9qgnh6h16om08qln1.apps.googleusercontent.com",
        'client_secret' => "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",
        'redirect' => 'http://localhost/socialloginsystem/googleresponse',
    ],

];
