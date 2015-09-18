<?php

require('vendor/autoload.php');

$app_id = "1689594621324254";
$app_secret = "2a3c84637700b7d8971b1309dfb9120c";
$app_name_space = "testing_php_sdk";





$fb = new Facebook\Facebook([
    'app_id' => $app_id,
    'app_secret' => $app_secret,
    'default_graph_version' => 'v2.2',
]);












