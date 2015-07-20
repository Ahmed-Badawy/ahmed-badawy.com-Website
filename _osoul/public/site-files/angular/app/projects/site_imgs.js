var myApp = angular.module('myApp',[]);


myApp.controller('site_imgs',function($scope,$http,$location){
	$scope.link = "http://ahmed-badawy.com/site/projects";
	$scope.src_0 = "";
	$scope.src_1 = "";
	$scope.src_2 = "";
	$scope.src_3 = "";
	$scope.src_4 = "";
	$scope.src_5 = "";

	$scope.take_pics = function(link){
		console.log(link);
		$http.get("site-thumbnail/generator/"+link).success(function(data){
			console.log(data);
			$scope.src_0 = "xlg";
			$scope.src_1 = "lg";
			$scope.src_2 = "sm";
			$scope.src_3 = "vsm";
			$scope.src_4 = "tny";
			$scope.src_5 = "mcr";
			console.log("done"); 
		});
	}


});


