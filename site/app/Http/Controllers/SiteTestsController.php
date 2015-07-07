<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SiteTestsController extends BaseController {

/********************************************************************************
API Tests  					
********************************************************************************/
	public function api_tests(){
		$data = [
			'route_info'=>\sr::common("siteTests_index"),
			'theme'=>$this->themes[4]
		];		
		return $this->get_view('SiteTests.index',$data);	
	}

	public function render_view($page,$title,$theme_num){
		$data =[
				'route_info'=>\sr::siteTests($page),
				'theme'=>$this->themes[$theme_num]
		];
		// err($data);
		// $data= (in_array($page, array_keys($api_arr))) ? $api_arr[$page] : $api_arr['default'];
		return $this->get_view('SiteTests.'.$page,$data);
	}

	public function facelogin(){return $this->render_view('facebook-login','Facebook Login',0); }
	public function facebook(){return $this->render_view('facebook-tools','Facebook',0); }
	public function twitter(){return $this->render_view('twitter','Twitter SDK Testing',0); }
	public function google(){return $this->render_view('google-plus','Google Plus',0); }
	public function currency(){return $this->render_view('currency','',4); }	
	public function captcha(){return $this->render_view('captcha','Google Captcha',0); }
	public function ip_location(){return $this->render_view('ip_location','Ip Location',0); }
	public function map_generator(){return $this->render_view('map_generator','Map Generator',0); }
	public function time(){return $this->render_view('time','Time API Testing',0); }
	public function weather(){return $this->render_view('weather','Weather API Testing',0); }
	public function comments(){return $this->render_view('discus','Commenting API',0); }

//*******************************************************************************
	








	public function blog($pram=null){
		return "hi";
		return Request::segment(3);
	}
	
	public function send_me_email(){
		$data = [
				'msg1' => 'this is msg 1',
				'msg2' => 'this is msg 2'
		];
		Mail::send('emails.welcome', $data, function($message){
			$message->from('courtaks@hotmail.com', 'site');		
			$message->to('courtaks@yahoo.com', 'Courtaks')->subject('Welcome!');
		});
		// err();
		die("Got here boy...");
	}




	public function test(){
		$data = [
			'page_title'=>'API Tests',
			'page_desc'=>"Just Testing Diffrent APIs & SDKs",
			'page_img' => imgs_dir."api/api.jpg",
			'theme'=>$this->themes[4],
		];		
		// return $this_('test',$data);	
	}



	public function site_report($operation,$site_name){
		$all_sites = ["ahmed-badawy.com","spidro.com"];
		$valid_sites = ["ahmed-badawy.com","spidro.com"];
		if($operation=="check_validaty"){
			$options["valid"]= (in_array($site_name,$valid_sites)) ? true : false;
		}
		return $options;
	}

	
}
