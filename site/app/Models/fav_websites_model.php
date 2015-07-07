<?php

class fav_websites_model extends Eloquent {
	protected $table = 'website_manager';
	public $guarded =['created_at','updated_at'];
}