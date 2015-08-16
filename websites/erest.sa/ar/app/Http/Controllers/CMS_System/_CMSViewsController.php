<?php

namespace App\Http\Controllers\CMS;
use App\Http\Controllers\CMS\CMSProviderController;

class CMSViewsController extends CMSProviderController {


    /*-----------------------------------The Views-----------------------------------------------*/
    public function getIndex(){
        $pages_data = $this->get_pages_data();
        $seo_data = \sr::common('empty');
        $seo_data['page_title'] = "الرئيسية";
        $data = array_merge($seo_data,$pages_data);
        return $this->get_view("_CMS_Views.pages.main_page",$data,$this->pages_layout);
    }
    public function getAboutUs(){
        $pages_data = $this->get_pages_data();
        $seo_data = \sr::common('empty');
        $seo_data['page_title'] = "من نحن";
        $data = array_merge($seo_data,$pages_data);
        return $this->get_view("_CMS_Views.pages.about-us",$data,$this->pages_layout);
    }
    public function getProjects(){
        $pages_data = $this->get_pages_data();
        $seo_data = \sr::common('empty');
        $seo_data['page_title'] = "المشاريع";
        $data = array_merge($seo_data,$pages_data);
        return $this->get_view("_CMS_Views.pages.projects",$data,$this->pages_layout);
    }
    public function getClients(){
        $pages_data = $this->get_pages_data();
        $seo_data = \sr::common('empty');
        $seo_data['page_title'] = "العملاء";
        $data = array_merge($seo_data,$pages_data);
        return $this->get_view("_CMS_Views.pages.clients",$data,$this->pages_layout);
    }
    public function getContact(){
        $pages_data = $this->get_pages_data();
        $seo_data = \sr::common('empty');
        $seo_data['page_title'] = "اتصل بنا";
        $data = array_merge($seo_data,$pages_data);
        return $this->get_view("_CMS_Views.pages.contact",$data,$this->pages_layout);
    }
    public function getPhotoGallary(){
        $pages_data = $this->get_pages_data();
        $seo_data = \sr::common('empty');
        $seo_data['page_title'] = "معرض الصور";
        $data = array_merge($seo_data,$pages_data);
        return $this->get_view("_CMS_Views.pages.photo-gallary",$data,$this->pages_layout);
    }

    public function getPage($id){
        $pages_data = $this->get_pages_data();
        $seo_data = \sr::common('empty');
        $wanted_page = $this->pages_obj->find($id);
        $seo_data['page_title'] = $wanted_page->page_name;
        $data = array_merge($seo_data,$pages_data);
        if($wanted_page->page_type=='cate'){
            $iterator_elms = $this->elements_obj->where("elm_cate",$wanted_page->cate_id)->get();
            $data['iterator_elms'] = $iterator_elms;
        }
//        dd($data);
        return $this->get_view("_CMS_Views.pages.iterator_layouts.".$wanted_page->page_design,$data,$this->pages_layout);
    }


//    public function getContributor(){
//        $pages_data = $this->get_pages_data();
//        $data = \sr::common('empty');
//        $data['contributors'] = $pages_data['contributors'];
//        return $this->get_view("_CMS_Views.pages.contributor",$data,$this->pages_layout);
//    }
//    public function getProduct(){
//        $pages_data = $this->get_pages_data();
//        $data = \sr::common('empty');
//        $data['products'] = $pages_data['products'];
//        return $this->get_view("_CMS_Views.pages.product",$data,$this->pages_layout);
//    }
//    public function getStructure(){
//        $data = \sr::common('empty');
//        return $this->get_view("_CMS_Views.pages.structure",$data,$this->pages_layout);
//    }
//    public function getContact(){
//        $pages_data = $this->get_pages_data();
//        $data = \sr::common('empty');
//        $data['contact_txt_1'] = $pages_data['contact_txt_1'];
//        $data['contact_txt_2'] = $pages_data['contact_txt_2'];
//        $data['google_maps_embed_api_link'] = $pages_data['google_maps_embed_api_link'];
//        return $this->get_view("_CMS_Views.pages.contact",$data,$this->pages_layout);
//    }
//    public function getCareer(){
//        $pages_data = $this->get_pages_data();
//        $data = \sr::common('empty');
//        $data['career_txt'] = $pages_data['career_txt'];
//        return $this->get_view("_CMS_Views.pages.career",$data,$this->pages_layout);
//    }

    public function getDeveloper(){
        return view(get_location("pages.developer"));
    }











}