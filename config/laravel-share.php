<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    |
    | Specify the base uri for each service.
    |
    |
    |
    */

    'services' => [
        'facebook' => [
            'uri' => 'https://www.facebook.com/sharer/sharer.php?u=',
        ],
        'linkedin' => [
            'uri' => 'http://www.linkedin.com/shareArticle',
            //'extra' => ['mini' => 'true']
        ],
        'twitter' => [
            'uri' => 'https://twitter.com/intent/tweet',
            //'text' => 'Default share text'
        ],
        'snapchat' => [
            'uri' => 'https://www.snapchat.com/add/username?',
            //'text' => 'Default share text'
        ],
        'slack' => [
            'uri' => 'http://s7.addthis.com/static/slack.html?shareURL=',
            //'text' => 'Default share text'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Font Awesome
    |--------------------------------------------------------------------------
    |
    | Specify the version of Font Awesome that you want to use.
    | We support version 4 and 5.
    |
    |
    */

    'fontAwesomeVersion' => 4,
];
