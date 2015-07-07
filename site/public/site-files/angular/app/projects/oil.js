var myapp=angular.module('myApp',[]);


myapp.controller('oil',function($scope){
	$scope.type = "none";

	$scope.$watch("type",function(value){
		$scope.msg = false;
		$scope.amount = 0;
		$scope.price = 0;
		if(value == "none") $scope.msg = "Please Choose Fuel Type First...";
		else if(value == 'ben80') $scope.per = 1.6;
		else if(value == 'ben92') $scope.per = 2.6;
		else if(value == 'ben95') $scope.per = 6.25;
		else if(value == 'solar') $scope.per = 1.8;
		else if(value == 'gas') $scope.per = 1.1;
	})	
	$scope.$watch("amount",function(value){
		if($scope.type != "none") $scope.price = value * $scope.per;
	})
	$scope.$watch("price",function(value){
		if($scope.type != "none") $scope.amount = value / $scope.per;
	})
	
});