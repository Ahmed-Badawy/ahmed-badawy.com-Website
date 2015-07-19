var myApp = angular.module('myApp',['ngRoute','ngResource']);


var site_base = "../ng-temp/spidro/";
var partial_base = site_base+"partials/";

myApp.config(function($routeProvider){
	$routeProvider
	.when('/',{
		templateUrl:site_base+"ad_area/general/main",
		controller: "ask_main"
	})	
	.when('/view',{
		templateUrl:site_base+"ad_view/main",
		controller: "view_controller"
	})	
	.otherwise({
		redirectTo:"/",
	})
})



myApp.controller('ask_main',function($scope,$routeParams,$http,$timeout,$location){
	$scope.selected = {};

    swal({
        title: "Error!",
        text: "this is the text",
        type: "success",
        confirmButtonText: "Cool"
    });

    $scope.partial_assign = function(partial_name,url){
        $scope["partial_"+partial_name] = site_base+"ad_area/"+url;
    }


	$scope.partial_assign(1,'general/ask_header');
    $scope.city_filter_config = function(city){
        city= (city==undefined) ? '' : '/'+city;
        partial = 'ask/city'+city;
        $scope.partial_2 = partial;
	}
	// $scope.city_filter_config();


	$scope.new_ad_button_clicked = function(){
		$scope.city_filter_config();
		$scope.partial_3 = 'ask/new-ad-view';
	}

    $scope.cate_partial = function(cate){
        $scope.cate_partial = 'ask/new-ad-view/'+cate;
    }

	// $scope.new_add = 'ask/new-ad';

	$scope.new_ad_panel = function(cate,sub1){
		$scope.new_ad_panel = '';
		partial = 'ask/new-ad-panel/'+cate+"/"+sub1;
		$scope.partial_4 = partial;
        //swal({
         //   title: "Error!",
         //   text: "cate is"+cate+" and sub is: "+sub1+"\n "+partial,
         //   type: "success",
         //   confirmButtonText: "Cool"
        //});
	}

});



myApp.controller('view_controller',function($scope,$routeParams,$http,$timeout,$location){
	$scope.selected = {};


});
