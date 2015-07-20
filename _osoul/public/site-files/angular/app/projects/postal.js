var myApp = angular.module('myApp',['ngResource','ngRoute']);

myApp.factory('postal_offices_resource',function($resource){
	var resource = $resource('postaloffices/query-info',{},{
		get_info : { method:'post', isArray:true , prams:{q:"@q"} }
	})
	return resource;
});

myApp.config(function($routeProvider){
	$routeProvider
	.when('/',{
		redirectTo: "/postalcodes",
	})
	.when('/postaloffices',{
		templateUrl:"../ng-temp/Projects/postal/postal_offices",
		controller:"postal_offices",
	})	
	.when("/postalcodes",{ 
		templateUrl:"../ng-temp/Projects/postal/postal_codes",
		controller:"postal_codes",
	})
	.otherwise({
		redirectTo:"/",
	})
})


myApp.controller('main',function($scope, $location){
	// console.log($location.$$url);
	$scope.buttonStyle = function(r){
		if($location.$$url == r) return "btn btn-primary";
		return "btn btn-default";
	}	
});


myApp.controller('postal_offices',function($scope,$timeout,postal_offices_resource,$location){
	console.log($location);
	$scope.data = { };
	$scope.limitNum = 80;
	var promise = null;

	$scope.$watch("searchText",function(value){
		if(value!=undefined && value!=false && value!=''){
			$scope.data.postal_offices = false;
			$scope.loader = true;
			query = window.arabic_string_sani(value);
			if(promise != null) $timeout.cancel(promise); 
			promise = $timeout(function(){
				postal_offices_resource.get_info( {q:query} ).$promise.then(
					function(response){ 
						$scope.loader = false;
						$scope.data.postal_offices = response; 
					},
					function(error){ console.log("Error"); }
				);
			},500);
		}
	})
	$scope.tf = function(val){
		if(val==1) return "true";
		if(val==0) return "false";
	}

});

myApp.controller('postal_codes',function($scope,$http,$route){
	$http.get('postal-codes-array').success(function(postal_codes){
		$scope.postal_codes = postal_codes;
	});
	$scope.limitNum = 40;
	$scope.$watch('searchText',function(value){
		if(value!=undefined && value!=false){
			$scope.fst = window.arabic_string_sani(value);
		}
	});



});




function arabic_string_sani(str){
	return str
		.replace('أ', 'ا')
		.replace('آ','ا')
		.replace('إ','ا')
		.replace('ة','ه')
		.replace('ى','ي')
		.replace('ال','')
		.replace('ـ','');
}