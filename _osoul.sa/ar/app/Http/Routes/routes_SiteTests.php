<?php




/********************************************************************************
SiteTests
********************************************************************************/
Route::get('site-tests',['as'=>'site-tests','uses'=>'SiteTestsController@api_tests']);
Route::group(array('prefix' => 'site-tests'), function(){
	Route::any('captcha','SiteTestsController@captcha');
	Route::any('facelogin','SiteTestsController@facelogin');
	Route::any('facetools','SiteTestsController@facebook');
	Route::any('ip','SiteTestsController@ip_location');
	Route::any('locator','SiteTestsController@map_generator');
	Route::any('time','SiteTestsController@time');
	Route::any('twitter','SiteTestsController@twitter');
	Route::any('google','SiteTestsController@google');
	Route::any('forecast','SiteTestsController@weather');
	Route::any('comments','SiteTestsController@comments');
});
//*******************************************************************************


/********************************************************************************
  					APIs
********************************************************************************/
// Route::get('api_index',['as'=>'api_index','uses'=>'SiteController@api_index']);
// Route::group(array('prefix' => 'tests'), function(){
// 	Route::any('captcha','SiteController@captcha');
// 	Route::any('facelogin','SiteController@facelogin');
// 	Route::any('facetools','SiteController@facebook');
// 	Route::any('ip','SiteController@ip_location');
// 	Route::any('locator','SiteController@map_generator');
// 	Route::any('time','SiteController@time');
// 	Route::any('twitter','SiteController@twitter');
// 	Route::any('google','SiteController@google');
// 	Route::any('forecast','SiteController@weather');
// 	Route::any('comments','SiteController@comments');
// });
//*******************************************************************************