<?php

require('vendor/autoload.php');

$app_id = "1689594621324254";
$app_secret = "2a3c84637700b7d8971b1309dfb9120c";
$app_name_space = "testing_php_sdk";




//use Facebook\HttpClients\FacebookHttpable;
//use Facebook\HttpClients\FacebookCurl;
//use Facebook\HttpClients\FacebookCurlHttpClient;
//use Facebook\Entities\AccessToken;
//use Facebook\Entities\SignedRequest;
//use Facebook\FacebookSession;
//use Facebook\FacebookSignedRequestFromInputHelper;
//use Facebook\FacebookCanvasLoginHelper;
//use Facebook\FacebookRedirectLoginHelper;
//use Facebook\FacebookRequest;
//use Facebook\FacebookResponse;
//use Facebook\FacebookSDKException;
//use Facebook\FacebookRequestException;
//use Facebook\FacebookOtherException;
//use Facebook\FacebookAuthorizationException;
//use Facebook\GraphObject;
//use Facebook\GraphUser;
//use Facebook\GraphSessionInfo;




    $facebook = FacebookSession::setDefaultApplication($app_id,$app_secret);
    $helper = new FacebookCanvasLoginHelper();
    try {
        $session = $helper->getSession();
    } catch (FacebookRequestException $ex) {
        echo $ex->getMessage();
    } catch (\Exception $ex) {
        echo $ex->getMessage();
    }
    if ($session) {
        try {
            die("got here");
//             $request = new FacebookRequest($session, 'GET', '/me');
//             $response = $request->execute();
//             $me = $response->getGraphObject();
//             echo $me->getProperty('name');
        } catch(FacebookRequestException $e) {
            echo $e->getMessage();
        }
    } else {
        $helper = new FacebookRedirectLoginHelper("https://apps.facebook.com/$app_name_space/");
        $auth_url = $helper->getLoginUrl( ['email'] );
        echo "<script>window.top.location.href='".$auth_url."'</script>";
    }














