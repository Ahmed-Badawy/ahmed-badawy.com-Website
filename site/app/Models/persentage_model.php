<?php

class persentage_model extends Eloquent {
	public $table = "persentages";
	public $guarded =[];


	public function p_unique_id(){
		$this->p_unique_id = $this->persentage_name ."_". $this->persentage_id;
		return $this;
	}

}