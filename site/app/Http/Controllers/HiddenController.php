<?php namespace App\Http\Controllers;

class HiddenController extends BaseController {

/********************************************************************************
Hidden	  					
********************************************************************************/
	public function index(){
		$data = [
			"route_info"=>\sr::common("hidden_index"),
			'theme'=>$this->themes[4],
		];
		return $this->get_view("Hidden.index",$data);
	}	
//*******************************************************************************

/********************************************************************************
Inhertance Me
********************************************************************************/
	public function inhertance_me(){
		$data = [
			"route_info" => \sr::hidden("inhertance_me"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Hidden.inhertance-me",$data);
	}
//*******************************************************************************

/*****************************************************************
PornStars Search
*****************************************************************/
	public function pornstars(){
		$data = [
			'route_info'=>\sr::hidden("pornstars"),
			"ng_app"=>"myApp",
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Hidden/pornstars/index",$data); 
	}
	public function pornstars_get($page,$q=null){
		$items_per_page = 10;
		$obj = new \pornstars_model();
		$skip = ($page-1) * $items_per_page;
		if($q==null){
			$pornstars = $obj->take($items_per_page)->skip($skip)->get();
			$total_db_count = $obj->all()->count();
		}else{
			$pornstars = $obj->search($q)->take($items_per_page)->skip($skip)->get();
			$total_db_count = $obj->search($q)->count();
		}
		$res["meta"]["total_db_count"] = $total_db_count;
		$res["meta"]["count"] = $pornstars->count();
		$res["meta"]["pages_num"] = ceil($total_db_count/$items_per_page);
		$res["meta"]["request_page"] = $page;
		$res["pornstars"] = $pornstars;
		return $res;
	}
	public function pornstars_pop(){
		ini_set('max_execution_time', 3600);

		$pornstars = lists::common("pornstars");
		$obj = new pornstars_model();
		foreach($pornstars as $pornstar){
			$obj->create($pornstar);
		}
		err($pornstars);
	}
	
/****************************************************************/











/*********************************************************************
Porn Browser
**********************************************************************/
	public function index_porn(){
		$data = [
			'page_title'=>'Porn Browser',
			'page_desc'=>"   ",
			'page_img' => imgs_dir."   ",
			'theme'=>$this->themes[0],
			'ng_app'=>"myApp",
		];
		return VM("projects/porn/index",$data,"bootstrap-watch"); 
	}
	public function porn_list(){
		$input = Input::all();
		$items = Porn_Model::take(100)->get();
		return $items;
	}
	public function porn_operate(){
		$input = Input::all();
		// if($input['op'] == "open_file"){
			// $ar = explode("/",$input['file']);
			// $file_name = array_pop($ar);
			// $file_path = implode('\\',$ar);
			// $str = "pushd \"\\\\10.0.1.5\\g\\$file_path\"";
			// dd($str);
			// exec($str);
			// exec("$file_name");
			// exec("popd");
			// exec("cd c:/xampp/htdocs");
			// exec("1.jpg");
			// header("Location: http://localhost/cmd.php?exec1=cd c:/xampp/htdocs&exec2=1.jpg");
			// die();
		// }
		dd($input);
		die;
	}
	
	
	public function populate_db(){
		$list = lists::common("xxx");
		// err($list);
		foreach($list as $val){
			// err($val);
			$ar = explode("/",$val[0]);
			$data["title"] = $ar[count($ar)-1];
			$data["full_path"] = $val['0'];
			$data['file_size'] = $val['1'];
			$data['last_modified'] = $val['2'];
			$data['ext'] = pathinfo($val[0], PATHINFO_EXTENSION);
			$data['main_cate']= $ar[1];
			$data['sub_cate1']= (isset($ar[2])) ? $ar[2] : null;
			$data['sub_cate2']= (isset($ar[3])) ? $ar[3] : null;
			$data['sub_cate3']= (isset($ar[4])) ? $ar[4] : null;
			$data['sub_cate4']= (isset($ar[5])) ? $ar[5] : null;
			Porn_Model::create($data);
		}
		// err($data);
	}
	
/**********************************************************************/

}