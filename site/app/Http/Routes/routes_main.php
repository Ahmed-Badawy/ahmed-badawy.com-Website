<?php


// Route::get('blog/{params?}','SiteController@blog')->where('params', '.*');
Route::any('ng-temp/{template}','BaseController@ng_temp')->where('template', '.+');


Route::get('blog',function(){
    if(Dev) return Redirect::to("http://localhost/blog2");
	return Redirect::to("http://ahmed-badawy.com/blog");
});

Route::get('/site/{any}',function($any){
    return Redirect::to(base_url."$any");
})->where('any', '.+');

Route::get('ecv','BaseController@test_email_view');



/********************************************************************************
  					Pages
********************************************************************************/
Route::get('/','PagesController@home');
Route::get('home','PagesController@home');

Route::get('ideas','PagesController@all_Ideas');

Route::get('cv',['as'=>'cv','uses'=>'PagesController@cv']);
Route::get('cv-brief',['as'=>'cv','uses'=>'PagesController@cv_application']);
Route::get('cv/download/{type}','PagesController@cv_download');
Route::post('cv/send','PagesController@send_cv');

Route::get ('contact','PagesController@get_contact');
Route::post('contact','PagesController@post_contact');
//*******************************************************************************


/*********************************************************************
Registration System
**********************************************************************/
Route::group(array('prefix' => 'registration'), function(){
	Route::get('index',['as'=>"regist",'uses'=>'RegistrationController@index']);
	Route::get('forgot','RegistrationController@forgot');
	Route::post('signup','RegistrationController@request_control');
});
/**********************************************************************/


Route::get('site-report/{operation}/{site_name}','SiteController@site_report');

Route::post('post-test',function(){
//    die("hello world");
    $input = \Request::all();
    dd($input);
});

Route::any("json-test/{get_what?}",function($get_what=null){
	$persons = [
		"persons"=>[
			[
          "id"=>1,
          "name"=>"ahmed",    
          "age"=>12,
          "height"=>190,
          "phone"=>01111,
          "img"=>"1.png"
      ],[
          "id"=>2,
          "name"=>"mohamed",  
          "age"=>40,
          "height"=>160,
          "phone"=>3040,
          "img"=>"2.png"
      ],[
          "id"=>3,
          "name"=>"ali",      
          "age"=>50,
          "height"=>180,  
          "phone"=>8080,
          "img"=>"3.png" 
      ],
    ],
    "company" => ["name"=>"spidro",'working_age'=>2],
    "layout"  => "normal"
	];


	$employees = '{
    "employees":[
	    {"firstName":"John", "lastName":"Doe"},
	    {"firstName":"Anna", "lastName":"Smith"},
	    {"firstName":"Peter", "lastName":"Jones"}
	]}';

	$chaios_data = '
{
    "pageName" : "page name is here",
   "pageInfo": {
         "pageName": "this is the page name",
         "pagePic": "http://example.com/content.jpg"
    },
    "posts": [
        {
              "post_id": "123456789012_123456789012",
              "actor_id": "1234567890",
              "picOfPersonWhoPosted": "http://example.com/photo.jpg",
              "nameOfPersonWhoPosted": "Jane Doe",
              "message": "Sounds cool. Can\'t wait to see it!",
              "likesCount": "2",
              "comments": [],
              "timeOfPost": "1234567890"
        },
		{
              "post_id": "123456789012_123456789012",
              "actor_id": "1234567890",
              "picOfPersonWhoPosted": "http://example.com/photo.jpg",
              "nameOfPersonWhoPosted": "Jane Doe",
              "message": "ok this is msg two",
              "likesCount": "2",
              "comments": [],
              "timeOfPost": "1234567890"
         }
    ]
}
	';

	if($get_what==null || $get_what=="persons"){
		return $persons;
	}elseif($get_what=="chaos"){
		return $chaios_data;
	}elseif($get_what=="employees"){
		return $employees;
	}

});






Route::any("xml-test/persons",function(){
  $output = '
<?xml version="1.0"?>
<persons>

  <person>
    <id>1</id>
    <name>person 1 name</name>
    <age>12</age>
    <height>150</height>
    <phone>01111</phone>
    <img>1.png</img>
  </person>
  <person>
    <id>5</id>
    <name>perons 2 name</name>
    <age>40</age>
    <height>190</height>
    <phone>01440</phone>
    <img>2.png</img>
  </person>

</persons>
  ';
  echo $output;
  return;
});





