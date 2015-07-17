<?php
require("init.php");



list($accessToken) = $web_auth->finish($_GET);

var_dump($accessToken);


$client = new \Dropbox\Client($accessToken,$app_name,'UTF-8');
$user_info = $client->getAccountInfo();

out($user_info);


