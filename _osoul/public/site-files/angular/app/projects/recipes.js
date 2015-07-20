var myApp = angular.module('myApp',['ngRoute','ngResource']);

var site_base = "../ng-temp/Projects/recipes/";
var partial_base = "../ng-temp/Projects/recipes/partials/";
myApp.config(function($routeProvider){
	$routeProvider
	.when('/',{
		redirectTo: "/main",
	})
	.when("/main",{ 
		templateUrl: site_base+"main",
		controller: "main_controller",
	})
	.when('/new-recipe',{
		templateUrl:"recipes/new",
		controller:"new_recipe",
	})	
	.otherwise({
		redirectTo:"/",
	})
})

myApp.factory('recipesService',function($resource){
	var response = $resource('recipes/:method', {method:"create"} , {
		ccc: {method:'POST', prams:{recipe:"@recipe"} },
	});
	return response;
});


myApp.controller('main_controller',function($scope,$http,recipesService){
	// $scope.partial_1 = null;
	// $scope.change_partial = function(partial_num,partial){
	// 	// $scope['partial_'+partial_num] = partial_base+partial;
	// 	str = partial_base+partial;
	// 	$scope.partial_1 = str;
	// }

	$scope.add_new = function(new_recipe){
		$http.post('recipes/create',new_recipe).success(function(data,status,headers,config){
			console.log(data);
		});
		// recipesService.ccc({recipe:"oneit"});
	}
});