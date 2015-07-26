<?php 


$cpanel_admin_name = "courtaks";
//$cpanel_admin_name = "osoulsa";


//to determine if it's development or production. true if Development OR false if Production:-
$whitelist = array(
    '127.0.0.1',
    '::1'
);
if(false){												//Force Mode
	define('Dev', true);
	define('DB', $cpanel_admin_name."_osoul_ar");
	define('DB_USER', "root");
	define('DB_PASS', "");
}elseif(!isset($_SERVER['SERVER_ADDR'])
			|| in_array($_SERVER['SERVER_ADDR'], $whitelist)){ 	//in development
	define('Dev', true);
	define('DB', $cpanel_admin_name."_osoul_ar");
	define('DB_USER', "root");
	define('DB_PASS', "");
}elseif(!in_array($_SERVER['SERVER_ADDR'], $whitelist) ){ 	//in production
	define('Dev', false);
	define('DB', $cpanel_admin_name."_osoul_ar");
	define('DB_USER', "courtaks_admin");
	define('DB_PASS', "159357Bad");
}


	define("CREATE_THUMBS",true);
	
//	define('LOAD_FONTS', !Dev);
	define('LOAD_FONTS', true);

	define('REMOTE_SITE_URL', "http://ahmed-badawy.com/_osoul.sa/ar/");



	$base_url = (Dev) ?  "localhost/ahmed-badawy.com/_osoul.sa/ar/" : "ahmed-badawy.com/_osoul.sa/ar/";
	define('base_url', "http://".$base_url );
	define('base_url_without_http', $base_url );

	$public_dir = base_url."public/";
	define('public_dir', $public_dir );

	$theme_dir = public_dir."site-files/";
	define('theme_dir', $theme_dir );

	$imgs_dir = public_dir."site-imgs/";
	define('imgs_dir', $imgs_dir );

	$real_imgs_dir = public_path()."/site-imgs/";
	define('real_imgs_dir', $real_imgs_dir );


	define('SITE_NAME', "ahmed-badawy.com" );
	define('DEFAULT_LAYOUT', "bootstrap-watch" );

	$v_num = (Dev) ? rand(1,50000) : 3;
	define('VersionNumber', "?v=".$v_num );





	function social($key){
		$social_const = [
			"my_phone_1" 	=>	"01111988246",
			"my_phone_2" 	=>	"01028999810",
			"my_email_1"	=>	"info@ahmed-badawy.com",
			"my_email_2"	=>	"admin@ahmed-badawy.com",
			"my_email_3"	=>	"admin@site.ahmed-badawy.com",

			"facebook" 		=>	"https://www.facebook.com/Ahmed.Badawy.Elsaid",
			"twitter" 		=>	"https://twitter.com/ahmed_badawy_x",
			"google-plus"	=>	"https://plus.google.com/u/0/112617558420458089489/about",
			"github"		=>	"https://github.com/ahmed-badawy",
			"pinterest"		=>	"http://www.pinterest.com/ahmedbadawyelsa/",
			"linkedin"		=>	"https://www.linkedin.com/profile/view?id=317402952",
			"instagram"		=>	"http://instagram.com/a7med.badawy",
			"xing"			=>	"https://www.xing.com/profile/ahmed_badawy7",
			"vk"			=>	"http://vk.com/id312885906",
			"reddit"		=>	"https://www.reddit.com/user/courtaks",
			"tumblr"		=>	"http://ahmed-badawy-personal.tumblr.com",
			"youtube"		=>	"",
		];
		return $social_const[$key];
	}
	


//die("hello");

