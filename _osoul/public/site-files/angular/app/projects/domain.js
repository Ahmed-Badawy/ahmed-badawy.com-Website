var myApp = angular.module('myApp',['ngRoute','ngResource']);




myApp.controller('main',function($scope,$http,$location){
	$scope.domains_data = [];
	$scope.loader = false;

	$scope.search_domain = function(domain_name){
		$scope.loader = true;
		//console.log(domain_name);
		$http.post("domain/search",{domain:domain_name}).success(function(data){
			$scope.domains_data = [];
			angular.forEach(data, function(value, key) {
				console.log(value);
				if(value.status == "success") $scope.domains_data.push(value);
			});
			$scope.loader = false;
			//console.log($scope.domains_data);
		});
	}

	$scope.get_class = function(domain){
		if(domain.available) return "";
		else return 'danger';
	}


});
