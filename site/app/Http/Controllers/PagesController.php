<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends BaseController {


/********************************************************************************
Pages
********************************************************************************/
	public function home(){
		$data = [
			"route_info" => \sr::pages('home'),
			'theme'=> $this->themes[0] ,
		];
		return $this->get_view("Pages.home",$data);
	}
/**********************************************************************/


/*********************************************************************
CV
**********************************************************************/
	public function cv(){
		$data = [
			"route_info"=>\sr::pages("cv"),
			'theme'=>$this->themes[4],
			'fake'=>false,
		];
		return $this->get_view("Pages.cv2",$data);
	}
	public function cv_application(){
		$data = [
			"route_info"=>\sr::pages("cv"),
			'theme'=>$this->themes[4],
		];
		return $this->get_view("Pages.cv-application",$data);
	}
	public function cv_download($type){
		$file= public_path(). "/site-docs/personal/CV/cv.".$type;
		// $headers = array(
		// 	'Content-Type: application/pdf',
		// );
		return response()->download($file,"Ahmed Badawy - CV.".$type);
	}
	public function send_cv(){
		$to = \Request::input("email");
		$this->send_to_email = $to;
		\Mail::send('emails/cv/cv-email-temp',[],function($message){
			$message->to($this->send_to_email , "You");
			$message->subject("This is My C.V - (Ahmed-Badawy.com)");
			$message->from( social('admin_email') ,"-||--Ahmed Badawy--أحمد بدوى--||-");
			$pathToFile = $file= public_path(). "/site-docs/personal/CV/cv.jpg";
			$message->attach($pathToFile, ['as' => "Ahmed-Badawy(CV) .jpg"]);
		});
		echo "<script>alert('The C.V Have Been Sent to the wanted Address.')</script>";
		return \Redirect::back()->with('s-msg', 'Message Was Sent');
	}
/**********************************************************************/


/*********************************************************************
Contact
**********************************************************************/
	public function get_contact(){
		$data = [
			"route_info"=>\sr::pages("contact"),		
			'theme'=>$this->themes[4],
		];
		// $response = \Event::fire(new \App\Events\testEvent($data));
		return $this->get_view('Pages.contact',$data);	
	}
	public function post_contact(){
		$info_array = [
			'from' => \Request::input("email"),
			'from_name' => "User At Contact page",
			'to' => social('admin_email'),
			'to_name' => "Ahmed Badawy",
			'subject' => "Msg From Contact Page in: ".base_url,
			"msg" => \Request::input('msg')
		];
//		dd("hello");
		$this->send_msg($info_array);
		return \Redirect::back()->with('s-msg', 'Message Was Sent');
		// $response = \Event::fire(new \App\Events\testEvent());
	}
	
//*******************************************************************************
	




}
