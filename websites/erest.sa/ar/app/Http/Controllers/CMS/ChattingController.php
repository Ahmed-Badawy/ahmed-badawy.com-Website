<?php

namespace App\Http\Controllers\CMS;


class ChattingController extends CMSProviderController{


    public function __construct(){
        $this->chat_obj = new \chat_model();
        parent::__construct();
    }


    public function getChatSystem(){
        if(!is_logged_in()) return redirect("cms-auth/login");
        if(is_admin()) return redirect("cms-chat/administration");
        return $this->get_view("CMS.admin.chatting-system.normal-chat",[],$this->admin_layout);
    }

    public function getAdministration(){
        if(!is_admin()) return redirect("cms-chat/chat-system");
        $client_emails = array_unique($this->chat_obj->lists('client_email'));
        $data = [
            "client_emails"     =>      $client_emails,
        ];
        return $this->get_view("CMS.admin.chatting-system.administration-chatting-system",$data,$this->admin_layout);
    }



    public function getReciveMsgs($last_id){
        if(!is_logged_in()) die;
        $user = \Session::get('user_data');
        $chats = $this->chat_obj
            ->where('client_email', '=', $user->email)
            ->where('chat_id', '>', $last_id)->get();
        if($chats->isEmpty()) return ['msgs'=>[],"last_id"=>(int)$last_id];
        $new_last_id = $chats[$chats->count() - 1]->chat_id;
        $data = [
            "msgs" => $chats,
            "last_id" => (int)$new_last_id,
        ];
        return $data;
    }
    public function postAdminReciveMsgs(){
        if(!is_logged_in()) die;
        $input = \Request::all();
        $last_id = $input['last_id'];
        $client_email = $input['client_email'];
//        dd($input);
        $user = \Session::get('user_data');
        $chats = $this->chat_obj
            ->where('client_email', '=', $client_email)
            ->where('chat_id', '>', $last_id)->get();
        if($chats->isEmpty()) return ['msgs'=>[],"last_id"=>(int)$last_id];
        $new_last_id = $chats[$chats->count() - 1]->chat_id;
        $data = [
            "msgs" => $chats,
            "last_id" => (int)$new_last_id,
        ];
        return $data;
    }



    public function postSendMsg(){
        if(!is_logged_in()) die;
        if(is_admin()){     //this is an admin user
            $input = \Request::all();
            // dd($input);
            $create_array = [
                "msg"                =>     $input['msg'],
                "sender_email"       =>     user_data('email'),
                "reciver_email"      =>     $input['client_email'],
                "client_email"       =>     $input['client_email'],
            ];
            $this->chat_obj->create($create_array);
        }else{      //this is a normal user
            $input = \Request::all();
//            dd($input);
            $create_array = [
                "msg"       =>      $input['msg'],
                "sender_email"       =>     user_data('email'),
                "reciver_email"       =>    ADMIN_EMAIL,
                "client_email"       =>     user_data('email')
            ];
            $this->chat_obj->create($create_array);
        }
    }



}