var myApp = angular.module('regist',['ngRoute','ngResource']);



myApp.controller('app',function($scope,$http){
	$scope.new_user = {};

	$scope.submit_signup_form = function(new_user){
		console.log(new_user);
		$http.post("signup",{"new_user":new_user}).success(function(data){
			console.log(data);
			// console.log("ok");
		});
		return false;
	} 

});