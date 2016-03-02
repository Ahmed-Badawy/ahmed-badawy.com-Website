<?php


Route::get('apis',['as'=>'apis','uses'=>'ApiController@index']);
Route::group(array('prefix' => 'api'), function(){

	Route::get('qr-gene/{text}','ApiController@qr_generator')->where('text', '.+');
// http://localhost/ahmed-badawy.com/api/qr-gene/google?size=200&padding=10
	Route::get('thumb/{src}','ApiController@return_img_thumb')->where('src', '.+');
// http://localhost/ahmed-badawy.com/api/thumb/projects/actors.jpg?width=500&height=700&save=true
	Route::get('captcha-gene/{text?}','ApiController@captcha_generator')->where('text', '.+');
// http://localhost/ahmed-badawy.com/api/captcha-gene/hello world?width=200&height=80&font=LETTERGOTHICSTD-BOLD.OTF
	Route::get('upc-gene/{text?}','ApiController@upc_generator')->where('text', '.+');
// http://localhost/ahmed-badawy.com/public/barcodegen-1d/html/image.php?filetype=PNG&dpi=73&scale=2&rotation=0&font_family=Arial.ttf&font_size=20&text=Ahmed Badawy&thickness=30&code=BCGcode39extended


	Route::get('qr-gene-view','ApiController@qr_generator_view');
	Route::get('thumb-view','ApiController@return_img_thumb_view');
	Route::get('captcha-view','ApiController@captcha_generator_view');
	Route::get('upc-view','ApiController@upc_generator_view');



	Route::any('send-post','ApiController@send_post_request');

	Route::any('send-get','ApiController@send_get_request');

	Route::post('data-types-converter','ApiController@data_type_converter');

	
});




