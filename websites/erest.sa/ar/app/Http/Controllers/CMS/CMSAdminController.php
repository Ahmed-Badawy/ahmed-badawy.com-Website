<?php

namespace App\Http\Controllers\CMS;


class CMSAdminController extends CMSProviderController{


/*****************************************************
 **  Clients Managment System
 *****************************************************/
    public function getClientManager(){
        if(!is_logged_in()) return \Redirect::to('cms-auth/login');
        $clients = \clients_model::leftJoin('client_management_groups', 'client_management_clients.email_group', '=', 'client_management_groups.group_id')->get();
        $groups = \email_group_model::lists("group_name");
        $data = [
            "side_nav"=>"email-manager",
            "clients"=>$clients,
            "email_groups"=>$groups,
        ];
        // dd($data);
        return $this->get_view("CMS.Admin.clients-management.client-manager",$data,$this->admin_layout);
    }

    public function getGroupsManager(){
       if(!is_logged_in()) return \Redirect::to('cms-auth/login');
        $groups = \email_group_model::all();
        $data = [
            "side_nav"=>"email-manager",
            "email_groups"=>$groups,
        ];
//        dd($data);
        return $this->get_view("CMS.Admin.clients-management.groups-manager",$data,$this->admin_layout);
    }

    public function getMessagesManager(){
       if(!is_logged_in()) return \Redirect::to('cms-auth/login');
        $clients = \clients_model::leftJoin('client_management_groups', 'client_management_clients.email_group', '=', 'client_management_groups.group_id')->get();
        $groups = \email_group_model::lists("group_name");
        $data = [
            "side_nav"=>"email-manager",
            "clients"=>$clients,
            "email_groups"=>$groups,
        ];
//        dd($data);
        return $this->get_view("CMS.Admin.clients-management.messages-manager",$data,$this->admin_layout);
    }

    public function postUpdateEmailGroup($id){
        $obj = new \email_group_model();
        $obj->find($id)->update(['group_name'=>\Request::get('group_name')]);
        return \Redirect::back();
    }

    public function postAddEmailGroup(){
        $input = \Request::all();
        $create = \email_group_model::create([ 'group_name'=>$input['new_cate'] ]);
        if($create) $cate = $create->group_id;
        return \Redirect::back();
    }

    public function postAddClient(){
        $input = \Request::all();
        if($input['new_cate'] != ""){
            $create = \email_group_model::create([ 'group_name'=>$input['new_cate'] ]);
            if($create) $cate = $create->group_id;
        }else {
            $cate_obj = \email_group_model::where('group_name',$input['cate'])->first();
            $cate = $cate_obj->group_id;
        }
        $create_array = [
            "name"=>$input['name'],
            "phone"=>$input['phone'],
            "email"=>$input['email'],
            "other"=>$input['other'],
            "email_group"=>$cate,
        ];
//        dd($create_array);
        \clients_model::create($create_array);
        return \Redirect::back();
    }

    public function postUpdateClient(){
        $input = \Request::all();
        $id = $input['id'];
        $cate_obj = \email_group_model::where('group_name',$input['cate'])->first();

        $update_array = [
            "name"=>$input['name'],
            "phone"=>$input['phone'],
            "email"=>$input['email'],
            "other"=>$input['other'],
            "email_group"=>$cate_obj->group_id,
        ];
//        dd($id);
        $obj = new \clients_model();
        $obj->find($id)->update($update_array);
        return \Redirect::back();
    }

    public function postEmailManagerSendMsgs(){
        $input = \Request::all();
        $emails = json_decode($input['send_to_emails']);
        $res = mass_mail($emails,$input['subject'],$input['message'],null,"support@erest.sa");
        $back = \URL::previous();
        echo "\n Finally! Sent All \n Go Back From Here: <a href='$back'>$back</a>";
    }
    /*--------------------------------------------------*/





/*****************************************************
 **  Site-Management
 *****************************************************/
    public function getSiteManagementOptions(){
       if(!is_logged_in()) return \Redirect::to('cms-auth/login');
        $data = $this->get_pages_data();
        $data["side_nav"] = "site-manager";
        return $this->get_view("CMS.Admin.site-pages-manager.options",$data,$this->admin_layout);
    }

    public function getSiteManagementTexts($page){
       if(!is_logged_in()) return \Redirect::to('cms-auth/login');
        if($page=="main-page") $temp = "page1";
        if($page=="about-us") $temp = "page2";
        if($page=="services") $temp = "page3";
        if($page=="services-pages") $temp = "page4";
        $data = $this->get_pages_data();
        $data["side_nav"] = "site-manager";
        return $this->get_view("CMS.Admin.site-pages-manager.texts.".$temp,$data,$this->admin_layout);
    }


    public function getSiteManagementElementsCatesControl(){
       if(!is_logged_in()) return \Redirect::to('cms-auth/login');
        $elements_collection = $this->elements_obj->join('site-elements-cates', 'site-elements.elm_cate', '=', 'site-elements-cates.cate_id')->orderBy('site-elements.elm_id','desc')->get();
        $cates_collection = $this->cates_obj->orderBy("cate_name")->get();
        $data['elements'] = $elements_collection;
        $data['cates'] = $cates_collection;
        $data["side_nav"] = "site-manager";
//        dd($data);
        return $this->get_view("CMS.Admin.site-pages-manager.cates_control",$data,$this->admin_layout);
    }

    public function getSiteManagementCatesControl(){
       if(!is_logged_in()) return \Redirect::to('cms-auth/login');
        $cates_collection = $this->cates_obj->orderBy("cate_name")->get();
        $data["side_nav"] = "site-manager";
        $data["cates"] = $cates_collection;
//        dd($data);
        return $this->get_view("CMS.Admin.site-pages-manager.elements-groups-manager",$data,$this->admin_layout);
    }


    public function postUpdateElementCate($id){
        $obj = new \cates_model();
        $obj->find($id)->update(['cate_name'=>\Request::get('group_name')]);
        return \Redirect::back();
    }

    public function postAddElementCate(){
        $input = \Request::all();
        \cates_model::create([ 'cate_name'=>$input['new_cate'] ]);
        return \Redirect::back();
    }

    public function postSiteManagementCreateElement(){
        if(\Request::hasFile("upload_img")) {
            $img_file = \Request::file('upload_img');
            $img_save_path = real_imgs_dir ."_CMS/elements";
            $img_name = $this->upload_file($img_file, $img_save_path);
        }
        $input = \Request::all();
//        dd($input);
        if(trim($input['new_cate'])==''){
            $cate = $this->cates_obj->where('cate_name',$input['cate'])->first();
            $cate_id = $cate->cate_id;
        }else{
            $cate = $this->cates_obj->create(["cate_name"=>$input['new_cate']]);
            $cate_id = $cate->cate_id;
        }
        $new_array = [
            "elm_name"			=>			$input['name'],
            "elm_desc"			=>			$input['desc'],
            "priority"		    =>			50,
            "elm_cate"          =>          $cate_id,
        ];
        if(isset($img_name)) $new_array['img'] = $img_name;
//        dd($new_array);
        $this->elements_obj->create($new_array);
        return \Redirect::back();
    }

    public function postSiteManagementModifyElm($id){
        $input = \Request::all();
        if(\Request::hasFile("upload_img")){
            $img_file = \Request::file('upload_img');
            $img_save_path = real_imgs_dir."_CMS/elements/";
            $img_name = $this->upload_file($img_file,$img_save_path);
        }
        $cate = $this->cates_obj->where('cate_name',$input['cate_name'])->first();
        $cate_id = $cate->cate_id;
        $update_array = [
            "elm_name"=>$input['elm_name'],
            "elm_desc"=>$input['elm_desc'],
            "priority"=>$input['elm_priority'],
            "elm_cate"=>$cate_id,
        ];
        if(isset($img_name)) $update_array["img"] = $img_name;
//        dd($update_array);
        $this->elements_obj->find($id)->update($update_array);
        return \Redirect::back();
    }





    public function postUpdateOptionsValue(){
        $name = trim(\Request::get('name'));
        $desc = trim(\Request::get('desc'));
//        dd($desc);
        if(\Request::hasFile("upload_img")){
            $img_file = \Request::file('upload_img');
            $img_save_path = real_imgs_dir."_CMS/options/";
            $img_name = $this->upload_file($img_file,$img_save_path);
        }
        $update_array = [
            'desc'=>$desc,
        ];
        if(isset($img_name)) $update_array['img'] = $img_name;
//        dd($update_array);
        $item = $this->options_obj->where("name",$name)->update($update_array);
        return \Redirect::back();
    }
    public function postUpdateOptionsValues(){
        $myoptions = \Request::get('myoptions');
//        dd($myoptions);
        foreach($myoptions as $key=>$val){
            $this->options_obj->where("name",$key)->update(['desc'=>trim($val)]);
        }
        return \Redirect::back();
    }
    /*--------------------------------------------------*/








    public function getDashboard(){
        if(is_admin()) return \Redirect::to("cms-admin/client-manager");
        return \Redirect::to("cms-chat/chat-system");
        
    }
    public function getTodo(){
        return $this->get_view("CMS.Admin.todo",[],$this->admin_layout);
    }



    /*****************************************************
     **  Chatting System
     *****************************************************/
    public function getChattingSystem(){

    }
    /*--------------------------------------------------*/














}