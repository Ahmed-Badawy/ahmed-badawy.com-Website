<?php

class Selling_Manager_Invoice_Model extends Eloquent {
	protected $table = 'selling_manager_invoice';
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



	public function getCreatedAtAttribute($date)
	{
		return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y/m/d  --  g:i A');
	}

	public function getUpdatedAtAttribute($date)
	{
		return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
	}



}