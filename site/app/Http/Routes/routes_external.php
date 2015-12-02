<?php


/********************************************************************************
External
********************************************************************************/
Route::get('chrome-apps',['as'=>'chrome-apps','uses'=>'ExternalController@chrome_apps']);
//Route::group(array('prefix' => 'projects'), function(){
//	/********************************General**************************************/
//	Route::get('oil',['as'=>'oil','uses'=>'ProjectsController@oil']);
//	Route::get('bank',['as'=>'bank','uses'=>'ProjectsController@bank_profit_calc']);
//	Route::get('money-calc',['as'=>'money-calc','uses'=>'ProjectsController@money_calc']);

//});
//*******************************************************************************

