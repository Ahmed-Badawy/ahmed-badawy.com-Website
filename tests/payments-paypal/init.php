<?php


$client_id = "ATXchyPIAPUZsaLTry4unaXsckz2SSCv1YG9IVLZhg2njw8p70-oNKRcxS_e7RlmdLrJSCxSCVlTo9i9";
$secret = "ECDF0PA1qELf6OzEC-JpxJp93hJ46Kn_cL3-joegYyMIgBMCCDZGKFLSCrCj0KgKBSfNP-abw_KmSgyG";
$rediren_link = "https://ahmed-badawy.com/tests/payments-paypal/pay.php";



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