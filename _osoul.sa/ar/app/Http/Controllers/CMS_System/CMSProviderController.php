<?php

namespace App\Http\Controllers\CMS;
use App\Http\Controllers\BaseController;

class CMSProviderController extends BaseController {

    public $contributors_obj;
    public $products_obj;
    public $options_obj;
    public $recipes_obj;

    public $pages_layout = "_CMS_Views.pages._layouts.default";
    public $admin_layout = "_CMS_Views.admin._layouts.default";

    public function __construct(){
        $this->contributors_obj = new \contributor_model();
        $this->products_obj = new \products_model();
        $this->recipes_obj = new \recipes_model();
        $this->options_obj = new \options_model();
        parent::__construct();
    }

    public function get_pages_data(){
        $contributors_collection = $this->contributors_obj->orderBy("priority")->get();
        $products_collection = $this->products_obj->orderBy("priority")->get();
        $recipes_collection = $this->recipes_obj->orderBy("priority")->get();

        $contact_txt_1 = $this->options_obj->where('name','contact_txt_1')->first();
        $contact_txt_2 = $this->options_obj->where('name','contact_txt_2')->first();
        $career_txt = $this->options_obj->where('name','career_txt')->first();
        $intro_video = $this->options_obj->where('name','intro_video')->first();
        $demo_video = $this->options_obj->where('name','demo_video')->first();

        $google_maps_embed_api_coordinates = $this->options_obj->where('name','google_maps_embed_api_coordinates')->first();
        $google_maps_embed_api_zoom = $this->options_obj->where('name','google_maps_embed_api_zoom')->first();
        $google_maps_embed_api_maptype = $this->options_obj->where('name','google_maps_embed_api_maptype')->first();
        $google_maps_embed_api_link = $this->options_obj->where('name','google_maps_embed_api_link')->first();

        $data =[
            'contributors'=>$contributors_collection,
            'products'=>$products_collection,
            'recipes'=>$recipes_collection,
            'contact_txt_1'=>$contact_txt_1->desc,
            'contact_txt_2'=>$contact_txt_2->desc,
            'career_txt'=>$career_txt->desc,
            'intro_video'=>$intro_video->desc,
            'demo_video'=>$demo_video->desc,

            'google_maps_embed_api_coordinates'    =>  $google_maps_embed_api_coordinates->desc,
            'google_maps_embed_api_zoom'           =>  $google_maps_embed_api_zoom->desc,
            'google_maps_embed_api_maptype'        =>  $google_maps_embed_api_maptype->desc,
            'google_maps_embed_api_link'           =>  $google_maps_embed_api_link->desc,
        ];
        // dd($data);
        return $data;
    }

    public function upload_file($file,$destinationPath,$filename=false,$extension=false){
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













}