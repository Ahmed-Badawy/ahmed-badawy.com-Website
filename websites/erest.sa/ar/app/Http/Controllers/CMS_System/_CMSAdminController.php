<?php

namespace App\Http\Controllers\CMS;
use App\Http\Controllers\CMS\CMSProviderController;

class CMSAdminController extends CMSProviderController {











//---------------------------------Views---------------------------------------------------
    public function getTutorial(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.tutorial",$pages_data,$this->admin_layout);
    }
    public function getTexts(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.texts",$pages_data,$this->admin_layout);
    }


    public function getCates(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.cates_control",$pages_data,$this->admin_layout);
    }
    public function getWebPagesControl(){
        $pages_data = $this->get_pages_data();
        return $this->get_view("_CMS_Views.admin.web_pages_control",$pages_data,$this->admin_layout);
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
            "priority"		=>			50,
        ];
        if(isset($img_name)) $new_array['img'] = $img_name;
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




    public function getCatesData(){
        $elements = $this->elements_obj->join('cates', 'elements.elm_cate', '=', 'cates.cate_id')->orderBy('priority')->orderBy('elements.elm_id','desc')->get();
        $cates = $this->cates_obj->all();
        $menus = $this->menu_obj->orderBy('menu_priority','ASC')->get();
        $data['elements'] = $elements;
        $data['cates'] = $cates;
        $data['menus'] = $menus;
//        dd($data);
        return $data;
    }


    public function postAddNewPage(){
        $input = \Request::all();
        $create_array = [
            "page_name" => $input['page_name'],
            "page_type" => $input['page_type'],
            "page_design" => $input['page_design'],
            "cate_id" => $input['cate_id'],
        ];
//        dd($create_array);
        $this->pages_obj->create($create_array);
        return \Redirect::back();
    }


    public function postSaveMenuItems(){
        $input = \Request::all();
//        dd($input);
        $this->menu_obj->truncate();
        foreach($input['data'] as $item){
            $create_data = [
                "menu_name" => $item['menu_name'],
                "menu_url" => $item['menu_url'],
                "menu_priority" => $item['menu_priority'],
            ];
//            dd($create_data);
            $this->menu_obj->create($create_data);
        }
//        return \Redirect::back();
    }






}