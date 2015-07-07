<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MoviesController extends ProjectsController {

/*********************************************************************
Movies Manager
**********************************************************************/
	public function movies_index(){
		$obj = new \movies_model();
		$genres = $obj->lists('genre')->unique();
		$data = [
			'route_info'=>\sr::projects("movies"),
			'theme'=>$this->themes[0],
			'genres'=>$genres,
		];	
		return $this->get_view('Projects.movies.index',$data);
	}
	public function movies_list(){
		$input = \Request::all();
		$movies = \movies_model::getit($input)->order($input)->get();
		$data = [];
		foreach($movies as $movie){
			if($movie->open) $movie->open = date( "j/F Y",$movie->open);
			if($movie->close) $movie->close = date( "j/F",$movie->close);
			$movie->sub_genres = json_decode($movie->sub_genres);
			$movie->players = json_decode($movie->players);
			$data[] = $movie;
		}	
		return $data;
	}
	public function attach_movie(){
		$input = Input::all();
		// dd($input);
		// die;
		$array = lists::common("movies_center");
		$title = preg_replace("/[\:\;\-\_\']/is",'',$input['title']);
		$title = implode(".*",explode(" ",$title));
		foreach($array as $e){
			if (preg_match("/.*$title.*/is",$e)) $res[] = $e;
		}
		if(empty($res)){ dd($title);die; }
		return $res;
	}
	public function attachfolder(){
		$input = Input::all();
		if(isset($input['op'])) { \movies_model::where('attach_files',$input['file'])->update(['attach_files'=>null]); }
		// dd($input);die;
		else \movies_model::find($input['id'])->update(['attach_files'=>$input['file']]);
	}
	public function attachinfo(){
		$files = lists::common('movies_center');
		$files_db = \movies_model::where('attach_files','!=','')->lists('attach_files');
		foreach($files as $file){
			if(!in_array($file,$files_db)) $res[] = $file;
		}
		// foreach($files as $file){
			
		// }
		$data['all_files'] = $files;
		$data['files'] = $res;
		$data['attached'] = $files_db->unique();
		return $data;
	}
	
	

	public function movies_info(){
		if (\Cache::has('genres_actors')){
			$data = \Cache::get('genres_actors');
		}else{		
			$obj = new \movies_model();
			$players_json_array = $obj->where('id','>',0)->lists('players');
			$actors = [];
			foreach($players_json_array as $p){
				$out = json_decode($p);
				if(isset($out->actors) && $out->actors) $actors = array_unique(array_merge($out->actors,$actors));
				if(isset($out->actor) && $out->actor) $actors = array_unique(array_merge($out->actor,$actors));
			}
			$franch = $obj->where('franchises','!=','')->orderBy("year","asc")->get(['franchises','link_id']);
			$final = [];
			foreach($franch as $f){
				$final[slash($f->franchises)][] = ["franch"=>$f->franchises,"id"=>$f->link_id];
			}
			$franch = [$final];
			sort($franch);
			sort($actors);
			$data['actors'] = $actors;
			$genres = \movies_model::lists('genre')->unique()->sort();
			$data['genres'] = $genres;
			$data['franch'] = $franch;

			\Cache::add('genres_actors',$data,4320);			
		}
		return $data;
	}
	public function populate_movies(){
		ini_set('max_execution_time', 3600);
		$lists = \Lst::common('movies');
		$movies = [];
		foreach($lists as $year=>$ms){
			// if($year<2000 && $year>=1980) $movies = array_merge($ms,$movies);
			if($year==2014) $movies = $ms;

// $final = [];
// foreach($ms as $m){
// 	unset($m['year']);
// 	$vals = array_values($m);
// 	foreach($vals as $val){
// 		$final[] = $val;
// 	}
// }

//         $i = 0;
//         for($i;$i<100;$i++){
//             $new_ar[$i]['rank'] = $final[0];
//             $new_ar[$i]['link_id'] = $final[1];
//             $new_ar[$i]['title'] = $final[2];
//             $new_ar[$i]['studio'] = $final[3];
//             $new_ar[$i]['gross1'] = $final[4];
//             $new_ar[$i]['gross2'] = $final[5];
//             $new_ar[$i]['opening1'] = $final[6];
//             $new_ar[$i]['opening2'] = $final[7];
//             $new_ar[$i]['open'] = $final[8];
//             $new_ar[$i]['year'] = $year;
//             for($k=0;$k<=8;$k++){
//             	array_shift($final);
//             }
//         }
//         $fff = $new_ar;
// 			}
		}
		// err($movies);
		foreach($movies as $key=>$m){
			// if($key>1943 && $key<2100){  //4952
				$data=[
					"title"=>$m['title'],
					"rank"=>$m['rank'],
					"link_id"=>$m['link_id'],
					"studio"=>$m['studio'],
					"year"=>$m['year'],
					"gross1"=>preg_replace("/[$,.]/","",$m['gross1']),
					"gross2"=>preg_replace("/[$,.]/","",$m['gross2']),
					"opening1"=>preg_replace("/[$,.]/","",$m['opening1']),
					"opening2"=>preg_replace("/[$,.]/","",$m['opening2']),
					"open"=>date(strtotime($m['year']."/".$m['open'])),
				];
				// if(isset($m['close']) && (unslash($m['close'])) ) $data['close']=date(strtotime($m['year']."/".$m['close']));
				if($key != 1000) $data = array_merge ($data, $this->update_movie($m['link_id']));
			 	\movies_model::create($data);
			 	if($key > 3) die;
			// }
		}
	}
	
	public function update_movie($link_id){
		// err($link_id);
  $href = "http://boxofficemojo.com/movies/?id=".$link_id.".htm";
  $page = file_get_contents($href);
  
  preg_match("/<center>.*?<\/table>/s",$page,$match1);
  preg_match("/Players.*?<\/table>/s",$page,$match2);
  preg_match("/genre<\/th>.*?rank.*?<\/table>/is", $page,$match3);

if(isset($match1[0])) $ttt = get_regex_array($match1[0]);
if(isset($match2[0])) $players = get_regex_array($match2[0]);
if(isset($match3[0])){
  $ans = preg_replace("/genre|rank/is",'', $match3[0]);
  $genres = get_regex_array($ans);
}else $genres = [];

// echo "<pre class='col-md-8 col-md-offset-2'>".print_r($genres,true)."</pre><div class='clearfix'></div>";
// die;

$genres_data = [];
if(!empty($genres)){
$count = count($genres)/3;
    for($i=0; $i<$count; $i++){
        $genres_data[] = [ "link"=>$genres[0],"title"=>$genres[1],"rank"=>$genres[2] ];
        for($k=0;$k<3;$k++){
          array_shift($genres);
        }
    }  
}

$array=[]; $mode = null;
if(!empty($players)){
  foreach($players as $key=>$elm){
  $elm = strtolower($elm);
  $elm = preg_replace("/[:*()]|voice|denotes minor role|narrator|story|executive|cameo/",'', $elm); 
    if($elm = trim($elm)){
      $modes_array = ["directors","director","writers","writer","actors","actor","composer","composers","producer","producers"];
      if(in_array($elm,$modes_array)) $mode = $elm;
      if($elm!=$mode && $mode) $array[$mode][] = $elm; 
    }
  }
}

foreach($ttt as $key=>$val){
  $val = strtolower(trim($val));
  if($val=="genre"){
    $genre = strtolower($ttt[$key+1]);
  }elseif($val == "runtime"){
    $runtime = strtolower($ttt[$key+1]);
  }elseif($val == "mpaa rating"){
    $rating = strtolower($ttt[$key+1]);
  }elseif($val == "production budget"){
    $production_budget = strtolower($ttt[$key+1]);
  }
}

// echo "<pre class='col-md-8 col-md-offset-2'>".print_r($genres,true)."</pre><div class='clearfix'></div>";
// die;

        $data = [
                    "genre"=>$genre,
                    "sub_genres"=>json_encode($genres_data),
                    "runtime"=>$runtime,
                    "rating"=>$rating,
                    "production_budget"=>$production_budget,
                    "players"=>json_encode($array),
        ];  
        // echo "<pre class='col-md-8 col-md-offset-2'>".print_r($data,true)."</pre><div class='clearfix'></div>";
        return $data;
	}

	public function movies_update_fransh(){
		$input = \Request::all();
	 	\movies_model::find($input['id'])->update(["franchises"=>$input['fransh']]);
	}
			
	
/**********************************************************************/


}
