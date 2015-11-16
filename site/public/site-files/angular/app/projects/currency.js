var myapp=angular.module('myApp',['ngRoute','ngResource']);


myapp.controller('currnecyController',function($scope,$http,$filter){
	$scope.calc2 = function(key,val){
		dollar = val / json_rates[key].value;
		angular.forEach(json_rates, function(val1,key1) {
			if(key1!=key){
				v = val1.value*dollar;
				$scope.currency_rates[key1] = $filter('number')(v,4); 
			}
		});
	}
});


myapp.controller('googleCurrency',function($scope,$http){
	$scope.result = {};
	$scope.get_rate = function(wanted_rate){
		$scope.show_res = false;
		if(!(type(wanted_rate.how_much)==1 && type(wanted_rate.from)==2 && type(wanted_rate.to)==2)) return ;
		$scope.loading = true; $scope.result={};
		$http.get("currency/google-currency-calc/"+wanted_rate.from+"/"+wanted_rate.to)
		.success(function(data){
			console.log(data);
			$scope.show_res = true;
			$scope.result.from = data.from;
			$scope.result.to = data.to;
			$scope.result.rate = data.rate;
			$scope.result.amoutn = wanted_rate.how_much;
			$scope.result.result = wanted_rate.how_much*data.rate;
			console.log($scope.result);
			$scope.loading = false;
		});
	}
});

function type(n){
	var type = typeof n;
	if (type == 'undefined') out = 0;
	else if (type == 'number') out = 1; //all numbers integers & floats
	else if (type == 'string') out = 2;
	else if (type == 'object') out = 3; //objects & array
	else if ( (type == 'string') && (n.trim() == '') ) out = 0;
	return out;
}