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
    public function getRecipes(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.recipes",$pages_data,$this->admin_layout);
    }
    public function getContributors(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.contributors",$pages_data,$this->admin_layout);
    }
    public function getProducts(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.products",$pages_data,$this->admin_layout);
    }
    public function getStructure(){
        return $this->get_view("_CMS_Views.admin.structure",[],$this->admin_layout);
    }
    public function getContact(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.contact",$pages_data,$this->admin_layout);
    }
    public function getCareer(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.career",$pages_data,$this->admin_layout);
    }
    public function getOptions(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.options",$pages_data,$this->admin_layout);
    }
//------------------------------------------------------------------------------------------


//---------------------------------Creating---------------------------------------------------
    public function postCreateContributor(){
        $img_file = \Request::file('upload_img');
        $img_save_path = real_imgs_dir."_CMS/contributors";
        $img_name = $this->upload_file($img_file,$img_save_path);
        $input = \Request::all();
        $new_array = [
            "name"			=>			$input['name'],
            "desc"			=>			$input['desc'],
            "img"			=>			$img_name,
            "priority"		=>			50,
        ];
        $this->contributors_obj->create($new_array);
        return \Redirect::back();
    }
    public function postCreateRecipe(){
        $img_file = \Request::file('upload_img');
        $img_save_path = real_imgs_dir."_CMS/recipes";
        $img_name = $this->upload_file($img_file,$img_save_path);
        $input = \Request::all();
        $new_array = [
            "name"			=>			$input['name'],
            "desc"			=>			$input['desc'],
            "img"			=>			$img_name,
            "priority"		=>			50,
        ];
        $this->recipes_obj->create($new_array);
        return \Redirect::back();
    }
    public function postCreateProduct(){
        $img_file = \Request::file('upload_img');
        $img_save_path = real_imgs_dir."_CMS/products";
        $img_name = $this->upload_file($img_file,$img_save_path);
        $input = \Request::all();
        $new_array = [
            "name"			=>			$input['name'],
            "desc"			=>			$input['desc'],
            "img"			=>			$img_name,
            "priority"		=>			50,
        ];
        $this->products_obj->create($new_array);
        return \Redirect::back();
    }
//------------------------------------------------------------------------------------------


//---------------------------------Updating---------------------------------------------------
    public function postUpdateCareer(){
        $input = \Request::all();
        $update_array = [
            "desc"=>$input['txt1']
        ];
        $this->options_obj->where('name','career_txt')->update($update_array);
        return \Redirect::back();
    }
    public function postUpdateContact(){
        $options_obj = new \options_model();
        $input = \Request::all();
        $update_array = [
            "desc"=>$input['txt1']
        ];
        $options_obj->where('name','contact_txt_1')->update($update_array);

        $update_array = [
            "desc"=>$input['txt2']
        ];
        $options_obj->where('name','contact_txt_2')->update($update_array);

        return \Redirect::back();
    }
    public function postUpdateStructureImage(){
        $img_file = \Request::file('upload_img');
        $img_save_path = real_imgs_dir."_CMS/structure";
        $file_name = "structure";
        $img_name = $this->upload_file($img_file,$img_save_path,$file_name,'jpg');
        return \Redirect::back();
    }
    public function postModifyId($type,$id){
        if($type=="contributor"){
            $obj = $this->contributors_obj;
            $place = "contributors";
        }elseif($type=="product"){
            $obj = $this->products_obj;
            $place = "products";
        }elseif($type=="recipe"){
            $obj = $this->recipes_obj;
            $place = "recipes";
        }
        $input = \Request::all();
//        dd($input);
        if(\Request::hasFile("upload_img")){
            $img_file = \Request::file('upload_img');
            $img_save_path = real_imgs_dir."_CMS/".$place;
            $img_name = $this->upload_file($img_file,$img_save_path);
        }
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
        if($type=="contributor") $obj = $this->contributors_obj;
        elseif($type=="product") $obj = $this->products_obj;
        elseif($type=="recipe") $obj = $this->recipes_obj;
        $obj->find($id)->delete();
        return \Redirect::back();
    }
//------------------------------------------------------------------------------------------


//---------------------------------Other---------------------------------------------------
    public function postUpdateOptionsValue(){
        $name = trim(\Request::get('name'));
        $desc = trim(\Request::get('desc'));
        $item = $this->options_obj->where("name",$name)->update(['desc'=>$desc]);
        return \Redirect::back();
    }
    public function postUpdateIntroVideo(){
        $youtube_emped_link = trim(\Request::get('youtube_emped_link'));
        $this->options_obj->where("name","intro_video")->update(['desc'=>$youtube_emped_link]);
        return \Redirect::back();
    }
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