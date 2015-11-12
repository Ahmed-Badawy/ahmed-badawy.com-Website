<?php


$client_id = "AZpHylJAUL7cJVx0Zm_cLcj9D8Ssbsm8GJsWtkNUKLmkkRH48ppMm7b-BHNlr_mjpBqWoon9dq-kprL8";
$secret = "EIxpp6NaPKAR3juwh0PAdpumUxqcIobNJp0HMi9tarouE2e6drS4KBwGgtAcpcJtCw3HKaxjLIoxYfJK";

require('vendor/autoload.php');

use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;


$api = new ApiContext( new OAuthTokenCredential($client_id,$secret) );
$api->setConfig([
    'mode'=>'sandbox',
    'http.ConnectionTimeOut' => 30,
    'log.LogEnabled' => false,
    'log.FileName' => '',
    'log.LogLevel' => 'FINE',
    'validation.level' => 'log'
]);





function err($err){
    echo "<pre>";
    var_export($err);
    echo "</pre><hr>";
}