<?php

namespace App\Http\Controllers\CMS;
use App\Http\Controllers\BaseController;

class CMSProviderController extends BaseController {

    public $projects_obj;
    public $clients_obj;
    public $options_obj;
    public $recipes_obj;
    public $slider_obj;

    public $types = [];

    public $pages_layout = "_CMS_Views.pages._layouts.default";
    public $admin_layout = "_CMS_Views.admin._layouts.default";

    public function __construct(){
        $this->projects_obj = new \projects_model();
        $this->clients_obj = new \clients_model();
        $this->photos_obj = new \photos_model();
        $this->slider_obj = new \slider_model();
        $this->options_obj = new \options_model();
        $this->initiate_types();
        parent::__construct();
    }

    protected function get_pages_data(){
        $projects_collection = $this->projects_obj->orderBy("priority")->get();
        $clients_collection = $this->clients_obj->orderBy("priority")->get();
        $photos_collection = $this->photos_obj->orderBy("priority")->get();
        $slider_collection = $this->slider_obj->orderBy("priority")->get();

        $options_array = [];
        $options = $this->options_obj->all();
        foreach($options as $key=>$val){
            $options_array[$val->name] = $val;
        }
        $google_maps_embed_api_link = $this->construct_google_maps_link($options_array);
        $data =[
            'projects'=>$projects_collection,
            'clients'=>$clients_collection,
            'photos'=>$photos_collection,
            'slider_imgs'=>$slider_collection,
            "types" => $this->types,
            "google_maps_embed_api_link"=> $google_maps_embed_api_link,
        ];
        $data = array_merge($data,$options_array);
//        dd($data);
        return $data;
    }

    protected function upload_file($file,$destinationPath,$filename=false,$extension=false){
        // $filename = $file->getClientOriginalName();
        $filename = ($filename) ? $filename : str_random(12);
        $extension = ($extension) ? $extension: $file->getClientOriginalExtension();
        $final_name =  $filename.".".$extension;
        $upload_success = $file->move($destinationPath,$final_name);
        if( $upload_success ) {
            // return Response::json('success', 200);
            return $final_name;
        } else {
            // return Response::json('error', 400);
            return "error";
        }
    }

    protected function initiate_types() {
        $this->types = [
            "photo" => [
                "cms_imgs" => "photo-gallary",
                "object" => $this->photos_obj,
            ],
            "project" => [
                "cms_imgs" => "projects",
                "object" => $this->projects_obj,
            ],
            "client" => [
                "cms_imgs" => "clients",
                "object" => $this->clients_obj,
            ],
            "slider" => [
                "cms_imgs" => "slider-imgs",
                "object" => $this->slider_obj,
            ],
        ];
    }


    private function construct_google_maps_link($options_array) {
        $google_maps_embed_api_key = "AIzaSyB16FdzcPqrhkXcHOHnVutQFuoDFBDILpU";
        $google_maps_embed_api_coordinates = $options_array['google_maps_embed_api_coordinates'];
        $google_maps_embed_api_zoom = $options_array['google_maps_embed_api_zoom'];
        $google_maps_embed_api_maptype = $options_array['google_maps_embed_api_maptype'];
        $google_maps_embed_api_link = "https://www.google.com/maps/embed/v1/view?key=" . $google_maps_embed_api_key . "&center=" . $google_maps_embed_api_coordinates->desc . "&zoom=" . $google_maps_embed_api_zoom->desc . "&maptype=" . $google_maps_embed_api_maptype->desc;
        return $google_maps_embed_api_link;
    }


}