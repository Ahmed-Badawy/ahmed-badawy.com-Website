<?php

namespace App\Http\Controllers\CMS;
use App\Http\Controllers\BaseController;

class CMSProviderController extends BaseController {

//    public $projects_obj;
//    public $clients_obj;
//    public $slider_obj;

    public $options_obj;
    public $cates_obj;
    public $elements_obj;
    public $pages_obj;

//    public $types = [];

    public $pages_layout = "_CMS_Views.pages._layouts.default";
    public $admin_layout = "CMS.-layouts.flatty.-box";

    public function __construct(){
//        $this->projects_obj = new \projects_model();
//        $this->clients_obj = new \clients_model();
//        $this->photos_obj = new \photos_model();
//        $this->slider_obj = new \slider_model();

        $this->options_obj = new \options_model();
        $this->cates_obj = new \cates_model();
        $this->elements_obj = new \elements_model();
        $this->pages_obj = new \pages_model();
        $this->menu_obj = new \menu_model();

//        $this->initiate_types();
//        $this->clean_cms_elements_directory();
        parent::__construct();
    }

    protected function get_pages_data(){
//        $projects_collection = $this->elements_obj->where()->orderBy("priority")->get();
//        $photos_collection = $this->photos_obj->orderBy("priority")->get();
//        $slider_collection = $this->slider_obj->orderBy("priority")->get();
//        $clients_collection = $this->clients_obj->orderBy("priority")->get();

        $elements_collection = $this->elements_obj->join('site-elements-cates', 'site-elements.elm_cate', '=', 'site-elements-cates.cate_id')->orderBy('site-elements.elm_id','desc')->get();
        foreach($elements_collection as $key=>$val){
            $elms_array[$val->cate_name][] = $val;
        }
//        dd($elms_array);

        $cates_collection = $this->cates_obj->orderBy("cate_name")->get();
//        $pages_collection = $this->pages_obj->orderBy("page_id","DESC")->get();
//        $menu_collection = $this->menu_obj->orderBy("menu_priority","ASC")->get();

        $options_array = [];
        $options = $this->options_obj->all();
        foreach($options as $key=>$val){
            $options_array[$val->name] = $val;
        }
        $google_maps_embed_api_link = $this->construct_google_maps_link($options_array);
        $data =[
//            'projects'=>$projects_collection,
//            'clients'=>$clients_collection,
//            'photos'=>$photos_collection,
//            'slider_imgs'=>$slider_collection,
            'cates'=>$cates_collection,
            'elements'=>$elms_array,
//            'menu'=>$menu_collection,
//            'pages'=>$pages_collection,
//            "types" => $this->types,
            "google_maps_embed_api_link"=> $google_maps_embed_api_link,
        ];
        $data = array_merge($data,$options_array);
//        dd($data);
        return $data;
    }

//
//    protected function initiate_types() {
//        $this->types = [
//            "photo" => [
//                "cms_imgs" => "photo-gallary",
//                "object" => $this->photos_obj,
//            ],
//            "project" => [
//                "cms_imgs" => "projects",
//                "object" => $this->projects_obj,
//            ],
//            "client" => [
//                "cms_imgs" => "clients",
//                "object" => $this->clients_obj,
//            ],
//            "slider" => [
//                "cms_imgs" => "slider-imgs",
//                "object" => $this->slider_obj,
//            ],
//        ];
//    }






}