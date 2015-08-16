<?php

class pages_model extends Eloquent{
	public $table = "pages";
	public $guarded = [];	
	public $timestamps = false;
	protected $primaryKey = 'page_id';


	
}