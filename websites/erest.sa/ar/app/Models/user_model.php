<?php


class User_model extends Eloquent {

	// public $table = "users";
	public $table = "registration_system_users";
	protected $guarded = array();
	public $timestamps = true;

	public function create_user($input){
		$create_array = [
			"username"  		=> $input['username'],
			"email"    			=> $input['email'],
			"is_confirmed"     	=> 1,
			"password"  => $this->hash_password($input['password']),
		];
//		dd($create_array);
//		return false;
		return $this->create($create_array);
	}

	protected function hash_password($password) {
		return password_hash($password, PASSWORD_BCRYPT);
	}
	protected function verify_password_hash($password, $hash) {
//		if($password == $hash) return true;
		// die($password."\n".$hash);
		return password_verify($password, $hash);
	}

	public function resolve_user_login($usernameOrEmail, $password) {
		$user = $this->where(['username'=>$usernameOrEmail])->first();
		if(!$user) $user = $this->where(['email'=>$usernameOrEmail])->first();
		if($user && $this->verify_password_hash($password, $user->password)) return $user;
		return false;
	}

	public function approve_login() {
		$update_array = array(
			'last_seen' => date('Y-m-j H:i:s'),
			'last_login' => date('Y-m-j H:i:s'),
		);
		return $this->update($update_array);
	}

	public function set_random_password() {
		$new_password = uniqid();
		$this->update(['password'=>$this->hash_password($new_password)]);
		return $new_password;
	}

	public function prepare_user_data($user){
		$user_data = new stdClass();
		$user_data->id 				= $this->id;
		$user_data->username 		= (string)$user->username;
		$user_data->email 			= (string)$user->email;
		$user_data->avatar 			= (string)$user->avatar;
		$user_data->is_admin 		= (bool)$user->is_admin;
		$user_data->last_seen 		= $user->last_seen;
		$user_data->last_login 		= $user->last_login;
		$user_data->is_confirmed 	= (bool)$user->is_confirmed;
		$user_data->is_locked 		= (bool)$user->is_locked;
		$user_data->is_deleted 		= (bool)$user->is_deleted;
		$user_data->created_at 		= $user->created_at;
		$user_data->updated_at 		= $user->updated_at;
		$user_data->is_logged_in 	= true;
		return $user_data;
	}


//	public function create_user($input){
//		$create_array = [
//			"first_name"=>$input['first_name'],
//			"last_name"=>$input['last_name'],
//			"password"=>$input['password'],
//			"email"=>$input['email'],
//			"website"=>$input['website'],
//			"address1"=>$input['address1'],
//			"address2"=>$input['address2'],
//			"zip_code"=>$input['zip_code'],
//			"city"=>$input['city'],
//			"country"=>$input['country'],
//			"phone"=>$input['phone'],
//		];
//		return $this->create($create_array);
//	}






}
