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
        'domain' => 'site.ahmed-badawy.com',
        'secret' => 'key-9b21dce1ef9627761495e8313fa741bc',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],




//socialite
    'github' => [
        'client_id' => '6597374d58ce50a66acb' ,
        'client_secret' => '65cb7b9c09e5a935d15df71d9806d19ef14fbb87' ,
        'redirect' => 'http://ahmed-badawy.com/site/remote-auth-back/github'
    ],
    'facebook' => [
        'client_id' => '715112605276746' ,
        'client_secret' => 'd6b5b515e3be93b40c6adc6e38802955' ,
        'redirect' => 'http://ahmed-badawy.com/site/remote-auth-back/facebook'
    ],
    'twitter' => [
        'client_id' => 'tOXtwe6c4Aeod5S7ErXsOiBzy' ,
        'client_secret' => 'wX5xozq6QumuRBDSIxJj8rFjcHd8EZSQlIFcQfawarJErmebEG' ,
        'redirect' => 'http://ahmed-badawy.com/site/remote-auth-back/twitter'
    ],
    'google' => [
        'client_id' => '59375772929-utaovn3nfspt9hgd55ddjida6gj85lv2.apps.googleusercontent.com' ,
        'client_secret' => '1j9ilJq4fXbucndZ0ixBLfd5' ,
        'redirect' => 'http://ahmed-badawy.com/site/remote-auth-back/google'
    ],  
//------------------------------------------------------------------




];
