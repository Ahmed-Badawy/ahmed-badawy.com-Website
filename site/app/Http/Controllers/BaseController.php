<?php namespace App\Http\Controllers;

class BaseController extends Controller {


public $themes = [
			0 => 'default',
			1 => 'amelia',
			2 => 'cerulean',
			3 => 'cosmo',
			4 => 'cyborg',
			5 => 'darkly',
			6 => 'flatly',
			7 => 'journal',
			8 => 'lumen',
			9 => 'readable',
			10 => 'simplex',
			11 => 'slate',
			12 => 'spacelab',
			13 => 'suberhero',
			14 => 'united',
			15 => 'yeti',
];
public $layouts = [
			0 => "bootstrap-watch",
];




	public function __construct(){
		$this->backup_db();
		$this->backup_files();
//		$this->build_site_map();
//		$this->send_mail();
	}

	public function test_email_view(){
		return view("emails.cv.cv-email-temp");
	}


	public function ng_temp($temp){
		// return $temp;
		return view(get_location($temp));
	}
	
	public function get_view($view,$data,$layout=DEFAULT_LAYOUT){
		if(isset($data['route_info'])){
			$route_info = $data['route_info'];
			unset($data['route_info']);
			$data = array_merge($data,$route_info);
		}
		if(Dev && \Request::has('debug')) err($data);
		if(Dev && \Request::has('debug-all')) err();
        $layout = view(get_location("-Layouts.$layout.-box"),$data);
        $view = get_location($view);
        $view_obj = $layout->nest('content_layout',$view, $data);
        if(!Dev){
        	$html = $view_obj->render();
        	$page = overkill_minify($html);
			return $page;
		}
//		dd($data);
		return $view_obj;
	}

/**
 * need the following vars:
 * $send_info['to']
 * $send_info['to_name']
 * $send_info['from']
 * $send_info['from_name']
 * $send_info['subject']
 * $send_info['msg']
 */
//	public function send_msg($info_array){
//		$this->send_info = $info_array;
//		\Mail::send('emails.send_me_msg',$info_array,function($message){
//			$message->to($this->send_info['to'] , $this->send_info['to_name']);
//			$message->from($this->send_info['from'] , $this->send_info['from_name']);
//			$message->subject($this->send_info['subject']);
//		});
//		echo "<script>alert('Your Message Was Sent Successfully !')</script>";
//	}

	public function send_msg($info_array){
		$res = mass_mail($info_array["to"],$info_array['subject'],$info_array['msg'],null, $info_array['from']);
		echo "<script>alert('Your Message Was Sent Successfully !')</script>";
	}


	public function backup_db(){
			// \Cache::forget("last_db_backup");
			if(!\Cache::has('last_db_backup')){				
				\Cache::put('last_db_backup', time() , 5000); // 3.5 days
				// $dir  = "D:/xampp/htdocs/ahmed-badawy.com/backups/db"; // directory files
				$dir  = base_path("backups/db"); // directory files
				$db_name = "courtaks_maindb";
				$output_name = time()."-".$db_name; // output name sql backup
				$db_user_name 		= 	"root";
				$db_user_pass 	= 	"";
				$db_host = "localhost";
				backup_database($dir, $output_name,$db_host,$db_user_name,$db_user_pass,$db_name); // execute
			}
	}

	public function backup_files(){
		// \Cache::forget("last_files_backup");
		if(!\Cache::has('last_files_backup')){
			\Cache::put('last_files_backup', time() , 14400); // 10 days
			$zipper = new \ZipperClass;
			$zipper->add_dir(base_path("app"));
			$zipper->add_dir(base_path("resources"));
			$zipper->add_dir(base_path("database"));
			$zipper->add_dir(base_path("public/site-files"));
			$zipper->store("backups/files/".time()."-files.zip");
		}
	}	

	public function build_site_map(){
		$site_map_links = [];
		$site_map_imgs = [];
		$site_map_vids = [];
		$time = date("Y-m-d",time())."T09:13:31+00:00";
//		dd($time);

		$search_files = array_merge(find_all_files(base_path("public/site-imgs")),find_all_files(base_path("public/site-docs")));
//		dd($search_files);

		$imgs_ext_array = ['jpg','gif','png','ico'];
		$vids_ext_array = ['flv','mp4','ogv','mp3'];
		foreach($search_files as $file){
			$file_ext = get_file_data($file)['ext'];
			$file_array = explode("/",$file);
			unset($file_array[0]);
			$final_file = implode("/",$file_array);
			if( in_array($file_ext,$imgs_ext_array) ){
				$site_map_imgs[] = REMOTE_SITE_URL.$final_file;
			}elseif( in_array($file_ext,$vids_ext_array) ){
				$site_map_vids[] = REMOTE_SITE_URL.$final_file;
			};
		}
		foreach(\sr::bulid_links_site_map() as $link){
			$site_map_links[] = str_replace("localhost/ahmed-badawy.com","ahmed-badawy.com/site",$link);
		}
		$data =[
			"site_map_links" => $site_map_links,
			"site_map_imgs" => $site_map_imgs,
			"site_map_vids" => $site_map_vids,
			"time" => $time
		];
//		dd($data);
		$view = view("site-map-generator.site-map",$data)->render();
		// Write the contents back to the file
		$file = base_path("backups/site-maps/site-map.xml");
		file_put_contents($file,$view);
	}


	private function send_mail(){
		$data = [
			"passed_data" => "this is passed data from the controller",
		];
		\Mail::send('emails.testing_email', $data, function($message){
			$message->from('admin@ahmed-badawy.com', 'ahmed badawy');
			$message->to('couratks@gmail.com')->cc('courtaks@yahoo.com');
			// $message->attach($pathToFile);
		});
	}



		
}
