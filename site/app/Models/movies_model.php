<?php

class movies_model extends Eloquent {
	protected $table = 'movies';
	public $guarded = [];	
	public $timestamps = false;
	

	public function scopeGetit($query,$input){
		if(isset($input['year']) && !empty($input['year']) && $input['year']!="all") $query->where('year',$input['year']);
		if(isset($input['genre'])) $query->where('genre',$input['genre']);
		if(isset($input['franch'])) $query->where('franchises',"LIKE",$input['franch']);
		// if(isset($input['title'])) $query->where('title','LIKE','%'.$input['title'].'%');
		// if(isset($input['player'])) $query->where('players','LIKE','%'.$input['player'].'%');
		if(isset($input['title'])) $query->where('title','REGEXP',regexp_query_ready($input['title']));
		if(isset($input['player'])) $query->where('players','REGEXP',regexp_query_ready($input['player']));
		return $query;
	}
	public function scopeOrder($query,$input){
		if(isset($input['order_by'])) $query->orderBy($input['order_by'],$input['order']);
		else $query->orderBy("gross1","desc")->orderBy("rank","asc")->take(600);
		return $query;
	}
}