<?php


/*********************************************************************
Selling Manager
**********************************************************************/
	Route::controller('selling-manager', 'SellingManager\SellingManagerController');
/*********************************************************************/



/********************************************************************************
Projects
********************************************************************************/
Route::get('projects',['as'=>'projects','uses'=>'ProjectsController@index']);
Route::group(array('prefix' => 'projects'), function(){
	/********************************General**************************************/
	Route::get('oil',['as'=>'oil','uses'=>'ProjectsController@oil']);
	Route::get('bank',['as'=>'bank','uses'=>'ProjectsController@bank_profit_calc']);
	Route::get('money-calc',['as'=>'money-calc','uses'=>'ProjectsController@money_calc']);
	/********************************Consumtion**************************************/
	Route::get('electricity','ProjectsController@electricity_consumption');
	Route::get('water','ProjectsController@water_consumption');
	/********************************Site Thumbnail********************************/
	Route::get('site-thumbnail','ProjectsController@site_thumbnail');
	Route::get('site-thumbnail/generator/{link}','ProjectsController@site_thumbnail_generator')->where('link', '.+');;
	/********************************Video Book********************************/
	Route::get('video-book',['as'=>'video-book','uses'=>'ProjectsController@video_book']);
	/********************************Quran Project********************************/
	Route::get('quran',['as'=>'quran','uses'=>'ProjectsController@quran']);
	/********************************Dynamic Text**************************************/
	Route::get('dynamic',['as'=>'dynamic','uses'=>'ProjectsController@dynamic']);
	Route::get('dynamic/get',['as'=>'dynamic/get','uses'=>'ProjectsController@dynamic_get']);
	Route::post('dynamic/save',['as'=>'dynamic/save','uses'=>'ProjectsController@dynamic_save']);
	/********************************Dynamic Text 2**************************************/
	Route::get('dynamic2',['as'=>'dynamic2','uses'=>'ProjectsController@dynamic2']);
	Route::post('dynamic2/save',['uses'=>'ProjectsController@dynamic2_save']);
	/********************************Domain Search**************************************/
	Route::get('domain',['as'=>'domain','uses'=>'ProjectsController@domain']);
	Route::post('domain/search','ProjectsController@domain_search');
	/********************************Exam Generator**************************************/
	Route::get('exam-generator/create','ProjectsController@exam_generator_create_view');
	/********************************remote sign in********************************/
	Route::get('r-s-in',['as'=>'remote_sign_in','uses'=>'ProjectsController@socialite_access']);
	/********************************Currency**************************************/
	Route::get('currency',['as'=>'currency','uses'=>'ProjectsController@currency']);
	Route::get('currency/google-currency-calc/{from}/{to}/{amount?}','ProjectsController@google_currency_calc');
	/********************************Currency Advanced**************************************/
	Route::get('currency-advanced','ProjectsController@currency_advanced');
	Route::get('currency/get_exchange_rates','ProjectsController@get_exchange_rates');	
	/********************************Persentage**************************************/
	Route::get('persentage',['as'=>'persentage','uses'=>'ProjectsController@persentage']);
	Route::post('persentage/save',['as'=>'persentage/save','uses'=>'ProjectsController@persentage_save']);
	Route::get('persentage/list/{q?}',['as'=>'persentage/list','uses'=>'ProjectsController@persentage_list']);
	/********************************Units Converter**************************************/
	Route::get('converter',['as'=>'converter','uses'=>'ProjectsController@converter']);
	/********************************Social Id Analasys***************************************/
	Route::get('social-id',['as'=>'social-id','uses'=>'ProjectsController@social_id']);
	Route::get('social-id-citys-codes','ProjectsController@social_id_citys_codes');
	/*********************************Postal***************************************/
	Route::get('postal',['as'=>'postal','uses'=>'ProjectsController@postal_index']);
	Route::get('postal-codes-array','ProjectsController@postal_codes_array');
	Route::post('postaloffices/query-info','ProjectsController@postal_offices_query_info');
	/********************************Movies Manager**************************************/
	Route::get('movies',['as'=>"movies","uses"=>'MoviesController@movies_index']);
	Route::get('movies/list','MoviesController@movies_list');
	Route::get('movies/info','MoviesController@movies_info');
	// Route::get('movies/attachinfo','ProjectsController@attachinfo');
	// Route::post('movies/attachfolder','ProjectsController@attachfolder');
	// Route::post('movies/attach','ProjectsController@attach_movie');
	Route::get('movies/populate','MoviesController@populate_movies');
	Route::post('movies/update/fransh','MoviesController@movies_update_fransh');
	/********************************Actors Rate**************************************/
	Route::get('actors','ProjectsController@actors');
	Route::get('actors/get/{page}/{q?}','ProjectsController@actors_get');
	Route::post('actors/rate_star','ProjectsController@actors_rate');
	// Route::get('actors/pop','ProjectsController@pop_actors');
	/******************************CountDown***********************************/
	Route::get('countdown',['as'=>'countdown/index','uses'=>'ProjectsController@index_countDown']);
	Route::get('countdown/create',['as'=>'countdown/create','uses'=>'ProjectsController@create_countDown']);
	Route::post('countdown/save','ProjectsController@save_countDown');
	Route::get('countdown/list','ProjectsController@list_countDown');
	Route::get('countdown/{id}','ProjectsController@view_countDown');
	/*********************************ToDo List Generator************************************/
	Route::get('todo','ProjectsController@todo_index');
	Route::get('get-todos/{get_what}','ProjectsController@get_todos');
	Route::post('new-task','ProjectsController@new_task');
	Route::post('edit-task','ProjectsController@edit_task');
	Route::post('check-task','ProjectsController@check_task');
	Route::post('create-list','ProjectsController@create_list');
	Route::post('delete-task','ProjectsController@delete_task');
	Route::post('add-sub','ProjectsController@add_sub');
	Route::post('vote/{pram}','ProjectsController@vote');
	/*********************************Favorite Wesite Manager***************************************/
	Route::get('favorite','ProjectsController@favorite_index');
	Route::get('get-favorite/{get_what}','ProjectsController@get_favorite');
	Route::post('save-favorite/{save_what}','ProjectsController@save_favorite');
	Route::post('delete-favorite-site','ProjectsController@delete_favorite');
	Route::get('favorite/update-imgs','ProjectsController@update_sites_imgs');
	/*********************************Book Sharing System***************************************/
	Route::get('books',['as'=>'books','uses'=>'ProjectsController@books_view']);
	Route::post('books/new','ProjectsController@new_book');
	Route::any('books/download/{id}','ProjectsController@download_book');
	Route::get('books/delete/{id}','ProjectsController@delete_book');
	// Route::get('viewpdf','SiteController@pdf_viewer');
	/**********************************************************************/

	

	
	/********************************Dictionary**************************************/
	Route::get('dictionary','ProjectsController@dictionary_index');
	Route::get('dictionary/{op}','ProjectsController@dictionary_get');
	/********************************Recipes Sharing System**************************************/
	Route::get('recipes','ProjectsController@recipes_index');
	Route::post('recipes/create','ProjectsController@recipes_create');
	// Route::get('recipes/main','ProjectsController@recipes_main');
	// Route::get('recipes/new','ProjectsController@recipes_create');
	// Route::get('recipes/partials/search','ProjectsController@recipes_partials_search');
	//*******************************************************************************
});
//*******************************************************************************

