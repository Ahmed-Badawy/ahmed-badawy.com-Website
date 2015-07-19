<?php namespace App\Http\Controllers;

class AsolController extends BaseController {

	public function get_spacific_view($view,$data,$layout=DEFAULT_LAYOUT){
		if(isset($data['route_info'])){
			$route_info = $data['route_info'];
			unset($data['route_info']);
			$data = array_merge($data,$route_info);
		}
		if(Dev && \Request::has('debug')) err($data);
		if(Dev && \Request::has('debug-all')) err();
        $layout = view(get_location("Asol._layouts.default"),$data);
        $view = get_location($view);
        $view_obj = $layout->nest('content_layout',$view, $data);
        if(!Dev){
        	$html = $view_obj->render();
        	$page = overkill_minify($html);
			return $page;
		}
		return $view_obj;
	}


	public function admin_login_view(){
		$data = [
			"route_info"=>[
				"logo"=>'',
				"page_title" => "",
				"page_desc" => "",
				"page_img" => "api/apis.jpg",
				"keywords" => [],
				'logo'=>'home',
				'link'=> url('/')
			],
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Asol.admin.login",$data);
	}	
	public function admin_login_do(){
		$user_name = \Request::get('username');
		$password = \Request::get('password');
		$creditials = ["admin","admin"];
		// $creditials = ["asoladmin","admin456"];
		if($user_name==$creditials[0] && $password==$creditials[1]){
			return \Redirect::to("admin/contributors");
		}
		else return \Redirect::to("admin/login")->with("error","The Username/Password aren't correct");
	}	


	public function index(){
		$pages_data = $this->get_pages_data();
		$data = [
			"logo"=>'',
			"page_title" => "APIs Index",
			"page_desc" => "",
			"page_img" => "api/apis.jpg",
			"keywords" => [],
			'logo'=>'home',
			'link'=> url('/'),
			'theme'=>$this->themes[0],
		];
		$data['data_array'] = $data;
		$data['products'] = $pages_data['products'];
		// dd($data);
		return view (get_location("Asol/pages/main"),$data)->with($data);
	}	
	public function about_us(){
		$data = [
			"route_info"=>[
							"logo"=>'',
							"page_title" => "APIs Index",
							"page_desc" => "",
							"page_img" => "api/apis.jpg",
							"keywords" => [],
							'logo'=>'home',
							'link'=> url('/')
			],
			'theme'=>$this->themes[0],
		];
		return $this->get_spacific_view("Asol.pages.about-us",$data);
	}	
	public function contributor(){
		$pages_data = $this->get_pages_data();
		$data = [
			"route_info"=>[
							"logo"=>'',
							"page_title" => "APIs Index",
							"page_desc" => "",
							"page_img" => "api/apis.jpg",
							"keywords" => [],
							'logo'=>'home',
							'link'=> url('/')
			],
			'theme'=>$this->themes[0],
			'contributors'=>$pages_data['contributors'],
		];
		return $this->get_spacific_view("Asol.pages.contributor",$data);
	}	
	public function career(){
		$pages_data = $this->get_pages_data();
		$data = [
			"route_info"=>[
							"logo"=>'',
							"page_title" => "APIs Index",
							"page_desc" => "",
							"page_img" => "api/apis.jpg",
							"keywords" => [],
							'logo'=>'home',
							'link'=> url('/')
			],
			'theme'=>$this->themes[0],
			'career_txt'=>$pages_data['career_txt'],
		];
		return $this->get_spacific_view("Asol.pages.career",$data);
	}	
	public function contact(){
		$pages_data = $this->get_pages_data();
		$data = [
			"route_info"=>[
							"logo"=>'',
							"page_title" => "APIs Index",
							"page_desc" => "",
							"page_img" => "api/apis.jpg",
							"keywords" => [],
							'logo'=>'home',
							'link'=> url('/')
			],
			'theme'=>$this->themes[0],
			'contact_txt_1'=>$pages_data['contact_txt_1'],
			'contact_txt_2'=>$pages_data['contact_txt_2']
		];
		return $this->get_spacific_view("Asol.pages.contact",$data);
	}		
	public function product(){
		$pages_data = $this->get_pages_data();
		$data = [
			"route_info"=>[
							"logo"=>'',
							"page_title" => "APIs Index",
							"page_desc" => "",
							"page_img" => "api/apis.jpg",
							"keywords" => [],
							'logo'=>'home',
							'link'=> url('/')
			],
			'theme'=>$this->themes[0],
			'products'=>$pages_data['products'],
		];
		return $this->get_spacific_view("Asol.pages.product",$data);
	}	
	public function structure(){
		$data = [
			"route_info"=>[
							"logo"=>'',
							"page_title" => "APIs Index",
							"page_desc" => "",
							"page_img" => "api/apis.jpg",
							"keywords" => [],
							'logo'=>'home',
							'link'=> url('/')
			],
			'theme'=>$this->themes[0],
		];
		return $this->get_spacific_view("Asol.pages.structure",$data);
	}	



/**********************************************************************/

	public function get_pages_data(){
		$contributors_obj = new \contributor_model();
		$products_obj = new \products_model();
		$options_obj = new \options_model();
		$contributors_collection = $contributors_obj->all();
		$products_collection = $products_obj->all();

		$contact_txt_1 = $options_obj->where('name','contact_txt_1')->first();
		$contact_txt_2 = $options_obj->where('name','contact_txt_2')->first();
		$career_txt = $options_obj->where('name','career_txt')->first();

		$data =[
			'contributors'=>$contributors_collection,
			'products'=>$products_collection,
			'contact_txt_1'=>$contact_txt_1->desc,
			'contact_txt_2'=>$contact_txt_2->desc,
			'career_txt'=>$career_txt->desc,
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

	public function admin_panel($page='contributors'){
		$pages_data = $this->get_pages_data();
		$data = [
			"route_info"=>[
							"logo"=>'',
							"page_title" => "APIs Index",
							"page_desc" => "",
							"page_img" => "api/apis.jpg",
							"keywords" => [],
							'logo'=>'home',
							'link'=> url('/')
			],
			'theme'=>$this->themes[0],
			'page'=>$page,
			'contributors'=>$pages_data['contributors'],
			'products'=>$pages_data['products'],
			'contact_txt_1'=>$pages_data['contact_txt_1'],
			'contact_txt_2'=>$pages_data['contact_txt_2'],
			'career_txt'=>$pages_data['career_txt'],
		];
		// return view(get_location("Asol.admin.main"),$data);
		return $this->get_view("Asol.admin._layout",$data);
	}	

	public function add_contributer(){
		$img_file = \Request::file('upload_img');	
		$img_save_path = real_imgs_dir."asol/contributors";
		$img_name = $this->upload_file($img_file,$img_save_path);
		$input = \Request::all();
		// dd($input);
		$new_array = [
			"name"			=>			$input['name'],
			"desc"			=>			$input['desc'],
			"img"			=>			$img_name,
			"priority"		=>			100,
		];
		$obj = new \contributor_model();
		$obj->create($new_array);
		return \Redirect::back();
	}
	public function delete_contributer($id){
		$obj = new \contributor_model();
		$obj->find($id)->delete();
		return \Redirect::back();
	}

	public function add_product(){
		$img_file = \Request::file('upload_img');	
		$img_save_path = real_imgs_dir."asol/products";
		$img_name = $this->upload_file($img_file,$img_save_path);
		$input = \Request::all();
		// dd($input);
		$new_array = [
			"name"			=>			$input['name'],
			// "desc"			=>			$input['desc'],
			"img"			=>			$img_name,
			"priority"		=>			100,
		];
		$obj = new \products_model();
		$obj->create($new_array);
		return \Redirect::back();
	}
	public function delete_product($id){
		$obj = new \products_model();
		$obj->find($id)->delete();
		return \Redirect::back();
	}

	public function add_structure(){
		$img_file = \Request::file('upload_img');	
		$img_save_path = real_imgs_dir."asol/structure";
		$file_name = "haekl";
		$img_name = $this->upload_file($img_file,$img_save_path,$file_name,'jpg');
		return \Redirect::back();
	}

	public function add_contact(){
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

	public function add_career(){
		$options_obj = new \options_model();
		$input = \Request::all();
		$update_array = [
			"desc"=>$input['txt1']
		];
		$options_obj->where('name','career_txt')->update($update_array);
		return \Redirect::back();
	}


	public function developer(){
		return view(get_location("pages.developer"));
	}



}
