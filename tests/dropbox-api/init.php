<?php

use Dropbox\AppInfo;
use Dropbox\ArrayEntryStore;
use Dropbox\WebAuth;

require("vendor/autoload.php");


function out($var){ echo "<hr><pre>".var_export($var,true)."</pre><hr>"; }



$dropbox_key = "n8jrvnyo92v9k07";
$dropbox_secret = "u8hwenkfefb6wp3";
$app_name = "ahmedBadawyApp/1.0";
$redirect_uri = "https://ahmed-badawy.com/tests/dropbox-api/redirect-back.php";



$app_info = new AppInfo($dropbox_key,$dropbox_secret);


// Store CSRF token
$csrfTokenStore = new ArrayEntryStore($_SESSION,'dropbox-auth-csrf-token');


//define auth details
$web_auth = new WebAuth($app_info,$app_name,$redirect_uri,$csrfTokenStore);





