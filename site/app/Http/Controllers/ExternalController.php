<?php namespace App\Http\Controllers;

class ExternalController extends BaseController {


/********************************************************************************
Main
********************************************************************************/
	public function chrome_apps(){
		$data = [
			"route_info"=>\sr::external("main","chrome apps"),
			'theme'=>$this->themes[0],
		];
//		dd($data);
		return $this->get_view("external.chrome-apps-index",$data);
	}	
//*******************************************************************************	


/********************************************************************************
Currency  					
********************************************************************************/
	public function currency(){
		$data = [
			"route_info"=>\sr::projects("currency"),
			'theme'=>$this->themes[4],
			"currency_list"=> \Lst::common("currency"),
			'ng_app'=>"myApp",
			'ng_controller'=>"googleCurrency",
		];
//		die('hi');
		return $this->get_view('Projects.currency.currency',$data);		
	}




}