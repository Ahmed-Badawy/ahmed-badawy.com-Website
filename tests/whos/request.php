<?php




//First install unirest

// require_once "/path/to/unirest-php/lib/Unirest.php";
require_once "vendor/mashape/unirest-php/src/Unirest.php";

$response = Unirest\Request::get("https://jsonwhois.com/api/v1/whois", 

   array(
    "Accept" => "application/json",
    // "Authorization" => "Token token=<Api Key>"
    "Authorization" => "Token token=f9efccf4cc7b5f311858e53379c319a2"
   ),

   array(
       "domain" => "erest.sa"
   )

);

$data = $response->body; // Parsed body


$obj_vars = get_object_vars($data);

if($obj_vars['status']=="status") echo "here";
else echo "not here";


echo "<hr>";

echo "<pre>";
var_export($obj_vars);
echo "</pre>";







