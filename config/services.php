<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '962617307188894',
        'client_secret' => '98c13b7a6d04e11bd9f6370efe5d067f',
        'redirect' => 'http://knot.dev/account/facebook',
    ],
    'google' => [
        'client_id' => '987247622433-237aho6obi8s49oj6nvb81a002aqnlf9.apps.googleusercontent.com',
        'client_secret' => '4_r99v-6Tyo4Xr6GG75Q6SZe',
        'redirect' => 'http://knot.dev/account/google',
    ],
    'twitter' => [
        'client_id' => 'IGaQwaYw65EEXi8rCwNJsbSjO',
        'client_secret' => '6kBrPAuVTMPs0guyK0kuSjmQT0fGRt0N0ljYOX7pQL4LYq9UUQ',
        'redirect' => 'http://knot.dev/account/twitter',
    ],

];
