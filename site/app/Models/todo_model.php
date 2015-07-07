<?php

class todo_model extends Eloquent {
	protected $table = 'todos';
	public $guarded =['created_at','updated_at'];

}