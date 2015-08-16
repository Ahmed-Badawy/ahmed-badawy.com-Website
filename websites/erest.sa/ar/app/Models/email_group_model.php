<?php

class email_group_model extends Eloquent{
	public $table = "client_management_groups";
	public $guarded = [];	
	public $timestamps = false;
	protected $primaryKey = 'group_id';




}