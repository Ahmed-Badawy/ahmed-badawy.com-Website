var myApp = angular.module('myApp',[]);


myApp.controller('main',function($scope,$timeout){
	$scope.current_time = 0;
	$scope.lang = "en";
	video = window.document.getElementById('vid');
	playing = false;


	$scope.seek = function(time){
		video.play();
		video.currentTime = time;
	}
	$scope.peek = function(){
		$scope.current_time = video.currentTime;
		console.log($scope.current_time);
	}
	$scope.get_class = function(start,end,key){
		if($scope.current_time >= start && $scope.current_time < end){
			if(key!='') console.log(key);
			return " currently_played ";
		}else return ' ';
	}

	every_sec = function(){
		timeout_promise = $timeout(function(){
			$scope.peek();
			every_sec();
		},300);
	}
	every_sec();


});













