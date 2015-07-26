<?php


/*********************************************************************
Spidro System
**********************************************************************/
Route::group(['prefix' => 'spidro'], function(){

	Route::get('/',['as'=>"spidro/home",'uses'=>'Spidro\HomeController@one_page']);


	Route::get('login',['as'=>"spidro/login",'uses'=>'Spidro\LoginController@login']);
	Route::post('socialite/login',['as'=>"socialite/login",'uses'=>'Spidro\LoginController@socialite_login']);

	Route::get('ask',['as'=>"ask",'uses'=>'Spidro\AskController@ask']);
	Route::get('ask/city/{city?}','Spidro\AskController@city');
    Route::get('ask/new-ad-view','Spidro\AskController@new_ad_view');
    Route::get('ask/new-ad-view/{cate}','Spidro\AskController@new_ad_view_cate');
    Route::get('ask/new-ad-panel/{cate}/{sub1}','Spidro\AskController@new_ad_panel');

    Route::post('save-ad',['as'=>"save-ad",'uses'=>'Spidro\AskController@save_ad']);

	Route::get('view-ads','Spidro\AskController@view_ads');
});
/**********************************************************************/




