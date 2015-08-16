<?php

namespace App\Http\Controllers\CMS;


class AuthController extends CMSProviderController{

    public function __construct(){      
        $this->user_obj = new \User_model();
        parent::__construct();
    }

/*****************************************************
 **  Registration System
 *****************************************************/
    public function getLogin(){
        if(is_logged_in()) return redirect("cms-admin/dashboard");
        return view("CMS.Admin.registration.login");
    }
    public function getRegister(){
        if(is_logged_in()) return redirect("cms-admin/dashboard");
        return view("CMS.Admin.registration.login");
    }

    public function postDoRegister(){
        $custom_errors = [];
        $input = \Request::all();
        if(!isset($input['username'])) $input['username'] = $input['first_name']."_".$input['last_name'];
        $rules = [
            'username' => 'required|min:4|unique:registration_system_users',
            'email' => 'required|email|min:5|unique:registration_system_users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation'=> 'required|min:6'
        ];
        $validator = \Validator::make($input,$rules);
        if($validator->fails()){
            return \Redirect::back()->withErrors($validator)->withInput();
        }
//        dd($input);
        $obj = new \User_model();
        if($user = $obj->create_user($input)){
            $this->add_user_to_clients($input);
            $this->_send_confirmation_msg($user->id,$user->email);
            $custom_errors[] = 'Please Confirm this account from your email. we sent a confirmation message to your email.';
            return \Redirect::to('cms-auth/custom-login')->with(["custom_errors"=>$custom_errors]);
        }else{
            $custom_errors[] = "Sorry! There Was an error.";
            return \Redirect::back()->with('custom_errors',$custom_errors)->withInput();
        }
    }


    public function postDoLogin(){
        // dd('here');
        $custom_errors = [];
        $input = \Request::all();
        $rules = array(
            'usernameOrEmail'    => 'required',
            'password' => 'required|alphaNum|min:6'
        );
        $validator = \Validator::make($input,$rules);
        if ($validator->fails()) {
            dd('here');
            return \Redirect::back()->withErrors($validator)->withInput();
        } else {
            $obj = new \User_model();
            if($user = $obj->resolve_user_login( $input['usernameOrEmail'] , $input['password'] )){
                if(!$user->is_confirmed){
                    $this->_send_confirmation_msg($user->id,$user->email);
                    $custom_errors[] = 'Please Confirm this account from your email. we sent a new confirmation message to your email.';
                }
                if($user->is_deleted)   $custom_errors[] = 'this user has been deleted. please contact the adminstration.';
                if($user->is_locked)    $custom_errors[] = 'this user is locked by the admin. please contact the adminstration';
                if(empty($custom_errors)){
                    $user->approve_login();
                    \Session::put('user_data',$obj->prepare_user_data($user));
                    // dd("here");
                    return \Redirect::to('cms-admin/dashboard');
                }else return \Redirect::back()->with(['custom_errors'=>$custom_errors ])->withInput();
            }else{
                // dd('there');
                $custom_errors[] = "Sorry! Wrong email/password combination.";
                return \Redirect::back()->withInput()->with("custom_errors",$custom_errors);
            }
        }
    }


    function getLogout(){
        \Session::forget("user_data");
        return \Redirect::to('/');
    }

    public function getConfirmAccount($id,$hashed_email){
        $user = \User_model::find($id);
        if(hash_this($user->email) == $hashed_email){
            $user->update(['is_confirmed'=>true]);
            return \Redirect::to("login")->with('custom_errors',['Email is Confirmed! You can login now.']);
        }
        else die("error in confirmation");
    }

    public function postDoForgotPassword(){
        $data = new stdClass();
        $email = \Request::get('email');
        if($user = \User_model::where(['email'=>$email])->first()){
            $new_password = $user->set_random_password();
            $this->_send_fotgot_msg($user->email,$new_password);
//            die("your new password is: ".$new_password);
        }else{
            return \Redirect::back()->with('custom_errors',['Sorry! This Email isn\'t On our Databases.']);
        }
    }

    private function _send_confirmation_msg($id,$email){

    }

    private function _send_fotgot_msg($email,$password) {

    }





    /*****************************************************
     **  Registration System In CMS Admin
     *****************************************************/
    public function getRegistrationSystemAdminstration(){
        if(!is_logged_in()) return redirect("cms-auth/login");
        $data['angular_users'] = \User_model::all();
//            dd($registed_users);
        return $this->get_view("CMS.Admin.registration.table_control",$data,$this->admin_layout);
    }
    public function postUpdateUser(){
        $input = \Request::all();
//        dd($input);
        if($user = $this->user_obj->find($input['id'])){
            $user->update($input);
            return \Redirect::back();
        }
        die("error happend! in updating the user");
    }
    /*--------------------------------------------------*/



    




    
    /***************************************************/


    public function getCustomLogin(){
//         die("here");
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "دخول" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.registration.login",$data);
    }
    public function getCustomRegister(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "تسجيل عضو جديد" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.registration.register",$data);
    }





}
