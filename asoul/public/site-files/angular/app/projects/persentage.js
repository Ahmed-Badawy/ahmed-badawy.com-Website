var myapp=angular.module('myApp',['ngRoute','ngResource']);

var site_base = "../ng-temp/Projects/persentage/";
var partial_base = "../ng-temp/Projects/persentage/partials/";
myapp.config(function($routeProvider){
	$routeProvider
	.when('/',{
		redirectTo:"/main",
	})
	.when('/main',{
		templateUrl:site_base+"main",
		controller:"main"
	})
	.when('/create',{
		templateUrl:site_base+"create",
		controller:"create"
	})	
	// .when('/show/:what',{
	// 	templateUrl:site_base+"show",
	// 	controller:"show"
	// })	
	.otherwise({
		redirectTo:"/main",
	})
})


myapp.controller('main',function($scope,$http){
	$scope.sp = false;

	$http.get("persentage/list").success(function(data){
		console.log(data);
		$scope.persentages = data;
	});

	$scope.choose_p = function(p){
		$scope.full_amount = null;
		$http.get("persentage/list/"+p).success(function(data){
			// console.log(data);
			$scope.sp = data;
		})
	}

	$scope.calcfull = function(val,persentage){
		// console.log(persentage);
		// console.log($scope.sp[index].p_unique_id);
		full = val * 100 / persentage;
		// console.log(full);
		$scope.calc(full);
	}
	$scope.calc = function(full_amount){
		console.log(full_amount);
		$scope.full_amount = full_amount;
		angular.forEach($scope.sp, function(value, key) {
			value.val = (value.persent/100) * full_amount;
			// console.log($scope);
			// (n.persent/100)*full_amount
		});
	}

});

// myapp.controller('show',function($scope,$http,$routeParams){
// 	$scope.full_amount = 100;
// 	$http.get("persentage/list/"+$routeParams.what).success(function(data){
// 		$scope.persentages = data;
// 	});
// });

myapp.controller('create',function($scope,$http,$timeout,$location){
	$scope.stage = 0;
	$scope.query_name;
	$scope.persons = [] ;
	$scope.overall = 100;
	// $scope.current_person_id = 0;
	$scope.addPerson = function(name,persent){
		if(type(name)==2 && type(persent)==1){
			$scope.persons.push({
				query_name: $scope.query_name,
				name:name,
				persent:persent,
				overall:$scope.overall,
				overall_persent:((persent/$scope.overall)*100)
			});
			$scope.name = $scope.persent = "";
		}else{
			$scope.errorMsg = true;
			$timeout(function(){$scope.errorMsg = false;},3000);
		}
		// console.log($scope.persons);
	}
	$scope.submitForm = function(){
		url = "persentage/save";
		$http.post(url,{persons:$scope.persons}).success(function(data){
			$location.path("persentage/list");
			console.log(data);
		});	
	}
	$scope.deleteElm = function(index){
		console.log(index);
		$scope.persons.splice(index,index); //remove elm from array.
	}
});


function type(n){
	if (typeof n == 'undefined') out = 0;
	if (typeof n == 'number') out = 1; //all numbers integers & floats
	if (typeof n == 'string') out = 2;
	if (typeof n == 'object') out = 3; //objects & array
	return out;
}










