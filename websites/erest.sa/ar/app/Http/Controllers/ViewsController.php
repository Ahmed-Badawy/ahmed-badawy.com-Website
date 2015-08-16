<?php namespace App\Http\Controllers;

use App\Http\Controllers\CMS\CMSProviderController;

class ViewsController extends CMSProviderController{





/*****************************************************
**  Main Menu
*****************************************************/
	public function getIndex(){
        $data = $this->get_pages_data();
//        dd($data);
        return view("views.pages.index",$data);
    }
    public function getAbout(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "من نحن" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.about",$data);
    }

    public function getServices(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "الخدمات" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.services",$data);
    }


    public function getDomain(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "أحجز دومينك" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.domain",$data);
    }

    public function getProjects(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "الأعمال" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.projects",$data);
    }

    public function getContact(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "أتصل بنا" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
//        dd($data);
        return view("views.pages.contact",$data);
    }
/*--------------------------------------------------*/












    public function getServicesDesign(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "الخدمات" => url('services'),
                "تصميم المواقع" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.services_pages.services-design",$data);
    }
    public function getServicesDevelopment(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "الخدمات" => url('services'),
                "تطوير البرمجيات" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.services_pages.services-development",$data);
    }
    public function getServicesMarketing(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "الخدمات" => url('services'),
                "تسويق المواقع" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.services_pages.services-marketing",$data);
    }
    public function getServicesSms(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "الخدمات" => url('services'),
                "تسويق المواقع" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.services_pages.services-sms",$data);
    }
    public function getServicesMobileApp(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "الخدمات" => url('services'),
                "تسويق المواقع" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.services_pages.services-mobile-app",$data);
    }
    public function getServicesPrinting(){
        $data = [
            "breadcrumbs"=>[
                "الصفحة الرئيسية" => url('/'),
                "الخدمات" => url('services'),
                "تسويق المواقع" => null,
            ]
        ];
        $data = array_merge($this->get_pages_data(),$data);
        return view("views.pages.services_pages.services-printing",$data);
    }




/**********************************************************************/

    public function postSendContactEmail(){
        $input = \Request::all();
        $to = ADMIN_EMAIL;
        $subject = $input['name']." - message from contact page in erest.sa";
        $message = $input['name']." - ".$input['email']." : \n".$input['message'];
        $res = mass_mail($to,$subject,$message,null,$input['email']);
        $back = \URL::previous();
        echo "\n Message Was Sent \n Go Back From Here: <a href='$back'>$back</a>";
    }







}
