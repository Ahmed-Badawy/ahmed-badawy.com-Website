<?php

namespace App\Http\Controllers\CMS;
use App\Http\Controllers\CMS\CMSProviderController;

class CMSViewsController extends CMSProviderController {


    /*-----------------------------------The Views-----------------------------------------------*/
    public function getIndex(){
        $pages_data = $this->get_pages_data();
        $seo_data = \sr::common('empty');
        $data = array_merge($seo_data,$pages_data);
        foreach($data['products'] as $val){
            $imgs_list[] = $val->img;
        }
        $data['products_imgs_list'] = $imgs_list;
        return view(get_location("_CMS_Views.Pages.main_page"),$data)->with($data);
    }
    public function getAboutUs(){
        $data = \sr::common('empty');
        return $this->get_view("_CMS_Views.pages.about-us",$data,$this->pages_layout);
    }
    public function getContributor(){
        $pages_data = $this->get_pages_data();
        $data = \sr::common('empty');
        $data['contributors'] = $pages_data['contributors'];
        return $this->get_view("_CMS_Views.pages.contributor",$data,$this->pages_layout);
    }
    public function getProduct(){
        $pages_data = $this->get_pages_data();
        $data = \sr::common('empty');
        $data['products'] = $pages_data['products'];
        return $this->get_view("_CMS_Views.pages.product",$data,$this->pages_layout);
    }
    public function getRecipe(){
        $pages_data = $this->get_pages_data();
        $data = \sr::common('empty');
        $data['recipes'] = $pages_data['recipes'];
        return $this->get_view("_CMS_Views.pages.recipe",$data,$this->pages_layout);
    }
    public function getStructure(){
        $data = \sr::common('empty');
        return $this->get_view("_CMS_Views.pages.structure",$data,$this->pages_layout);
    }
    public function getContact(){
        $pages_data = $this->get_pages_data();
        $data = \sr::common('empty');
        $data['contact_txt_1'] = $pages_data['contact_txt_1'];
        $data['contact_txt_2'] = $pages_data['contact_txt_2'];
        $data['google_maps_embed_api_link'] = $pages_data['google_maps_embed_api_link'];
        return $this->get_view("_CMS_Views.pages.contact",$data,$this->pages_layout);
    }
    public function getCareer(){
        $pages_data = $this->get_pages_data();
        $data = \sr::common('empty');
        $data['career_txt'] = $pages_data['career_txt'];
        return $this->get_view("_CMS_Views.pages.career",$data,$this->pages_layout);
    }

    public function getDeveloper(){
        return view(get_location("pages.developer"));
    }











}