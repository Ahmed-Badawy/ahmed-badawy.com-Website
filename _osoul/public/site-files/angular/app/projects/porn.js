var myApp = angular.module('myApp',['ngRoute','ngResource']);


var site_base = "../ng-temp/Projects/porn/";
var partial_base = "../ng-temp/Projects/porn/partials/";
myApp.config(function($routeProvider){
	$routeProvider
	.when('/',{
		templateUrl: site_base+"main",
		controller: "main_controller"
	})	
	.otherwise({
		redirectTo:"/",
	})
});



myApp.filter('wc',function( ){
	return function (str) {
		return (str + '').replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function ($1) {
			return $1.toUpperCase();
		});
	}		

});
myApp.filter('git',function( ){
	return function (id,what) {
		url = encodeURIComponent(id);
		if(what && what=="mojo_movie") link = "http://boxofficemojo.com/movies/?id="+id+".htm";
		if(what && what=="mojo_chart") link = "http://boxofficemojo.com/genres/chart/?id="+id+".htm";
		if(what && what=="mojo_img") link = "http://www.boxofficemojo.com/images/"+id+"_poster.jpg";
		if(what && what=="google_search") link = "http://www.google.com/search?as_q="+url;
		if(what && what=="google_img") link = "http://images.google.com/search?tbm=isch&q="+url;
		if(what && what=="subscene") link = "http://subscene.com/subtitles/title?q="+url;
		return link;
	}		
});



myApp.factory('porn_service',function($resource){
	var response = $resource('porn/list', {} , {
		list: {method:'get', isArray:true , prams:
			{title:"@title",pornstar:"@pornstar",tag:"@tag"} },
	});
	return response;
});



myApp.controller('main_controller',function($scope,$routeParams,$http,$timeout,$location,porn_service){
	$scope.data = {};

	$scope.get_vids = function(key,value){
		// if(key == "title") response = porn_service.list({title:value});
		// if(key == "pornstar") response = porn_service.list({pornstar:value});
		// if(key == "tag") response = porn_service.list({tag:value});
		response = porn_service.list();
		if(angular.isDefined(response)) response.$promise.then(
			function(data){ $scope.data.porn = data; },
			function(error){ console.log("error"); }
		);
	}
	// if($routeParams.what) $scope.get_vids($routeParams.what,$routeParams.val);
	$scope.get_vids();

	$scope.open_file = function(file){
		$http.post("porn/operate",{file:file.full_path,op:"open_file"});
	}
});

