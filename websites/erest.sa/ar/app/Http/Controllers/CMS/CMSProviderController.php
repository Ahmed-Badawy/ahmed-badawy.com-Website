<?php

namespace App\Http\Controllers\CMS;


use App\Http\Controllers\BaseController;

class CMSProviderController extends BaseController{

    public $pages_layout = "_CMS_Views.pages._layouts.default";
    public $admin_layout = "CMS.-layouts.flatty.-box";


    public function __construct(){
        $this->options_obj = new \options_model();
        $this->cates_obj = new \cates_model();
        $this->elements_obj = new \elements_model();
//        $this->pages_obj = new \pages_model();
//        $this->menu_obj = new \menu_model();
        $this->clean_cms_elements_directory();
        parent::__construct();
    }

    protected function get_pages_data(){
        $elements_collection = $this->elements_obj->join('site-elements-cates', 'site-elements.elm_cate', '=', 'site-elements-cates.cate_id')->orderBy('site-elements.elm_id','desc')->get();
        foreach($elements_collection as $key=>$val){
            $elms_array[$val->cate_name][] = $val;
        }
        $cates_collection = $this->cates_obj->orderBy("cate_name")->get();
//        $pages_collection = $this->pages_obj->orderBy("page_id","DESC")->get();
//        $menu_collection = $this->menu_obj->orderBy("menu_priority","ASC")->get();
        $options_array = $this->init_options();
        $data =[
            'cates'=>$cates_collection,
            'elements'=>$elms_array,
//            'menu'=>$menu_collection,
//            'pages'=>$pages_collection,
        ];
        $data = array_merge($data,$options_array);
//        dd($data);
        return $data;
    }


    private function init_options(){
        $options_array = [];
        $options = $this->options_obj->all();
        foreach($options as $key=>$val){
            $options_array[$val->name] = $val;
        }
        $google_maps_embed_api_link = $this->construct_google_maps_link($options_array);
        $options_array['google_maps_embed_api_link'] = $google_maps_embed_api_link;
        return $options_array;
    }
    private function construct_google_maps_link($options_array) {
        $google_maps_embed_api_key = "AIzaSyB16FdzcPqrhkXcHOHnVutQFuoDFBDILpU";
        $google_maps_embed_api_coordinates = $options_array['google_maps_embed_api_coordinates'];
        $google_maps_embed_api_zoom = $options_array['google_maps_embed_api_zoom'];
        $google_maps_embed_api_maptype = $options_array['google_maps_embed_api_maptype'];
        $google_maps_embed_api_link = "https://www.google.com/maps/embed/v1/view?key=" . $google_maps_embed_api_key . "&center=" . $google_maps_embed_api_coordinates->desc . "&zoom=" . $google_maps_embed_api_zoom->desc . "&maptype=" . $google_maps_embed_api_maptype->desc;
        return $google_maps_embed_api_link;
    }



    private function clean_cms_elements_directory() {
        $delete_array = [];
        $db_imgs_array = $this->elements_obj->lists("img");
        $files_array = find_all_files(public_path()."/site-imgs/_CMS/elements");
        foreach($files_array as $img){
            $img_name = get_file_data($img)["file_full_name"];
            if(in_array($img_name,$db_imgs_array)==false){
                $delete_array[] = $img;
                unlink($img);
            }
        }
//        $not_deleted = array_diff($files_array, $delete_array);
//        dd($not_deleted);
    }



    public function getDelete($type,$id){
        if($type == "client") $obj = new \clients_model();
        if($type == "email-group") $obj = new \email_group_model();
        if($type == "element") $obj = $this->elements_obj;
        if($type == "element-cate") $obj = new \cates_model();
        if($type == "user") $obj = new \User_model();
        $obj->find($id)->delete();
        return \Redirect::back();
    }
    protected function add_user_to_clients($input){
        if(isset($input['phone'])) $create_array['phone'] = $input['phone'];
        if(isset($input['username'])) $create_array['name'] = $input['username'];
        if(isset($input['email'])) $create_array['email'] = $input['email'];
        if(isset($input['first_name'])) $create_array['first_name'] = $input['first_name'];
        if(isset($input['last_name'])) $create_array['last_name'] = $input['last_name'];
        if(isset($input['website'])) $create_array['website'] = $input['website'];
        if(isset($input['address1'])) $create_array['address1'] = $input['address1'];
        if(isset($input['address2'])) $create_array['address2'] = $input['address2'];
        if(isset($input['country'])) $create_array['country'] = $input['country'];
        if(isset($input['city'])) $create_array['city'] = $input['city'];
        if(isset($input['zip_code'])) $create_array['zip_code'] = $input['zip_code'];
        $create_array['email_group'] = 1;
        // dd($user);
        // $create_array = [
        //     "name"=>$user->username,
        //     "phone"=>$user->phone,
        //     "email"=>$user->email,
        //     "email_group"=>1,
        // ];
        \clients_model::create($create_array);
    }





}