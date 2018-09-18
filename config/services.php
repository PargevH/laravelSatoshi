<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '381485562076-98un8mn80khsdleu04csodcjet12d36k.apps.googleusercontent.com',
        'client_secret' => 'OMQ087ewin8jANgwdopmB3Cp',
        'redirect' => 'http://laravelsat.com/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '1590739881030344',
        'client_secret' => 'adcba35d77c680e39125d82b4b9ef1df',
        'redirect' => 'http://http://laravelsat.com/auth/facebook/callback',

    ],

    'twitter' => [
        'client_id' => 'tCnLWaFUbuQyinHST7udMpvSm',
        'client_secret' => 'WHwEI6vq6O9DQ4QjDzhQdfbR46myqK8jyG1JsQnY0iF9i9mZXb',
        'redirect' => 'http://http://laravelsat.com/auth/twitter/callback',
        
    ],

];
