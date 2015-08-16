<?php



//Route::any('ng-temp/{template}','BaseController@ng_temp')->where('template', '.+');

// Route::get("login","CMS\CMSAdminController@getLogin");
// Route::get("register","CMS\CMSAdminController@getRegister");
// Route::get("dashboard","CMS\CMSAdminController@getDashboard");





// Route::post('cms-auth/do-login',"CMS\AuthController@DoLogin");
// Route::post('cms-auth/dologin',function(){
// 	die("hello");
// });
// Route::get('cms-auth/do-login',function(){
// 	die("Stop The World Here.");
// });



Route::controller("cms-auth","CMS\AuthController");
Route::controller("cms-chat","CMS\ChattingController");
Route::controller("cms-admin","CMS\CMSAdminController");



Route::controller("admin","AdminController");
Route::controller("/","ViewsController");


