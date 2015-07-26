<?php



class Lists{


public function __construct(){
	require ('lists/lists_cities.php');
	require ('lists/lists_currency.php');
	$this->egypt_cities = $cities;
	$this->currency = $currency;
	$this->ad_elements_setters();
}

public function ad_elements_setters(){
	require ('lists/lists_cars.php');
	require ('lists/lists_small_cates.php');
	
	$this->items_for_sale = $other;
	$this->appliances = $appliances;
	
	$this->cars = $cars;
	$this->cars_other = $cars_other;

	$this->computers = $computers;
	$this->laptops = $laptops;
	$this->mobile_tablets = $mobile_tablets;	
	$this->electronics = $electronics;
	$this->games = $games;

	$this->jops = $jops;

	$this->sale = $property_for_sale;
	$this->rent = $property_for_rent;

	$this->places = $places;

	$this->cates = $cates;
}


/*********************************************************************
Functions
**********************************************************************/
public static function common($get_what){
	$dir_array = [
		"months"=>"lists/lists_date",
		"hours"=>"lists/lists_date",
		"postal_codes"=>"lists/lists_postal",
		"postal_offices"=>"lists/lists_postal",
		"movies"=>"lists/lists_movies",
		// "movies_center"=>"lists/lists_movie_center",
		// "xxx"=>"lists/lists_xxx",
		"currency"=>"lists/lists_currency",
		"currency1"=>"lists/lists_currency1",
		"social_cities"=>"lists/social_cities",
		// "pornstars"=>"lists/lists_pornstars",
		"actors"=>"lists/lists_actors"
	];
	require ( $dir_array[$get_what].".php" );
	return $$get_what;
}



	public static function tax_list($lang='en'){
		$obj = new lists();
		return [
				'cars'=>$obj->herchi_1('cars'),
				'cars_other'=>$obj->herchi_1('cars_other'),

				'items_for_sale'=>$obj->herchi_1('items_for_sale'),
				'appliances'=>$obj->herchi_1('appliances'),

				'computers'=>$obj->herchi_1('computers'),
				'laptops'=>$obj->herchi_1('laptops'),
				'mobile_tablets'=>$obj->herchi_1('mobile_tablets'),
				'electronics'=>$obj->herchi_1('electronics'),
				'games'=>$obj->herchi_1('games'),

				'jobs' => $obj->herchi_1('jops'),

				'rent' => $obj->herchi_1('rent'),
				'sale' => $obj->herchi_1('sale'),

				'places'=> $obj->herchi_1('places'),

				'cates'=> $obj->herchi_1('cates'),
		];
	}

	public static function get_list($arr){
		$lists = new lists();
		if($arr=='up_cates_array'){
			$res = lists::$up_cates_array;
		}else $res = $lists->$arr;
		return $res;
	}

//if soft search is true if it didn't find the wanted it will return false. (not stop the program)
	public static function herchi_1($arr,$wanted=null,$soft_search=false){
		$lists_obj = new lists();
		$array = $lists_obj->$arr;
		// dd($array);
		foreach($array as $lev1){
			$key_en_name = $lev1[0][0];
			$key_ar_name = $lev1[0][1];

			$models_array_en = $models_array_ar = array();
			foreach($lev1[1] as $model){
				$models_array_en[slash($model[0])] = $model[0];
				$models_array_ar[slash($model[0])]	= $model[1];
			}
			$res_array[slash($key_en_name)] = [
				'list_name'=>$arr,
				'wanted'=>$wanted,
				'code_name'=>slash($key_en_name),
				'name_en'=>strtolower($key_en_name),
				'name_ar'=>$key_ar_name,
				'models_en'=>$models_array_en,
				'models_ar'=>$models_array_ar,
			];
		}
		// err($res_array);
		if($wanted!=null){
			if(isset($res_array[unslash($wanted)])) return $res_array[unslash($wanted)];
			if($soft_search) return false;
			die("error in herci_1 : ".$arr);
		}
		return $res_array;
	}

	public static function city_list($wanted_region=null,$lang='en',$select=false){
		if($lang=='en') $lang_index = 0;
		if($lang=='ar') $lang_index = 1;
		
		require("lists/lists_cities.php");
		$regions = $cities;
		$i=0;
		$res = [];
		foreach($regions as $region){
			$region_name = $region[0][$lang_index];
			// if($lang_index==1) $region_name .= ' / '.$region[0][0];
			foreach($region[1] as $city){
				if ($select) $cities_array[strtolower(slash($city[0]))] = strtolower($city[$lang_index]);
				else $cities_array[] = $city[$lang_index];
			}
			// if($i==2) dd($cities_array);
				if(empty($cities_array)) $cities_array = array();
				$res['region'][strtolower(slash($region[0][0]))] = $region_name;
				$res['city'][strtolower(slash($region[0][0]))] = $cities_array;
				$cities_array = array();
				$i++;
		}

		if($wanted_region!=null) return $res[$wanted_region];
		return $res;
	}

	// public static function currency_list(){
	// 	$lists = new lists();
	// 	$currency = $lists->currency;
	// 	// foreach($currency as $cur=>$val){
	// 	// 	$ar = (isset($val['ar_label'])) ? " --- ".$val['ar_label'] : '';
	// 	// 	$array[$cur] = $val['label'].$ar;
	// 	// }
	// 	return ($currency);
	// }
	







	public static function site_routes_lists($what){
		require("site_routes.lists.php");
		return $$what;
	}

	


}