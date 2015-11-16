<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ApiController extends BaseController {

/********************************************************************************
APIs	  					
********************************************************************************/
	public function index(){
		$data = [
			"route_info"=>\sr::common("apis_index"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Apis.index",$data);
	}	
//*******************************************************************************	


/*********************************************************************
Image Thumb API	
**********************************************************************/	
	public function return_img_thumb_view(){
		$data = [
			"route_info"=>\sr::api("thumb-gene"),
			'theme'=>$this->themes[0],
			'ng_app'=>"myApp",
			'ng_controller'=>"main",
		];
		return $this->get_view("Apis.thumb",$data);	
	}
	public function return_img_thumb($src){
		$input = \Request::all();

		$width= (isset($input['width'])) ? $input['width'] : 140;
		$height= (isset($input['height'])) ? $input['height'] : 140;
		$save= isset($input['save']);

		$path_array = explode(".",$src);
		$ext = array_pop($path_array);
		$file_path = implode(".",$path_array);
		$thumb_format = $file_path."-$width"."x"."$height.jpg";

    	if(file_exists(real_imgs_dir.$thumb_format)){
    		$img = imgs_dir.$thumb_format;
    	}else{      // Create Thumb
    		if(!file_exists(real_imgs_dir.$src)) die("$src --> image doesn't exist.") ;
	    	else{
//				dd();
				$save_dir = false;
				if(CREATE_THUMBS && $save) $save_dir = real_imgs_dir.$thumb_format;
				elseif( ($width!=140 || $height!=140) ) $save_dir = false; //if !=140 don't save

//				dd($save_dir);
				create_thumbnail(real_imgs_dir.$src , $save_dir , $width,$height);
		    	$img = imgs_dir.$thumb_format;
		    }
		    // die("fuck Get Thumb Didn't work on : $src");
    	}
    	$this->return_img($img,'jpg'); 
	}
	private function return_img($file_dir,$type='jpg'){
		header("Content-Type: image/".$type);
    	$fp = fopen($file_dir,"rb");
    	fpassthru($fp);
	}
/**********************************************************************/


/*********************************************************************
QR Code Generator API
**********************************************************************/
	public function qr_generator_view(){
		$data = [
			"route_info"=>\sr::api("qr-gene"),
			'theme'=>$this->themes[0],
			'ng_app'=>"myApp",
			'ng_controller'=>"main",
		];
		return $this->get_view("Apis.qr",$data);		
	}
	public function qr_generator($text){
		$input = \Request::all();
		$size= (isset($input['size'])) ? $input['size'] : 200;
		$padding= (isset($input['padding'])) ? $input['padding'] : 10;

		header('Content-Type: image/png');
		$qr = new \Endroid\QrCode\QrCode();
		$qr->setText($text);
		$qr->setSize($size);
		$qr->setPadding($padding);
		$qr->render();
        // return imagejpeg($qr->image);
	}	
/**********************************************************************/


/*********************************************************************
QR Code Generator API
**********************************************************************/
	public function upc_generator_view(){
		$data = [
			"route_info"=>\sr::api("upc-gene"),
			'theme'=>$this->themes[0],
			'ng_app'=>"myApp",
			'ng_controller'=>"main",
		];
		return $this->get_view("Apis.upc",$data);		
	}	
/**********************************************************************/


/*********************************************************************
Captcha Generator API
**********************************************************************/
	public function captcha_generator_view(){
		$fonts = dir_to_array(base_path("public/site-docs/captcha-fonts/")."/");
		$data = [
			"route_info"=>\sr::api("captcha-gene"),
			'theme'=>$this->themes[0],
			'ng_app'=>"myApp",
			'ng_controller'=>"main",
			"fonts" => $fonts
		];
		return $this->get_view("Apis.captcha-gene",$data);		
	}
	public function captcha_generator($text=false){
		$input = \Request::all();
		$text = $text ? $text : generate_rand_string(6);
		$font = (isset($input['font'])) ? base_path("public/site-docs/captcha-fonts/".$input['font']) :
											 base_path("public/site-docs/captcha-fonts/COMICZ.TTF");
		$img_height = isset($input['height']) ? $input['height'] : 100;
		$img_width = isset($input['width']) ? $input['width'] : 200;
		$begin_point = $img_height/2;
header('Content-Type: image/png');
$im = imagecreatetruecolor($img_width, $img_height);
$background_color = imagecolorallocate($im, 40, 40, 40);
$first_layer_color = imagecolorallocate($im, 100, 100, 100);
$second_layer_color = imagecolorallocate($im, 200, 200, 200);
$third_layer_color = imagecolorallocate($im, 250, 250, 250);
imagefilledrectangle($im, 0, 0, $img_width, $img_height, $background_color);
imagettftext($im, rand(30,45), rand(-50,50), rand(20,40), rand($begin_point-10,$begin_point+10), $first_layer_color, $font, $text);
imagettftext($im, 25, rand(-20,20), rand(20,40), rand($begin_point-10,$begin_point+10), $second_layer_color, $font, $text);
imagettftext($im, 30, rand(-20,20), rand(10,30), rand($begin_point-10,$begin_point+10), $third_layer_color, $font, $text);
imagepng($im);
imagedestroy($im);
	}	
/**********************************************************************/




}
