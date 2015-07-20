var myApp = angular.module('myApp',['ngRoute','ngResource']);


var site_base = "../ng-temp/Projects/movies/";
var partial_base = "../ng-temp/Projects/movies/partials/";
myApp.config(function($routeProvider){
	$routeProvider
	.when('/',{
		// redirectTo: "/main/year/all",
		redirectTo: "/main/year/all",
	})
	.when('/attach',{
		templateUrl:site_base+"main_attach",
		controller: "attach"
	})
	.when('/play',{
		templateUrl:partial_base+"play",
		controller: "attach"
	})	
	.when("/main/:what/:val/:page",{ 
		templateUrl: site_base+"main",
		controller: "main_controller",
	})
	.when("/main/:what/:val",{ 
		templateUrl: site_base+"main",
		controller: "main_controller",
	})	
	.when('/genre',{
		templateUrl:partial_base+"genre",
		controller:"part_controller",
	})
	.when('/actors',{
		templateUrl:partial_base+"actors",
		controller:"part_controller",
	})
	.when('/franch',{
		templateUrl:partial_base+"franch",
		controller:"part_controller",
	})	
	.when('/rating',{
		templateUrl:partial_base+"rating",
	})			
	.otherwise({
		redirectTo:"/",
	})
})



myApp.filter('wc',function(){
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
		if(what && what=="imdb") link = "http://www.imdb.com/find?q="+id;
		return link;
	}		
});
myApp.filter('last_elm',function( ){
	return function (str) {
		ar = str.split('/');
		last_elm = ar[ar.length-1];
		last_elm = last_elm.replace(/'/i,'');
		// if( !(/^_.*/.test(last_elm)) ) return last_elm;
		return last_elm;
	}		
});

myApp.filter('offset', function() {
	return function(input, start) {
		if(input){	
			start = parseInt(start, 10);
			return input.slice(start);
		}
	};
});

myApp.factory('service',function($resource){
	var response = $resource('movies/list', {} , {
		movies: {method:'get', isArray:true , prams:
			{year:"@year",genre:"@genre",title:"@title",player:"@player",franch:"@franch"} },
	});
	return response;
});



myApp.controller('main_controller',function($scope,$routeParams,$http,$timeout,$location,$filter,service){
	$scope.data = {};
	$scope.data.items_per_page = 50;
	$scope.data.current_page = ($routeParams.page && $routeParams.page!=(null || false || undefined) ) ? $routeParams.page-1 : 0;
	// console.log($scope.data.current_page);
	$scope.data.reverse = true;
	$scope.opened_record_id = null;
	var record_hovered = null;
	var timeout_promise = false;
	if($routeParams.what == "title") $scope.data.q = $routeParams.val;
	$scope.orderby = "gross1";
	$scope.loader = true;
	
	$scope.showing = function(what){
		total_results=$scope.data.movies.length();
		results_in_page= ($scope.data.current_page)
		pages_count=$scope.pageCount()+1;
		data.items_per_page
	}	
	$scope.get_movies = function(key,value){
		if(key == "year") {
			response = service.movies({year:value});
			$scope.page_msg = (value=="all") ? "أعلى الأرباح على مدى التاريخ" : "أفلام عام "+value;
		};
		if(key == "genre") {
			response = service.movies({genre:value});
			$scope.page_msg = "أفلام تحت التصنيف: "+value;			
		}
		if(key == "title") {
			response = service.movies({title:value});
			$scope.page_msg = "البحث عن: "+value;
		}
		if(key == "actor") {
			response = service.movies({player:value});
			$scope.page_msg = "أفلام الممثل/ة: "+value;
		}
		if(key == "franch") {
			response = service.movies({franch:value});
			$scope.page_msg = "سلسلة: "+value;			
		}
		if(angular.isDefined(response)) response.$promise.then(
			function(data){ $scope.data.movies = data; init_pagi();$scope.loader=false; },
			function(error){ console.log("error"); }
		);
	}
	if($routeParams.what) $scope.get_movies($routeParams.what,$routeParams.val);

	$scope.img_click = function(m){
		if(m.id == $scope.opened_record_id) return $filter("git")(m.title,"google_search");
		return ;
	}
	$scope.$watch("data.q",function(value){
		if(value && value!=undefined && value!=false){
			$scope.loader = true;
			$scope.data.movies = false;
			if(timeout_promise && angular.isDefined(timeout_promise)) $timeout.cancel(timeout_promise); 
			timeout_promise = $timeout(function(){
				// console.log($location);
				url = "/main/title/"+value;
				$location.path(url);
			},1000);
		}
	});

	$scope.save_fransh = function(movie_id,fransh){
		$http.post("movies/update/fransh",{id:movie_id , fransh:fransh}).success(function(data){
			console.log(data);
		});
	}

	$scope.record_class = function(movie){
		if(movie.id == $scope.opened_record_id) c = "media media-open animate-repeat";
		else{
			c = "media animate-repeat";
			if(record_hovered == movie.id) c = c+" media-hover";
			// if(movie.attach_files) c = c+" alert-warning";
		}
		// c = "media media-open animate-repeat";
		return c;
	}

	$scope.dont_open = false;
	$scope.record_clicked = function(movie_id){
		if($scope.opened_record_id == movie_id)$scope.opened_record_id = null;
		else if(!$scope.dont_open) $scope.opened_record_id = movie_id;
	}

	$scope.record_hover = function(movie_id){
		record_hovered = movie_id;
	}


var init_pagi = function(){
	array_data = $scope.data.movies;
	$scope.records_count = array_data.length;
	filter = "data.search_text";//must be in a string form	
	var page_timeout_promise=null;


	$scope.prevPageDisabled = function() {
		return $scope.data.current_page === 0 ? "disabled" : "";
	};
	$scope.nextPageDisabled = function() {
		return $scope.data.current_page === $scope.pageCount() ? "disabled" : "";
	};
	$scope.prevPage = function() {
		if ($scope.data.current_page > 0) { $scope.setPage($scope.data.current_page-1); }
	};
	$scope.nextPage = function() {
		if ($scope.data.current_page < $scope.pageCount()) { $scope.setPage($scope.data.current_page+1); }
	};
	$scope.pageCount = function() {
		return count = Math.ceil($scope.records_count/$scope.data.items_per_page)-1;
	};
	$scope.range = function() {
		var rangeSize = 2;
		var before = [];
		var after = [];
		var start;
		current_page = $scope.data.current_page;

		// current_page = 19;
		// console.log($scope.pageCount());
		
		if(current_page!=0) for(i=current_page-1;i>=0;i--){ before.unshift(i); if(i<current_page-1)break; }
		if(current_page!=$scope.pageCount()) for(i=current_page+1;i<=$scope.pageCount();i++){ after.push(i); if(i>current_page+1)break; }
		console.log(before+" --|"+current_page+"|-- "+after);
		pagi= { before:before, after:after };
		$scope.pagi = pagi;
		// pagi.after = after;
		// return pagi
	};
	$scope.range();

	$scope.setPage = function(n) {
		url = "/main/"+$routeParams.what+"/"+$routeParams.val+"/"+(n+1);
		// console.log(url);
		$location.path(url);
		// $scope.data.current_page = n;
		// $scope.range();
	};
	$scope.$watch(filter,function(){
		if($scope.data.current_page > $scope.pageCount) $scope.setPage(0);
	})
	$scope.$watch('data.gotopage',function(value){
	if(angular.isDefined(page_timeout_promise) && page_timeout_promise!=null) $timeout.cancel(page_timeout_promise); 
		if(angular.isDefined(value)){
page_timeout_promise = $timeout(function(){
	if( (value-1)<=$scope.pageCount() ) $scope.setPage(value-1);
},1000);
		}
	});
}

});













myApp.controller('part_controller',function($scope,$http){
	$scope.data.current_page = 0;
	$scope.data.items_per_page = 60;
	// $scope.load_info = function(get_what){
	// 	if( (get_what=="genres" && !$scope.data.genres) || (get_what=="actors" && !$scope.data.actors)){
	$http.get('movies/info').success(function(data){
		$scope.data.actors = data.actors;
		$scope.data.genres = data.genres;
		$scope.data.franch = data.franch[0];
		// console.log(data.genres);
		init_pagi(data.actors);
	});

var init_pagi = function(array_data){
	$scope.records_count = array_data.length;
	filter = "data.actor_filter";//must be in a string form	


	$scope.prevPageDisabled = function() {
		return $scope.data.current_page === 0 ? "disabled" : "";
	};
	$scope.nextPageDisabled = function() {
		return $scope.data.current_page === $scope.pageCount() ? "disabled" : "";
	};
	$scope.prevPage = function() {
		if ($scope.data.current_page > 0) { $scope.setPage($scope.data.current_page-1); }
	};
	$scope.nextPage = function() {
		if ($scope.data.current_page < $scope.pageCount()) { $scope.setPage($scope.data.current_page+1); }
	};
	$scope.pageCount = function() {
		return count = Math.ceil($scope.records_count/$scope.data.items_per_page)-1;
	};
	$scope.range = function() {
		var rangeSize = 2;
		var before = [];
		var after = [];
		var start;
		current_page = $scope.data.current_page;
		// current_page = 19;
		// console.log($scope.pageCount());
		
		if(current_page!=0) for(i=current_page-1;i>=0;i--){ before.unshift(i); if(i<current_page-1)break; }
		if(current_page!=$scope.pageCount()) for(i=current_page+1;i<=$scope.pageCount();i++){ after.push(i); if(i>current_page+1)break; }
		console.log(before+" --|"+current_page+"|-- "+after);
		pagi= { before:before, after:after };
		$scope.pagi = pagi;
		// pagi.after = after;
		// return pagi
	};
	$scope.range();

	$scope.setPage = function(n) {
		$scope.data.current_page = n;
		$scope.range();
	};
	$scope.$watch(filter,function(){
		$scope.setPage(0);
	})	
}

});




myApp.controller('attach',function($scope,$http,$route,service){
	$scope.data = {};
	// $http.get("movies/attachinfo").success(function(data){
	// 	$scope.data.files = data.files;
	// 	$scope.data.all_files = data.all_files;
	// 	$scope.data.attached = data.attached;
	// });
	// $scope.attach_file = function(id,file){
	// 	$http.post("movies/attachfolder",{id:id,file:file}).success(function(data){
	// 		console.log(data);
	// 		$route.reload();
	// 	});
	// }
	// $scope.delete_attach = function(file){
	// 	$http.post("movies/attachfolder",{file:file,op:"delete"}).success(function(data){
	// 		// console.log(data);
	// 		$route.reload();
	// 	});		
	// }
	// $scope.attach = function(movie){
	// 	$http.post("movies/attach",movie).success(function(data){
	// 		console.log(data);
	// 		$scope.attachdata = {};
	// 		$scope.attachdata.data = data;
	// 		$scope.attachdata.id = movie.id;
	// 	});
	// }
	// $scope.attach_file = function(folder_path,id){
	// 	$http.post('movie/attachfolder',{path:folder_path,id:id}).success(
	// 	function(data){
	// 		console.log(data);
	// 	});
	// }
	$scope.get_movies = function(key,value){
		if(key == "year") response = service.movies({year:value});
		if(key == "genre") response = service.movies({genre:value});
		if(key == "title") response = service.movies({title:value});
		if(key == "actor") response = service.movies({player:value});
		if(key == "franch") response = service.movies({franch:value});
		if(angular.isDefined(response)) response.$promise.then(
			function(data){ $scope.data.movies = data; },
			function(error){ console.log("error"); }
		);
	}
});