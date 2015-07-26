<?php namespace App\Http\Controllers;

class RegistrationController extends BaseController {

	// public function __construct(User $user){	
	// 	parent::__construct();		
	// 	$this->model = $user;
	// }


	public function index(){
		$data = [
			"route_info"=>\sr::common("regist"),
			"ng_app"=>"regist",
			"ng_body_controller"=>"app",
			'theme'=>$this->themes[4],
		];
		return $this->get_view('Projects.registration.index',$data);
		// return VM('projects.registration.index',$data,'bootstrap-watch');	
	}

	public function forgot(){
		$data = [
			'page_title'=>'Change Password',
			'page_desc'=>"this page's mession is to change the password.",
			'keywords'=>[],
			'theme'=>$this->themes[4],
		];
		return $this->get_view('Projects.registration.forgot',$data);
	}

	public function request_control(){
		Lset('rmsg','r');
		$input = Input::all()['new_user'];
		// dd($input);die;
		$output = $this->signup($input);	
		if($output == "success") return Redirect::route('login')->with("s-msg", t('1') );
		if($output == "validation fail") 
			return [$output,$this->errors];
			// return Redirect::route("register")
			// ->withInput()
			// ->withErrors($this->errors)
			// ->with('error_header', t('2') );
	}
	public function signup($input){
		if ($this->term_valid('new_user',$input)){
			$input = sani("new_user",$input); 
			// $user_obj = new User();
			// dd($user_obj::add());
		$user_obj = new User();
		$user = $user_obj->create($input);				
			// $user = User::add($input);
			dd($user);die;
			// $this->send_msg("aroutectivate_user",$input['email']);
			return 'success';
		}
		return 'validation fail';	
	}

	

	
	
	
}