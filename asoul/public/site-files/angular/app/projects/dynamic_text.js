var myApp = angular.module('myApp',['ngRoute','ngResource']);


myApp.config(function($routeProvider){
	$routeProvider
	.when('/main',{
		templateUrl:"dynamic/get",
		controller: "dynamic_text"
	})
	.otherwise({
		redirectTo:"/main",
	})
})



myApp.controller('dynamic_text',function($scope,$http,$location){
	$scope.editable = "true";
	$scope.spellcheck = "true";



	$scope.calc = function(){
		ps = 	window.document.getElementById("dynamic_content").getElementsByTagName("p");
	 	ols = 	window.document.getElementById("dynamic_content").getElementsByTagName("ol");
	 	uls = 	window.document.getElementById("dynamic_content").getElementsByTagName("ul");

	 	editable= ($scope.editable=='false') ? false : true;
	 	spellcheck= ($scope.spellcheck=='false') ? false : true;
	 	ce(ps,editable,spellcheck);
	 	ce(ols,editable,spellcheck);
	 	ce(uls,editable,spellcheck);
	}
	$scope.calc();

    $scope.$watch('[editable, spellcheck]', function () {
		$scope.calc();
 	}, true);

	$scope.save = function(){
		dynamic_content = window.document.getElementById("dynamic_content").innerHTML;
		// console.log(dynamic_content);
		$http.post("dynamic/save",{text:dynamic_content}).success(function(data){
			// window.alert('Saved');
			swal({
		        title: "SAVED!",
		        text: "New Text Saved",
		        type: "success",
		        confirmButtonText: "Ok"
		    });
		});
	}
	$scope.undo = function(){
		swal({
		  title: "Are you sure ?",
		  text: "You will not be able to recover unsaved changes!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "Undo Changes!",
		  closeOnConfirm: false
		},
		function(){
			swal("Done!", "Unsaved Changes Have Been Deleted.", "success");
			window.location = "";
		});

	}
	$scope.reset = function(){
		swal({
		  title: "Are you sure ?",
		  text: "Reset to Normal Defaults!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "Reset to Defaults!",
		  closeOnConfirm: false
		},
		function(){
			$http.post("dynamic/save",{reset:true}).success(function(data){
				// console.log(data);
				swal("Done!", "all Values Reseted to Defaults.", "success");
				window.location = "";
			});	
		});
	}

});

	get_id = function(name){
		return elm = window.document.getElementById(name);
	}

	ce = function(elms_array,editable,spellcheck){
	 	for(var i=0;i<elms_array.length;i++){
	 		elms_array[i].contentEditable = editable;
	 		elms_array[i].spellcheck = spellcheck;
	 	}
	}

	// elms = window.document.getElementsByTagName("p");
	// for(elm in elms){
	// 	elm.contentEditable = true;
	// }
	// elm = get_id('area5');
	