<?php namespace App\Http\Controllers;

class AsolController extends BaseController {


	public function admin_login_do(){
		$user_name = \Request::get('username');
		$password = \Request::get('password');
		$creditials = ["admin","admin"];
		// $creditials = ["asoladmin","admin456"];
		if($user_name==$creditials[0] && $password==$creditials[1]){
			return \Redirect::to("admin/contributors");
		}
		else return \Redirect::to("admin/login")->with("error","The Username/Password aren't correct");
	}





/**********************************************************************/







	public function add_product(){
		$img_file = \Request::file('upload_img');	
		$img_save_path = real_imgs_dir."asol/products";
		$img_name = $this->upload_file($img_file,$img_save_path);
		$input = \Request::all();
		// dd($input);
		$new_array = [
			"name"			=>			$input['name'],
			// "desc"			=>			$input['desc'],
			"img"			=>			$img_name,
			"priority"		=>			100,
		];
		$obj = new \products_model();
		$obj->create($new_array);
		return \Redirect::back();
	}












}
