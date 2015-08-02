<?php


// Route::get('/',function(){
// 	if (Auth::check()) return "welcome back, ".Auth::user()->username;
// 	return "hi guest <a href='login'>login with github</a>";
// });

Route::get('remote-auth/{outh_type}',"Auth\AuthController@remote_auth");
// Route::get('remote-auth-back/{outh_type}',"Auth\AuthController@remote_auth_back");
Route::get('remote-auth-back/{outh_type}',"Spidro\LoginController@socialite_login");



Route::get('website-check/{website_name}',function(){
	$json = [
		"status"	=>	true,
		"working"	=>	true,
		"destroy"	=>	false,
	];
	return $json;
});




	require("Routes/routes_main.php");
	require("Routes/routes_projects.php");
	require("Routes/routes_hidden.php");
	require("Routes/routes_apis.php");
	require("Routes/routes_SiteTests.php");
	require("Routes/routes_spidro.php");
	require("Routes/routes_games.php");
	// require("Routes/routes_.php");



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
