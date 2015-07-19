<?php


// Route::get('/',function(){
// 	if (Auth::check()) return "welcome back, ".Auth::user()->username;
// 	return "hi guest <a href='login'>login with github</a>";
// });

// Route::get('remote-auth/{outh_type}',"Auth\AuthController@remote_auth");
// // Route::get('remote-auth-back/{outh_type}',"Auth\AuthController@remote_auth_back");
// Route::get('remote-auth-back/{outh_type}',"Spidro\LoginController@socialite_login");




	require("Routes/routes_main.php");
	// require("Routes/routes_projects.php");
	// require("Routes/routes_hidden.php");
	// require("Routes/routes_apis.php");
	// require("Routes/routes_SiteTests.php");
	// require("Routes/routes_spidro.php");
	// require("Routes/routes_games.php");
	// // require("Routes/routes_.php");



// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);






Route::get('/',"AsolController@index");
Route::get('home',"AsolController@index");
Route::get('product',"AsolController@product");
Route::get('about-us',"AsolController@about_us");
Route::get('contributor',"AsolController@contributor");
Route::get('structure',"AsolController@structure");
Route::get('contact',"AsolController@contact");
Route::get('career',"AsolController@career");

Route::get('admin',
	function(){
		return \Redirect::to("admin/contributors");
	}
);

Route::get('admin/login',"AsolController@admin_login_view");
Route::post('admin/login',"AsolController@admin_login_do");

Route::get('admin/{type}',"AsolController@admin_panel");
Route::post('admin/add-contributer',"AsolController@add_contributer");
Route::get('admin/delete-contributer/{id}',"AsolController@delete_contributer");
Route::post('admin/add-product',"AsolController@add_product");
Route::get('admin/delete-product/{id}',"AsolController@delete_product");
Route::post('admin/add-structure',"AsolController@add_structure");
Route::post('admin/add-contact',"AsolController@add_contact");
Route::post('admin/add-career',"AsolController@add_career");

Route::get('developer',"AsolController@developer");






