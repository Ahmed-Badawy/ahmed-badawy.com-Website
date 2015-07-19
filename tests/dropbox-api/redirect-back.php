<?php
require("init.php");



list($accessToken) = $web_auth->finish($_GET);

var_dump($accessToken);


$client = new \Dropbox\Client($accessToken,$app_name,'UTF-8');
try{
	$user_info = $client->getAccountInfo();
	var_dump( $client->getAccountInfo() );
} catch(Dropbox\Exception_InvalidAcessToken $e){
	die("not Authenticated");
}	

out($user_info);


