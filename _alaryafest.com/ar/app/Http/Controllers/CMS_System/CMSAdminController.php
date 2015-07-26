<?php

namespace App\Http\Controllers\CMS;
use App\Http\Controllers\CMS\CMSProviderController;

class CMSAdminController extends CMSProviderController {

//---------------------------------Views---------------------------------------------------
    public function getLogin(){
        return $this->get_view("_CMS_Views.admin.login",[],$this->admin_layout);
    }
    public function getTutorial(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.tutorial",$pages_data,$this->admin_layout);
    }
    public function getTexts(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.texts",$pages_data,$this->admin_layout);
    }
    public function getSlider(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.slider",$pages_data,$this->admin_layout);
    }
    public function getProjects(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.projects",$pages_data,$this->admin_layout);
    }
    public function getClients(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.clients",$pages_data,$this->admin_layout);
    }
    public function getPhotoGallary(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.photo-gallary",$pages_data,$this->admin_layout);
    }
    public function getOptions(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.options",$pages_data,$this->admin_layout);
    }
//------------------------------------------------------------------------------------------


//---------------------------------Creating---------------------------------------------------
    public function postCreateNew($type){
        $obj = $this->types[$type]["object"];
        if(\Request::hasFile("upload_img")) {
            $img_file = \Request::file('upload_img');
            $img_save_path = real_imgs_dir ."_CMS/".$this->types[$type]["cms_imgs"];
            $img_name = $this->upload_file($img_file, $img_save_path);
        }
        $input = \Request::all();
        $new_array = [
            "name"			=>			$input['name'],
            "desc"			=>			$input['desc'],
            "img"			=>			$img_name,
            "priority"		=>			50,
        ];
        $obj->create($new_array);
        return \Redirect::back();
    }
//------------------------------------------------------------------------------------------


//---------------------------------Updating---------------------------------------------------
    public function postModifyId($type,$id){
        $obj = $this->types[$type]["object"];
        if(\Request::hasFile("upload_img")){
            $img_file = \Request::file('upload_img');
            $img_save_path = real_imgs_dir."_CMS/".$this->types[$type]["cms_imgs"];
            $img_name = $this->upload_file($img_file,$img_save_path);
        }
        $input = \Request::all();
        $update_array = [
            "name"=>$input['item_name'],
            "desc"=>$input['item_desc'],
            "priority"=>$input['item_priority'],
        ];
        if(isset($img_name)) $update_array["img"] = $img_name;
        $obj->find($id)->update($update_array);
        return \Redirect::back();
    }
//------------------------------------------------------------------------------------------

//---------------------------------Deleting---------------------------------------------------
    public function getDeleteId($type,$id){
        $obj = $this->types[$type]["object"];
        $obj->find($id)->delete();
        return \Redirect::back();
    }
//------------------------------------------------------------------------------------------




//---------------------------------Other---------------------------------------------------
    public function postUpdateOptionsValue(){
        $name = trim(\Request::get('name'));
        $desc = trim(\Request::get('desc'));
//        dd($desc);
        $item = $this->options_obj->where("name",$name)->update(['desc'=>$desc]);
        return \Redirect::back();
    }
    public function postUpdateOptionsValues(){
//        $names = \Request::get('names');
        $myoptions = \Request::get('myoptions');
//        dd($myoptions);
        foreach($myoptions as $key=>$val){
            $this->options_obj->where("name",$key)->update(['desc'=>trim($val)]);
        }
        return \Redirect::back();
    }

//    public function postUpdateIntroVideo(){
//        $youtube_emped_link = trim(\Request::get('youtube_emped_link'));
//        $this->options_obj->where("name","intro_video")->update(['desc'=>$youtube_emped_link]);
//        return \Redirect::back();
//    }
    public function postUpdateMap(){
        $google_maps_embed_api_key = "AIzaSyB16FdzcPqrhkXcHOHnVutQFuoDFBDILpU";
        $google_maps_embed_api_coordinates = trim(\Request::get('google_maps_embed_api_coordinates'));
        $google_maps_embed_api_zoom = trim(\Request::get('google_maps_embed_api_zoom'));
        $google_maps_embed_api_maptype = trim(\Request::get('google_maps_embed_api_maptype'));
        $google_maps_embed_api_link = "https://www.google.com/maps/embed/v1/view?key=".$google_maps_embed_api_key."&center=".$google_maps_embed_api_coordinates."&zoom=".$google_maps_embed_api_zoom."&maptype=".$google_maps_embed_api_maptype;
        $update_array = [
            "google_maps_embed_api_coordinates"     =>  $google_maps_embed_api_coordinates,
            "google_maps_embed_api_zoom"            =>  $google_maps_embed_api_zoom,
            "google_maps_embed_api_maptype"         =>  $google_maps_embed_api_maptype,
            "google_maps_embed_api_link"            =>  $google_maps_embed_api_link,
        ];
//        dd($update_array);
        foreach($update_array as $key=>$val){
            $this->options_obj->where("name",$key)->update(['desc'=>$val]);
        }
        return \Redirect::back();
    }
//------------------------------------------------------------------------------------------


}