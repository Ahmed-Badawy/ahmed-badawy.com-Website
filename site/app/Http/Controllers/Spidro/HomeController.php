<?php namespace App\Http\Controllers\Spidro;

use App\Http\Controllers\BaseController as BaseController;

class HomeController extends BaseController {


	public function one_page(){
		$data = [
			'route_info'=>\sr::common("projects_index"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("spidro.ad_area.index",$data,'unify');
	}

	


}
