<?php

class menu_model extends Eloquent{
	public $table = "menu";
	public $guarded = [];	
	public $timestamps = false;
	protected $primaryKey = 'menu_id';


	
}