<?php

/********************************************************************************
Projects
********************************************************************************/
Route::get('hidden',['as'=>'hidden','uses'=>'HiddenController@index']);
Route::group(array('prefix' => 'hidden'), function(){
	Route::get('inhertance/me','HiddenController@inhertance_me');
	/********************************Porn Stars Search**************************************/
	Route::get('pornstars','HiddenController@pornstars');
	Route::get('pornstars/get/{page}/{q?}','HiddenController@pornstars_get');
	// Route::get('pornstars/pop','ProjectsController@pornstars_pop');	
	/********************************XXX**************************************/
	// Route::get('porn','ProjectsController@index_porn');
	// Route::get('porn/list','ProjectsController@porn_list');
	// Route::get('porn/operate','ProjectsController@porn_operate');
	// Route::get('porn/populate','ProjectsController@populate_db');
});
//*******************************************************************************


