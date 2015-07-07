<?php

class Selling_Manager_Products_Model extends Eloquent {
	protected $table = 'selling_manager_products';
	public $guarded = [];


//	public function scopeSearch($query,$q){
//		if(isset($q)){
//			$ready = regexp_query_ready($q);
//			$query
//			->orWhere('name','REGEXP',$ready)
//			->orWhere('real_name','REGEXP',$ready)
//			->orWhere('country','REGEXP',$ready);
//		}
//		return $query;
//	}


}