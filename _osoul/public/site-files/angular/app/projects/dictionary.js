var myApp = angular.module('myApp',['ngResource']);

//resource is the same as http but resource is built to access restfull servers. 
	myApp.factory('dictionary_service',function($http,$log,$q,$resource){
		return obj = {
			get_data : function(get_what){
				var deferred = $q.defer();
				var request = $resource("dictionary/get/:what",{what:'@what'});
				request.query(
					{what:get_what},
					function(response){ deferred.resolve(response); },
					function(){ deferred.reject(); }
				);
				return deferred.promise;
			},
			save_word: function(){

			},
			delete_word: function(){

			}
		}
	});

	myApp.factory('service1',function($resource,$q){
		var response = $resource('dictionary/:operation', {} , {
			get_lang_dictionary: {method:'GET', prams:{lang:"@lang",what:"@what",operation:"@operation"} },
		});
		return response;
		// return obj = {
		// 	get_it: function() {
		// 		
		// 	}
		// }
	});	

myApp.controller('dictionary_controller',function($scope ,dictionary_service, service1){


	service1.get_lang_dictionary( {lang:"en",what:"all",operation:"get_all"} ).$promise.then(
		function(value){ console.log(value); },
		function(error){ console.log(error); }
	);

	$scope.data = [];
	$scope.data.words = [

	];
	// dictionary_service.get_data("all").then(
	// 	function(response){ console.log(response); $scope.var1=response.name },
	// 	function(){ console.log("error"); }
	// );

});
