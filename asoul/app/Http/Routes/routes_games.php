<?php


/*********************************************************************
Games
**********************************************************************/
Route::get('games',['as'=>'games','uses'=>'GamesController@index']);
Route::group(array('prefix' => 'games'), function(){
	Route::get('chess',"GamesController@chess");
	/********************************Maze1**************************************/
	Route::get('maze1',"GamesController@maze1");
	/********************************Text Image**************************************/
	Route::post('text-image/save',"GamesController@text_image_save");
	Route::get('text-image/download/{img_name}',"GamesController@text_image_download");
	Route::get('text-image/share/{img_name}/{title}',"GamesController@text_image_share");
	Route::get('text-image/{type?}',"GamesController@text_image");
});
/**********************************************************************/