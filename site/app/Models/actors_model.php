<?php

class actors_model extends Eloquent {
	protected $table = 'actors';
	public $guarded = [];	
	public $timestamps = false;
	

	public function scopeSearch($query,$q){
		if(isset($q)){
			$ready = regexp_query_ready($q);
			$query
			->orWhere('name','REGEXP',$ready)
			->orWhere('real_name','REGEXP',$ready)
			->orWhere('country','REGEXP',$ready);
		}
		return $query;
	}


}