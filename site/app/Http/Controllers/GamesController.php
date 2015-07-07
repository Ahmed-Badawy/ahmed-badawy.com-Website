<?php namespace App\Http\Controllers;

class GamesController extends BaseController {


/********************************************************************************
Projects	  					
********************************************************************************/
	public function index(){
		$data = [
			"route_info"=>\sr::common("projects_index"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Games.index",$data);
	}	
//*******************************************************************************	


/*********************************************************************
Chess
**********************************************************************/
	public function chess(){
		$data = [
			"route_info"=>\sr::games("chess"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Games.chess",$data);
	}	
/**********************************************************************/


/********************************************************************************
Maze1	  					
********************************************************************************/
	public function maze1(){
		$data = [
			"route_info"=>\sr::common("projects_index"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Games.maze1",$data);
	}	
//*******************************************************************************	


/********************************************************************************
text image	  					
********************************************************************************/
	public $default_text_image = "ramadan";

	public function text_image($type=null,$data=null){
		if(!$type || empty($type)) return \Redirect::to('games/text-image/'.$this->default_text_image);
		if(!$data) $data = [
			"route_info"=>\sr::games("text_img"),
			'theme'=>$this->themes[0],
			'ng_app'=>"myApp",
			// 'ng_controller'=>"googleCurrency",
			'layout'=>$type,
		];
		// dd($data);
		return $this->get_view("Games.text-img.index",$data);
	}	
	public function text_image_save(){
		$img_data = \Request::get("img");
		$img_data = str_replace('data:image/png;base64','',$img_data);
		$img_data = str_replace(' ','+',$img_data);
		$img = base64_decode($img_data);
		$dynamic_img_name = uniqid().'.png';
		$path = real_imgs_dir."games/text-images/saved-images/".$dynamic_img_name;
		if(file_put_contents($path,$img)){
			print $dynamic_img_name;
		}else{
			header('HTTP/1.1 500 Internal Server Error');
		}
	}	
	public function text_image_download($img_name){
		$file= real_imgs_dir."games/text-images/saved-images/".$img_name;
		return response()->download($file,"image-".$img_name);
	}	

	public function text_image_share($img_name,$title){
		$data = [
			"route_info"=>\sr::games("text_img"),
			'theme'=>$this->themes[0],
			'ng_app'=>"myApp",
			// 'ng_controller'=>"googleCurrency",
		];
        $title = str_replace( "_" , " " , $title );
		$data["route_info"]['page_title'] = $title;
		$data["route_info"]['page_desc'] = "برنامج جامد بيحط أسمك على مجموعة صور و برامج بتحبها. لازم تجرب البرنامج الرهيب ده. جرب و حط اسمك على الحجات إلى بتحبها.";
		$data["route_info"]['layout'] = $this->default_text_image;
		$full_image_path = real_imgs_dir."games/text-images/saved-images/".$img_name;
		// dd($full_image_path);
		if(file_exists($full_image_path)){
			$data["route_info"]['page_img'] = "games/text-images/saved-images/".$img_name;
		}else{
			$data["route_info"]['page_img'] = "games/text-images/saved-images/-placeholder.jpg";
		}
		// dd($full_image_path);
		return $this->text_image($this->default_text_image,$data);
		// return $this->get_view("Games.text-img.index",$data);
	}	

//*******************************************************************************	
	




}