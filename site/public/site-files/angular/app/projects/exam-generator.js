var myapp=angular.module('myApp',['ngRoute','ngResource']);


myapp.controller('creatorController',function($scope,$http){
	$scope.exam_layout = [];
	$scope.add_question = function(){

	};
	$scope.add_element = function(elm_type,text){
		if(elm_type=="seperator") $scope.exam_layout.push({type:"seperator"});
		else if(elm_type=="question-header") $scope.exam_layout.push({type:"question-header",text:text});
		else if(elm_type=="title") $scope.exam_layout.push({type:"title",text:text});
		console.log($scope.exam_layout);
	};
});


function type(n){
	var type = typeof n;
	if (type == 'undefined') out = 0;
	else if (type == 'number') out = 1; //all numbers integers & floats
	else if (type == 'string') out = 2;
	else if (type == 'object') out = 3; //objects & array
	else if ( (type == 'string') && (n.trim() == '') ) out = 0;
	return out;
}