<?php namespace App\Http\Controllers;

use App\Http\Controllers\CMS\CMSProviderController;

class AdminController extends CMSProviderController{


    /*****************************************************
     **  registration system
     *****************************************************/
//    public function getLogin(){
////         die("here");
//        $data = [
//            "breadcrumbs"=>[
//                "الصفحة الرئيسية" => url('/'),
//                "تسجيل الدخول" => null,
//            ]
//        ];
//        $data = array_merge($this->get_pages_data(),$data);
//        return view("views.registration.login",$data);
//    }
//    public function getRegister(){
//        $data = [
//            "breadcrumbs"=>[
//                "الصفحة الرئيسية" => url('/'),
//                "تسجيل جديد" => null,
//            ]
//        ];
//        $data = array_merge($this->get_pages_data(),$data);
//        return view("views.registration.register",$data);
//    }
    /*--------------------------------------------------*/




    public function postRegister(){
        $input = \Request::all();
        $rules = [
            'first_name' => 'required|min:5',
            'last_name' => 'required|min:5',
            'email' => 'required|email|min:5|unique:users',
            'password' => 'required|min:5|confirmed',
            'password_confirmation'=> 'required|min:5'
        ];
        $validator = \Validator::make($input,$rules);
        if($validator->fails()){
//            dd($validator->messages());
            return \Redirect::to('admin/register')->withErrors($validator)->withInput();
        }
        $obj = new \User_model();
        $res = $obj->create_user($input);
        return \Redirect::to('admin/login');
    }

    public function postLogin(){
        $input = \Request::all();
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:5'
        );
        $validator = \Validator::make($input, $rules);
        if ($validator->fails()) {

            dd($validator->errors());
            return \Redirect::to('admin/login')->withErrors($validator)->withInput();
        } else {
            $email = $input['email'];
            $password = $input['password'];
//            dd($input);
            $user = \User_model::where('email',$email)->where('password',$password)->first();
            if($user){
//                die("here");
                \Session::put("user_data",$user);
                return \Redirect::to('admin/dashboard');
            }else{
//                die("there");
                $custom_error = "الإيميل أو الباسورد خاطئ! نرجو إعادة المحاولة.";
                return \Redirect::to('admin/login')->with("custom_error",$custom_error);
            }
        }
    }

    function getLogout(){
        \Session::forget("user_data");
        return \Redirect::to('/');
    }



    function getDashboard(){
        if(!is_logged_in()) return \Redirect::to('admin/login')->with("custom_error","يجب أن تسجل الدخول أولا ...");
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "صفحة التحكم" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        // email: ADMIN_EMAIL // pass: ADMIN_PASS
        return (\Session::get('user_data')->email == ADMIN_EMAIL) ? view("views.control.admin_dashboard",$data) : view("views.control.dashboard",$data);
    }
    function getDashboardUsers(){
        if(!is_logged_in()) return \Redirect::to('admin/login')->with("custom_error","يجب أن تسجل الدخول أولا ...");
        if(!is_admin()) return \Redirect::back();
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "صفحة التحكم" => null,
            ],
            "users" => \User_model::all()
        ];
        return view("views.control.dashboard-users",$data);
    }




    function postReciveAdminMsgs(){
        $obj = new \chat_model();
        $clients = $obj->distinct()->lists("chat_id");
        $data_array =  ["clients"=>$clients];
        if(\Request::has('client')){
            $client = \Request::get('client');
            $chat = $obj->where('chat_id',$client)->get();
            $data_array['chat'] = $chat;
            $client_info = \user_model::where('email',$client)->first();
            $data_array['client'] = $client_info;
        }
//        dd($data_array);
        return $data_array;
    }
    function postReciveMsgs(){
        $input = \Request::all();
        $chat_id = $input['client_email'];
        $msgs_array = \chat_model::where("chat_id",$chat_id)->get();
        return ["msgs"=>$msgs_array];
    }


    function postSendMsg(){
        $input = \Request::all();
        $create_array = [
            "msg"               =>  $input['msg'],
            "sender_email"      =>  $input['client_email'],
            "reciver_email"     =>  ADMIN_EMAIL,
            "chat_id"           =>  $input['client_email'],
        ];
//        dd($create_array);
        $create = \chat_model::create($create_array);
    }
    function postAdminSendMsg(){
        $input = \Request::all();
        $create_array = [
            "msg"               =>  $input['msg'],
            "sender_email"     =>  ADMIN_EMAIL,
            "reciver_email"      =>  $input['client_email'],
            "chat_id"           =>  $input['client_email'],
        ];
        $create = \chat_model::create($create_array);
    }


    function postSendMultipleMail(){
        $input = \Request::all();
//        dd($input);
//        foreach($input['send_mail_to'] as $to){
//            mail($to,$input['subject'],$input['msg']);
//        }
        // dd($input);
        $to = array_keys($input['send_mail_to']);
//        dd($to);
        $res = mass_mail($to,$input['subject'],$input['msg'],null,"admin@erest.sa");
        $back = url('admin/dashboard-users');
        echo $res;
        echo "\n Finally! Sent All \n Go Back From Here: <a href='$back'>$back</a>";
    }




}
