<?php namespace App\Http\Controllers\Spidro;

use App\Http\Controllers\BaseController as BaseController;

class LoginController extends BaseController {


	public function login(){
		$data = [
			'route_info'=>\sr::common("projects_index"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("spidro.user_area.login",$data,'spidro'); 
	}
	public function socialite_login($outh_type){
		// $user_data = [
		// 	"site_type"=>$outh_type,
		// 	"site_id"=>112617558420458089489,
		// 	"email"=>"courtaks@yahoo.com",
		// 	"name"=>"ahmed badawy",
		// 	"avatar"=>get_it('site/logo.jpg')		
		// ];	
		// $data = [
		// 	'route_info'=>\sr::common("projects_index"),
		// 	'theme'=>$this->themes[0],
		// 	'user_data'=>$user_data
		// ];
		// return $this->get_view("spidro.user_area.show_data",$data,'spidro'); die;

		$user = \Socialize::with($outh_type)->user();
		$user_data = [
			"site_type"=>$outh_type,
			"site_id"=>$user->id,
			"email"=>$user->email,
			"name"=>$user->name,
			"avatar"=>$user->avatar
		];
		if(isset($user->user['url'])) $data["url"] = $user->user['url'];
		if(isset($user->user['gender'])) $data["gender"] = $user->user['gender'];
		if(isset($user->user['relationshipStatus'])) $data["relationshipStatus"] = $user->user['relationshipStatus'];
		
		$db_user = \spidro_users_model::create($user_data);
		\Session::put("user_data",$db_user);
		// dd($user_data);
		$data = [
			'route_info'=>\sr::common("projects_index"),
			'theme'=>$this->themes[0],
			'user_data'=>$user_data
		];
		return $this->get_view("spidro.user_area.show_data",$data,'spidro'); 
	}	




}
