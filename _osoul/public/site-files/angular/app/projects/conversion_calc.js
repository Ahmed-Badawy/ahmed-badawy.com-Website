var myapp=angular.module('myApp',['ngRoute','ngResource']);

var site_base = "../ng-temp/Projects/conversions/";
var partial_base = "../ng-temp/Projects/conversions/partials/";
myapp.config(function($routeProvider){
	$routeProvider
	.when('/',{
		redirectTo:"/main",
	})
	.when('/main',{
		templateUrl:site_base+"main",
	})
	.when('/number',{
		templateUrl:partial_base+"number-conversions",
		controller:"numberController"
	})
	.when('/weight',{
		templateUrl:partial_base+"weight-conversions",
		controller:"main_controller"
	})
	.when('/length',{
		templateUrl:partial_base+"length-conversions",
		controller:"main_controller"
	})	
	.when('/acceleration',{
		templateUrl:partial_base+"acceleration-conversions",
		controller:"main_controller"
	})
	.when('/area',{
		templateUrl:partial_base+"area-conversions",
		controller:"main_controller"
	})
	.when('/density',{
		templateUrl:partial_base+"density-conversions",
		controller:"main_controller"
	})
	.when('/energy',{
		templateUrl:partial_base+"energy-conversions",
		controller:"main_controller"
	})
	.when('/heat',{
		templateUrl:partial_base+"heat-conversions",
		controller:"main_controller"
	})
	.when('/pressure',{
		templateUrl:partial_base+"pressure-conversions",
		controller:"main_controller"
	})
	.otherwise({
		redirectTo:"/main",
	})
})




myapp.controller('numberController',function($scope){
	var num=0 ; var from=null;
	$scope.calc = function(num,from){
		num = num.trim();
		if(num=='' || num==null || num==0) num=0;
		dec = window.parseInt(num,from).toString(10);
		bin = window.parseInt(num,from).toString(2);
		oct = window.parseInt(num,from).toString(8);
		hex = window.parseInt(num,from).toString(16);
		$scope.dec = dec;
		$scope.bin = bin;
		$scope.oct = oct;
		$scope.hex = hex;
	};
});

myapp.controller('main_controller',function($scope){
	$scope.calc = function(key,array,model){
		i = 0;
		for(i=0;i<array.length;i++){
			if(i==key) continue;
			changed_val = array[key][2];
			item_val = array[i][2];
			new_val = model * changed_val / item_val;
			$scope['unit_'+i] = new_val;
		}
	}
});




















