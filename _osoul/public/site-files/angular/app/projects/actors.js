var myApp = angular.module('myApp',['ngRoute','ngResource']);

		
var site_base = "../ng-temp/Projects/actors/";
var partial_base = "../ng-temp/Projects/actors/partials/";
myApp.config(function($routeProvider){
	$routeProvider
	.when('/main/:current_page',{
		templateUrl:site_base+"main",
		controller: "pornstars_controller",
	})
	.when('/main/:current_page/:q',{
		templateUrl:site_base+"main",
		controller: "pornstars_controller",
	})
	// .when("/postalcodes",{ 
	// 	templateUrl:"postal/codes",
	// 	controller:"postal_codes",
	// })
	.otherwise({
		redirectTo:"/main/1",
	})
})


myApp.controller('pornstars_controller',function($scope,$http,$routeParams,$timeout){
	var timeout_promise = timeout_promise2 = null;
	$scope.data = {};
	// $scope.data.items_per_page = 100;
	$scope.s_star = {};
	$scope.items_per_page = 10;
	$scope.show_style = "main";
	$scope.current_page = ($routeParams.current_page) ? $routeParams.current_page : 1;
	if($routeParams.q){
		$scope.q = $routeParams.q;
	}

	
	var get_data = function(get_page,q){
		$scope.loader = true;
		if(q==null || q=='') url = "actors/get/"+get_page;
		else url = "actors/get/"+get_page+"/"+q;
		$http.get(url).success(function(data){
			$scope.current_page = parseInt(get_page);
			if($scope.current_page>data.meta.pages_num) get_data(1,q);
			$scope.goToPageNum = $scope.current_page;
			$scope.pornstars = data.pornstars;
			$scope.session = data.meta.session;
			// $scope.meta = data.meta;
			$scope.pagi = pagi($scope.current_page,data.meta,3);
			$scope.loader = false;
			console.log($scope.pagi);
		});	
	}
	get_data($scope.current_page,null);

	$scope.toPage = function(page_num){
		if(page_num<1 || page_num>$scope.pagi.pages_number) return;
		get_data(page_num,$scope.q);
	}


	$scope.search_pornstar = function(){
		value = $scope.q;
		if(timeout_promise2 && angular.isDefined(timeout_promise2)) $timeout.cancel(timeout_promise2); 
		timeout_promise2 = $timeout(function(){
			get_data(1,value);
		},1000);
	}
	$scope.$watch("goToPageNum",function(value){
		// console.log(value);
		if(type(value)!=0 && value!=($scope.current_page)){
			if(timeout_promise) $timeout.cancel(timeout_promise); 
			timeout_promise = $timeout(function(){
				if(type(value)==1) $scope.toPage(value);
			},1000);
		}
	});


	$scope.li_class = function(index){
		if(index=="last") if($scope.pagi && $scope.current_page>=$scope.pagi.pages_number) return "btn-warning disabled";
		if(index=="first") if($scope.current_page<=1) return "btn-warning disabled";
		return;
	}

	$scope.close_panel = function(){
		$scope.s_star = {};
		$scope.show_style = "main";
	}
	$scope.select_pornstar = function(star){		
		$scope.s_star.id = star.id;
		$scope.s_star.name = star.name;
		$scope.s_star.real_name = star.real_name;
		$scope.s_star.img = star.img;
		$scope.s_star.born = star.born;
		$scope.s_star.died = star.died;
		$scope.s_star.country = star.country;
		$scope.s_star.height = star.hight;
		$scope.s_star.final_rate = Math.ceil(star.rate/star.rate_count);
		$scope.s_star.marital_status = star.marital_status;
		if($scope.session[star.id]!=undefined) $scope.star_rated = true;
		if(star.died==null) $scope.s_star.age = _calculateAge(star.born);
		$scope.show_style = "partial";
	}



	$scope.rate_star = function(num){
		id = $scope.s_star.id;
		rate = num;
		url = "actors/rate_star";
		$http.post(url,{id:id,rate:rate}).success(function(data){
			get_data($scope.current_page,$scope.q);
		});	
	}

	$scope.get_class = function(num,star){
		return "rated";
		return "not_rated";
	}
	$scope.get_star_type = function(s_star,num){
		if(s_star.final_rate >= num) {
			return "★";
		}else return "☆";
	}

	$scope.is_rated = function(star){
		console.log("session is: ");
		console.log($scope.session);
		if($scope.session[$scope.s_star]==undefined){
			return true;
		} 		
		else return false;
	}



});


function _calculateAge(birthday) { // birthday is a date
	var birthday = new Date(birthday);
    var ageDifMs = Date.now() - birthday.getTime();
    var ageDate = new Date(ageDifMs); // miliseconds from epoch
    return Math.abs(ageDate.getUTCFullYear() - 1970);
}

function pagi(current_page,meta,pagi_view_nums){
	current_page = parseInt(current_page);
	pages_num = meta.pages_num;
	before=[]; after=[];
	for(i=1;i<=pagi_view_nums;i++){
		if(current_page-i>0) before.push(current_page-i);
		if(current_page+i<=pages_num) after.push(current_page+i);
	}
	return {
		current_page : current_page,
		pages_number : pages_num,
		before: before.reverse(),
		after: after
	};
}

function type(n){
	if (typeof n == 'undefined') out = 0;
	else if (String.trim(n) == '') out = 0;
	if (typeof n == 'number') out = 1; //all numbers integers & floats
	if (typeof n == 'string') out = 2;
	if (typeof n == 'object') out = 3; //objects & array
	return out;
}
