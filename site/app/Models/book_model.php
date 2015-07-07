<?php

class book_model extends Eloquent{
	public $table = "books";
	public $guarded = [];	

	
	public function report(){
		$this->update(['report'=>true]);
	}
	
}