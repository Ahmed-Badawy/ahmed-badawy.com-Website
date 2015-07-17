<?php
require("init.php");



//first we redirect them to the auth url
function go_to_auth_url($web_auth) {
    $authURL = $web_auth->start();
    header('Location: ' . $authURL);
    exit();
}
go_to_auth_url($web_auth);



