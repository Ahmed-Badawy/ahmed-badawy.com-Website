<?php namespace App\Http\Controllers;

class ProjectsController extends BaseController {


/********************************************************************************
Projects	  					
********************************************************************************/
	public function index(){
		$data = [
			"route_info"=>\sr::common("projects_index"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Projects.index",$data);
	}	
//*******************************************************************************	


/********************************************************************************
Currency  					
********************************************************************************/
	public function currency(){
		$data = [
			"route_info"=>\sr::projects("currency"),
			'theme'=>$this->themes[4],
			"currency_list"=> \Lst::common("currency"),
			'ng_app'=>"myApp",
			'ng_controller'=>"googleCurrency",
		];
//		die('hi');
		return $this->get_view('Projects.currency.currency',$data);		
	}
	public function google_currency_calc($from,$to,$amount=null){
		$from_Currency = $from;
		$to_Currency = $to; 

		$one = file_get_contents("https://www.google.com/finance/converter?a=1&from=$from_Currency&to=$to_Currency");
		$one = explode("<span class=bld>",$one);
		$one = explode("</span>",$one[1]);  

		$rate = preg_replace("/[^0-9\.]/", null, $one[0]);
		$res = ['site'=>'ahmed-badawy.com','from'=>$from,'to'=>$to,'rate'=>$rate];
		if($amount!=null){ $res['result']=$rate*$amount; $res['amount']=$amount;}
		return $res ;
	}
/**********************************************************************/	

/*********************************************************************
Currency Advanced
**********************************************************************/
	public function currency_advanced(){
		$data = [
			"route_info"=>\sr::projects("currency"),
			'theme'=>$this->themes[0],
			'json_array'=>$this->get_exchange_rates(),
			// "currency_list"=> lists::common("currency"),
		];
		// err($data);
		// return $this->get_view('Projects.currency2',$data);	
		return $this->get_view('Projects.currency.currency_advanced',$data);		
	}
	public function get_exchange_rates(){
//		\Cache::forget('money_exchange_rates');
		if (\Cache::has('money_exchange_rates')){
			$data = \Cache::get('money_exchange_rates');
		}elseif(is_connected("openexchangerates.org")){
			$api_key = "bbc128aa6f3645d78b098f0eef3dd533";
			$json = file_get_contents("http://openexchangerates.org/api/latest.json?app_id=$api_key");
			$json = json_decode($json,true);
			$data['rates'] = $json['rates'];
			$data['base'] = $json['base'];
			// $data['json_rates'] = json_encode($json['rates']);
			\Cache::add('money_exchange_rates',$data,360);
			\Cache::add('money_exchange_rates_default',$data,50000);
		}else{
			$data = \Cache::get('money_exchange_rates_default');
		}
		$currency_list = \Lst::common('currency1');
		$arr["site_name"] = "Ahmed-Badawy.com";
		$arr["base"] = $data['base'];
		foreach($currency_list as $key=>$val){
			$n = [
				'short'=>$key,
				"name"=>$val,
				"value"=>$data['rates'][$key],
			];
			$arr['rates'][$key] = $n;
		}
		return $arr;
	}
//*******************************************************************************


/*********************************************************************
Domain Search
 **********************************************************************/
	public function domain(){
		$data = [
			"route_info"=>\sr::projects("domain"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view('Projects.domain.index',$data);
	}
	public function domain_search(){
		$domain = \Request::input('domain');
		$ans = [];
		$key = "enqgr7tqok";
		$ext_arr = ['com','net','org','eg','info','uk','biz','cc','co','me','mobi','tv','us','edu'];
//		$ext_arr = ['com','net'];
		foreach($ext_arr as $ext){
			$url = "http://freedomainapi.com/?key=".$key."&domain=".$domain.".".$ext;
			$data = file_get_contents($url);
			$data = json_decode($data,true);
			$data['ext'] = $ext;
			$ans[$ext] = $data;
		}
//		dd($ans);
//		err($ans);
		return $ans;
	}
//*******************************************************************************


/*********************************************************************
Consumption calculator
 **********************************************************************/
	public function electricity_consumption(){
		$data = [
			"route_info"=>\sr::projects("electricity"),
			'theme'=>$this->themes[0],
			'ng_app'=> 'myApp',
		];
		return $this->get_view('Projects.consumption.electricity',$data);
	}
	public function water_consumption(){
		$data = [
			"route_info"=>\sr::projects("water"),
			'theme'=>$this->themes[0],
			'ng_app'=> 'myApp',
		];
		return $this->get_view('Projects.consumption.water',$data);
	}
//*******************************************************************************


/********************************************************************************
Social ID
********************************************************************************/
	public function social_id(){
		$data = [
			"route_info"=>\sr::projects("social-id"),
			'theme'=>$this->themes[0],
			'ng_app'=> 'myApp',
			'ng_controller'=>'social_id_controller'
		];
//		err($data);
		return $this->get_view('Projects.social_id',$data);
	}
	public function social_id_citys_codes(){
		$array = \Lst::common('social_cities');
		return $array;
	}
//*******************************************************************************

/*********************************************************************
Persentage			
**********************************************************************/
	public function persentage(){
		$data = [
			'route_info'=>\sr::projects("persentage"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Projects/persentage/index",$data);
	}
	public function persentage_save(){
		$persons = \Request::input("persons");
		$persentage_id = \persentage_model::max('persentage_id');
		foreach($persons as $person){
			$db_input = [
				"name"=>$person['name'],
				"persent"=>$person['overall_persent'],
				"persentage_id"=>$persentage_id+1,
				"persentage_name"=>$person['query_name'],
				"user_id"=>1
			];
			$create = \persentage_model::create($db_input);
			// dd($persons);
			// if($create) return response()->json(['Saved' => '200']);
			if($create) \Response::json('Saved', 200);
			else return $create;
		}
	}
	public function persentage_list($q=null){
		if($q==null){
			$arr = \persentage_model::where("user_id",1)->lists("persentage_name")->unique();
			return $arr;
		}else{
			$p = \persentage_model::where("user_id",1)->where("persentage_name",$q)->get();
			foreach($p as $val){
				$new_array[] = $val->p_unique_id();
			}
			return $new_array;
		}
	}		
/**********************************************************************/

/********************************************************************************
Postal Codes
********************************************************************************/
	public function postal_index(){
		$data = [
			'route_info'=>\sr::projects("postalcodes"),
			'theme'=>$this->themes[0],
			'ng_app'=>"myApp",
		];
		return $this->get_view('Projects.postal.index',$data);	
	}

	public function postal_codes_array(){
		$array = \Lst::common('postal_codes');
		return $array;
	}	
	public function postal_offices_query_info(){
		$q = \Request::Input('q');
		$query = regexp_query_ready($q);
		// dd($query);
		$out = \postal_model::
		where('office', 'REGEXP', $query )
		->orWhere('city', 'REGEXP', $query )
		->orWhere('area', 'REGEXP', $query )
		->orWhere('address', 'REGEXP', $query )
	           ->get();
		return $out;
	}
/**********************************************************************/

/*********************************************************************
Movie Actors
**********************************************************************/
	public function actors(){
		$data = [
			'route_info'=>\sr::projects("actors"),
			"ng_app"=>"myApp",
			'theme'=>$this->themes[0],
		];
		return $this->get_view("Projects/actors/index",$data); 
	}
	public function actors_get($page,$q=null){
		$items_per_page = 10;
		$obj = new \actors_model();
		$skip = ($page-1) * $items_per_page;
		if($q==null){
			$pornstars = $obj
				->take($items_per_page)
				->skip($skip)
				->orderBy('rate','desc')
				->orderBy('id','asc')
				->get();
			$total_db_count = $obj->all()->count();
		}else{
			$pornstars = $obj->search($q)->take($items_per_page)->skip($skip)->get();
			$total_db_count = $obj->search($q)->count();
		}
		$res["meta"]["total_db_count"] = $total_db_count;
		$res["meta"]["count"] = $pornstars->count();
		$res["meta"]["pages_num"] = ceil($total_db_count/$items_per_page);
		$res["meta"]["request_page"] = $page;
		$res["meta"]["session"] = \Session::get('actor_rate',[]);
		$res["pornstars"] = $pornstars;
		return $res;
	}
	public function actors_rate(){
		$prams = \Request::all();
		$obj = new \actors_model();
		$actor = $obj->find($prams['id']);
		$actor->rate = $actor->rate + $prams['rate'];
		$actor->rate_count = $actor->rate_count + 1;
		$actor->save();

		// $session = \Session::get('actors_rate',[]);
		// \Session::push( 'actor_rate.'.$prams['id'] , $prams['rate'] );
		// return $actor;
		// $actor->rate = $actor->rate
		// $actor->rate_count = 
		// $user->rate = 'john@foo.com';
		// $user->save();
	}
	// public function pop_actors(){
	// 	ini_set('max_execution_time', 3600);

	// 	$actors = \Lst::common("actors");
	// 	$obj = new \actors_model();
	// 	foreach($actors as $actor){
	// 		$obj->create($actor);
	// 	}
	// 	err($actors);
	// }
/**********************************************************************/


/********************************************************************************
Count Down
********************************************************************************/
	public function index_countDown(){
		$data = [
			"route_info" => \sr::projects("countdown"),
			'theme'=>$this->themes[0],
			'list' => \countdown_model::all(),
		];
		return $this->get_view("Projects.countDown.index",$data);
	}
	public function save_countDown(){
		$input = \Request::all();
		$date = explode("/",\Request::Input('date'));
		$time_str = explode(' ',\Request::Input('time'));
		$exact_time = explode(':',$time_str[0]);
		$time_array = [
			'year'=>$date[0],
			'month'=>$date[1],
			'day'=>$date[2],
			'hour'=>$exact_time[0],
			'min'=>$exact_time[1],
			'zone'=>end($time_str)
		];
		if(strtolower($time_array['zone'])=='pm') $time_array['hour'] = $time_array['hour']+12;
		$str = sprintf('%s-%s-%s %s:%s',$time_array['year'],$time_array['month'],$time_array['day'],$time_array['hour'],$time_array['min']);
		$dateTime = new \DateTime($str);
		$db_info = [
			"title"=>$input['title'],
			"text"=>$input['text'],
			"time"=>$dateTime->getTimestamp(),		
		];
		// dd($db_info);
		$count_down_info = \countdown_model::create($db_info);
		return redirect("projects/countdown/".$count_down_info->id);
	}
	public function view_countDown($evt_id){
		$evt_info = \countdown_model::find($evt_id);
		$time_stamp = $evt_info->time;
		$dateTime = new \DateTime();
		$dateTime->setTimestamp($time_stamp);
		$data = [
			"route_info" => \sr::projects("countdown"),
			'theme'=>$this->themes[0],
			"evt_info"=>$evt_info,
			"time"=>$dateTime,
		];
		return $this->get_view("Projects.countDown.view",$data);
	}
	public function list_countDown(){
		$data = [
			"route_info" => \sr::projects("countdown"),
			'theme'=>$this->themes[0],
			'list'=>\countdown_model::all()
		];
		return $this->get_view('Projects.countDown.list',$data);			
	}		
//*******************************************************************************

/********************************************************************************
Favorite Websites Manager					
********************************************************************************/
	public function favorite_index(){
		$data = [
			'route_info'=>\sr::projects("favorite"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view('Projects.favorite.index',$data);	
	}
	public function get_favorite($get_what){
		$real_cates = \fav_websites_model::lists('list')->unique()->toArray();
		$cates = array_merge(['all'], $real_cates);
		if($get_what == 'all') $sites = \fav_websites_model::all();
		else $sites = \fav_websites_model::where('list',$get_what)->get();
		$new_sites = [];
		foreach($sites as $site){
			$subs = \fav_websites_model::where('sub',$site->id)->get();
			if(!empty($subs)) $site->subs=$subs;			
			if(!empty($site->url) && $site->sub==null) $new_sites[] = $site;
		}
		$data = [
			'cates' => $cates,
			'real_cates'=>$real_cates,
			'sites'=>$new_sites,
		];
		return $data;
	}
	public function save_favorite($save_what){
		if($save_what == 'cate') $create = ['list'=>\Request::input('name')];
		elseif($save_what == 'site') $create = [
						'title'=>\Request::input('title'),
						'url'=>\Request::input('url'),
						'desc'=>\Request::input('desc'),
						'list'=>\Request::input('cate'),
						'img'=>$this->save_site_img(\Request::input('title'),\Request::input('url')),
							];
		elseif($save_what == 'add-sub') $create =[
						'title'=>\Request::input('newSub')['Title'],
						'url'=>\Request::input('newSub')['Url'],
						'sub'=>\Request::input('id'),
							];
		elseif($save_what == 'edit-site') $update = [
						'title'=>\Request::input('title'),
						'url'=>\Request::input('url'),
						'desc'=>\Request::input('desc'),
						'list'=>\Request::input('list'),
							];
		elseif($save_what == 'visite-site') $update = [
						'visits' => \Request::input('visits'),
							];
		if(isset($create)){
			\fav_websites_model::create($create);
		}elseif(isset($update)) {
			$obj = \fav_websites_model::find(\Request::input('id'));
			$obj->update($update);
		};
	}
	public function delete_favorite(){
		$site = \Request::all();
		$obj = new \fav_websites_model();
		$obj->find($site['id'])->delete();
	}
	public function update_sites_imgs(){
		ini_set('max_execution_time', 3600);
		$obj = new \fav_websites_model();
		$sites = $obj
					->where('sub',null)
					// ->where('img','_default')
					->where('title','!=',"NULL")
					->get();

		foreach($sites as $site){
			$save_place = real_imgs_dir."projects/favorite_sites_imgs/".$site->title.".jpg";
			$url = "http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=0d6de8e8a87669c&stwsize=xlg&stwurl=".$site->url;
			save_img($url,$save_place);
			$db_site = $obj->find($site->id);
			$db_site->img = $site->title.".jpg";
			// $db_site->img = "_default";
			$db_site->save();
			echo $site->title."<br>";
			// die;
		}
		die("all Done");
	}
	private function save_site_img($title,$url){
			$save_place = real_imgs_dir."projects/favorite_sites_imgs/".$title.".jpg";
			$url = "http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=0d6de8e8a87669c&stwsize=xlg&stwurl=".$url;
			// die($url);
			save_img($url,$save_place);
			return $title.".jpg";
	}		
/************************************************************************/

/********************************************************************************
ToDo List 				
********************************************************************************/
	public function todo_index(){
		$data = [
			'route_info'=>\sr::projects("todo"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view('Projects.todo.index',$data);	
	}
	public function get_todos($get_what){
		$tasks_after_filtering = [ ];
		
		$real_lists = \todo_model::lists('list')->unique();
		$lists = $real_lists;
		$real_lists = $real_lists->toArray();
		$lists = $lists->push('all')->push('done')->push('remaining')->toArray();
		if($get_what == "all") $tasks = \todo_model::all();
		elseif($get_what == "done") $tasks = \todo_model::where('done',1)->get();
		elseif($get_what == "remaining") $tasks = \todo_model::where('done',0)->get();
		elseif(in_array($get_what, $lists)) $tasks = \todo_model::where('list',$get_what)->where('done',0)->get();
		foreach($tasks as $task){
			$subs = \todo_model::where('inside',$task->id)->get();
			if(!empty($subs)) $task->subs=$subs;
			if($task->title!=null && $task->inside==null) $tasks_after_filtering[] = $task;
		}
		$data = [
				"tasks" => $tasks_after_filtering,
				"lists" => $lists,
				"real_lists"=> $real_lists,
			];
		return $data;
	}
	public function new_task(){
		$input= \Request::all();
		return \todo_model::create($input);
	}
	public function edit_task(){
		$input = \Request::all();
		$obj = \todo_model::find($input['id']);
		$obj->done = $input['done']==true ? 1 : 0;
		$obj->title = $input['title'];
		$obj->desc = $input['desc'];
		$obj->list = $input['list'];
		$obj->save();
	}
	public function check_task(){
		$input = \Request::all();
		$obj = \todo_model::find($input['id']);
		$obj->done = $input['done'];
		$obj->save();
	}	
	public function create_list(){
		$list = \Request::input('list');
		\todo_model::create(['list'=>$list]);
	}
	public function delete_task(){
		$task = \Request::all();
		\todo_model::find($task['id'])->delete();
	}
	public function add_sub(){
		$input = \Request::all();
		$sub = [
			'title'=>$input['newSub'],
			'inside'=>$input['id'],
		];
		\todo_model::create($sub);
	}
	public function vote($pram){
		$task = \Request::all();
		$obj = \todo_model::find($task['id']);
		if($pram=='up') $obj->incrument('vote');
		// elseif($pram=='down') $obj->dec
		$obj->save();
	}
//*******************************************************************************

/*********************************************************************
Website Thumbnail Generator
**********************************************************************/
	public function site_thumbnail(){
		$data = [
			'route_info'=>\sr::projects("site-thumbnail"),
			'ng_app'=>"myApp",
			'theme'=>$this->themes[0]
		];
		return $this->get_view("Projects.site_thumbnail",$data); 
	}	
	public function site_thumbnail_generator($link){
		// dd("hello");
		$sizes = ["xlg","lg","sm","vsm","tny","mcr"];
		foreach($sizes as $size){
			$save_place = real_imgs_dir."projects/site_thumbnail/".$size.".jpg";
			$url = "http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=0d6de8e8a87669c&stwsize=".$size."&stwurl=".$link;
			// err($url);
			save_img($url,$save_place);
		}
	}
//*******************************************************************************

/*********************************************************************
Dynamic Page
**********************************************************************/
	public function dynamic(){
		$data = [
			'route_info'=>\sr::projects("dynamic_text"),
			"ng_app"=>"myApp",
			'theme'=>$this->themes[0]
		];
		return $this->get_view("Projects/dynamic_text/index",$data); 
	}
	public function dynamic_get(){
		$data = [
			'dynamic_text'=> \Cache::get('dynamic_text')
		];
		return view(get_location("Projects/dynamic_text/normal"),$data); 
	}	
	public function dynamic_save(){
		if(\Request::has('reset')){
			$text = \Cache::get('normal_dynamic_text');
			\Cache::put('normal_dynamic_text',$text,600000);
			\Cache::put('dynamic_text',$text,600000);
		}else{
			$text = \Request::Input('text');
			\Cache::put('dynamic_text',$text,600000);
		}
	}	
/**********************************************************************/	

/*********************************************************************
Dynamic Page 2
**********************************************************************/
	public function dynamic2(){
		$text = \Cache::get('dynamic_text_2',"");
		$data = [
			'route_info'=>\sr::projects("dynamic_text"),
			"ng_app"=>"myApp",
			'theme'=>$this->themes[0],
			'text'=>$text,
		];
		return $this->get_view("Projects/dynamic_text_2/index",$data); 
	}
	// public function dynamic_get(){
	// 	$data = [
	// 		'dynamic_text'=> \Cache::get('dynamic_text')
	// 	];
	// 	return view(get_location("Projects/dynamic_text/normal"),$data); 
	// }	
	public function dynamic2_save(){
		$input = \Request::all();
		// dd($input);
		$text = $input['editor'];
		\Cache::put('dynamic_text_2',$text,600000);
		return redirect("projects/dynamic2");
	}	
/**********************************************************************/	




/********************************************************************************
One Method Apps  					
********************************************************************************/
/********************************Oil Calculator********************************************/
	public function oil(){
		$data = [
			"route_info"=>\sr::projects("oil"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view('Projects.oil',$data);		
	}
/********************************Bank Profit Calculator*************************/
	public function bank_profit_calc(){
		$data = [
			"route_info"=>\sr::projects("bank"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view('Projects.bank_profit',$data);	
	}
/********************************Money Calculator*******************************/
	public function money_calc(){
		$data = [
			"route_info"=>\sr::projects("money-calc"),
			'theme'=>$this->themes[4],
		];
		return $this->get_view("Projects/money_count_calc",$data); 
	}
/********************************Number Conversions******************************/
	public function converter(){
		$data = [
			'route_info'=>\sr::projects("conversions"),
			'theme'=>$this->themes[0]
		];
		return $this->get_view("Projects.conversions.index",$data); 
	}
/********************************Number Conversions******************************/
	public function socialite_access(){
		$data = [
			'route_info'=>\sr::projects("socialite"),
			'theme'=>$this->themes[0]
		];
		return $this->get_view("Projects.remote_signin.index",$data); 
	}
/********************************Video Book******************************/
	public function video_book(){
		$data = [
			'route_info'=>\sr::projects("video_book"),
			'ng_app'=>"myApp",
			'theme'=>$this->themes[0]
		];
		return $this->get_view("Projects.video_book.index",$data); 
	}
/********************************Quran Files******************************/
	public function quran(){
		$data = [
			'route_info'=>\sr::projects("quran"),
			'ng_app'=>"myApp",
			'theme'=>$this->themes[0]
		];
		return $this->get_view("Projects.quran.index",$data); 
	}		
//*******************************************************************************


/*********************************************************************
Book Sharing System
**********************************************************************/
	public function books_view(){
		$books = \book_model::all();
		$categories = ['Development','music'];
		$data = [
			'route_info'=>\sr::projects("books"),
			'theme'=>$this->themes[4],
			'books' => $books,
			'categories' => $categories,
		];
		return $this->get_view("Projects.books.books_view",$data); 
	}
	public function download_book($id){
		$book = \book_model::find($id);
		$file= public_path(). "/pdf/books/".$book->name_in_server;
		// $headers = array(
		// 	'Content-Type: application/pdf',
		// );
		return response()->download($file,$book->book_name.".pdf");
	}
	public function new_book(){
		$input = \Request::all();

		$img_file = \Request::file('upload_img');	
		$img_save_path = real_imgs_dir."projects/pdf_book_imgs";
		$pdf_file = \Request::file('upload_file');	
		$pdf_save_path = public_path()."/pdf/books";

		$pdf_name = $this->upload_file($pdf_file,$pdf_save_path);
		$img_name = $this->upload_file($img_file,$img_save_path);
		// $this->upload_file($img_file,real_imgs_dir."../pdf/books/imgs");

		$create_data = [
			'name_in_server'=>$pdf_name,
			'img'=>$img_name,
			'email'=>$input['email'],
			'book_name'=>$input['book_name'],
			'cate'=>$input['cate'],
		];
		$out = \book_model::create($create_data);
		return redirect()->back()->with('s-msg','Success! New Book Has been Added.');
	}
	public function upload_file($file,$destinationPath){
		// $filename = $file->getClientOriginalName();
		$filename = str_random(12);
		$extension =$file->getClientOriginalExtension(); 
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
	public function delete_book($id){
		die("<h1>Your Can't Delete Books</h1>");
		$book = $this->model->find($id);
		if(false){
			$book->delete();
			return Redirect::to('books')->with('i-msg','Book Has Been Deleted');
		}
		if(true) {
			$book->report();
			return Redirect::to('books')->with('i-msg','Book Has Been Reported');
		}
	}
/**********************************************************************/







/*********************************************************************
Dictionary
**********************************************************************/
	public function dictionary_index(){
		$data = [
			'page_title'=>'Dictionary Page',
			'page_desc'=>"",
			'page_img' => imgs_dir."met/1.jpg",
			'theme'=>$this->themes[4],
		];
		return $this->get_view('Projects.dictionary.index',$data);	
	}	
	public function dictionary_get(){
		// return \Request::all();
		// if($what == "all") 
		return [
			'name'=>'ahmed_badawy',
			'input'=>Input::all(),
		];
	}
/**********************************************************************/

/*****************************************************************
Recipes Sharing System
*****************************************************************/
	public function recipes_index(){
		$data = [
			'page_title'=>'',
			'page_desc'=>"",
			'page_img' => imgs_dir."",
			'theme'=>$this->themes[0],
			'ng_app'=>"myApp",
		];
		return $this->get_view('Projects.recipes.index',$data);		
	}
	public function recipes_create(){
		dd(Input::file());
		die;
		$input = Input::get('info');
		// if($return1 == 'error' || $return2 == 'error') die('there was an error');		
		// return $input;
		$img = $this->recipes_upload_img();
		$create_info = [
			"title"=>$input['title'],
			"recipe_orgin"=>$input['recipe_orgin'],
			"num"=>$input['num'],
			"difficulty"=>$input['difficulty'],
			"price"=>$input['price'],
			"prepare_time"=>$input['prepare_time'],
			"cook_time"=>$input['cook_time'],
			"components"=>$input['components'],
			"prepreation_method"=>$input['prepreation_method'],
			"img"=>$img,
			// "tags"=>$input['tags'],
		];
		return $create_info;
		// return Recipes::create($create_info);
	}
	public function recipes_upload_img(){
		$file = Input::file('img');
		if($file == null) die("image isn't there...");
		$destinationPath = imgs_dir."recipes";
		$filename = str_random(12);
		//$filename = $file->getClientOriginalName();
		$extension =$file->getClientOriginalExtension(); 
		$final_name =  $filename.".".$extension;
		$upload_success = Input::file('img')->move($destinationPath,$final_name);
		if( $upload_success ) {
			return $final_name;
		} else {
			return "error";
		}	
	}	
	// public function recipes_main(){ return View::make("main-site/left/projects/recipes/main"); }
	// public function recipes_create(){ return View::make("main-site/left/projects/recipes/create"); }
	// public function recipes_partials_search(){ return View::make("main-site/left/projects/recipes/recipes_partials_search"); }

	
/****************************************************************/



}