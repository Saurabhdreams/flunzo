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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'stripe' => [
        'secret' => '',
    ],

    /**
     * Social media login
     */
    'github' => [
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'https://www.flunzo.com/in/auth/github/callback',
    ],
    'linkedin' => [    
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'https://www.flunzo.com/in/auth/linkedin/callback'
    ],
    'google' => [    
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'https://www.flunzo.com/in/auth/google/callback'
    ],
    'facebook' => [    
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'https://www.flunzo.com/in/auth/facebook/callback'
    ],
    'twitter' => [    
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'https://www.flunzo.com/in/auth/twitter/callback'
    ],

    // Email marketing
    'mailjet' => [
        'key'    => "",
        'secret' => "",
    ]

];
