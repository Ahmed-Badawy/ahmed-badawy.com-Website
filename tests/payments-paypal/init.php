<?php


$client_id = "AVTm8GWz8urpOtTHqQzTm7YfYn34jFADb7azg3FV6nB9vwdm1LILFODykGpYcpeY009WRAHdVldG2sL4";
$secret = "EAaubJp8OpPDiCzWKXI-7LoSd1fOLnlSrVAL6jhLd3KCCVnCPGjjs4sv6MVyMCqFz9P4stpWdHLanbcS";
$rediren_link = "http://ahmed-badawy.com/tests/payments-paypal/pay.php";


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