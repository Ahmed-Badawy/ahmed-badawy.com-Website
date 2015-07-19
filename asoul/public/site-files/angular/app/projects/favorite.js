var myapp=angular.module('myApp',[]);


myapp.controller('favorite_controller',function($scope , $http , $timeout, $location){
	$scope.data = { };
	$scope.selected_cate = "all";
	$scope.newSite = false;
	$scope.newCate = {};


	$scope.change_cate = function(cate){
		$scope.selected_cate = cate.name;
		$scope.Load_server_data();	
	}
	$scope.Load_server_data = function(){
		$http.get('get-favorite/'+$scope.selected_cate).success(function(answer){ 
			cates = [ ];
			angular.forEach(answer.cates, function(cate){
				cate_obj = { name : cate, left_tab_active_class: " btn btn-default " }
				if($scope.selected_cate == cate) cate_obj.left_tab_active_class = "btn btn-primary";					
				cates.push(cate_obj);
			})
			$scope.data.cates = cates;
			$scope.data.real_cates = answer.real_cates;
			angular.forEach(answer.sites, function(site){
				if(typeof $scope.selected_site!='undefined' && site.id == $scope.selected_site.id) $scope.selected_site = site;
			});
			$scope.data.sites = answer.sites;
		});
		if(typeof timeout_promise != 'undefined') $timeout.cancel(timeout_promise);				
		timeout_promise = $timeout($scope.Load_server_data , 180000);		
	};
	$scope.Load_server_data();

	$scope.gotourl = function(site){
		// window.location = url;   //opens a new window with new url.
		site.visits+=1;
		$http.post('save-favorite/visite-site',site).success(function(){
			$scope.Load_server_data();
		})
		window.open(site.url);
	}

	$scope.add_site = function(){
		$http.post('save-favorite/site',$scope.newSite).success(function(){
			$scope.Load_server_data();
			$scope.newSite = false;	
		});
	}
	$scope.add_cate = function(name){
		$http.post('save-favorite/cate',{ name: name } ).success(function(){
			$scope.Load_server_data();
			$scope.newSite.cate = name;	
			$scope.newSite.newCate = '';	
		});
	}
	$scope.hover_site = function(hovered_site){
		if($scope.newSite==false){
			angular.forEach($scope.data.sites,function(cate_site){
				cate_site.class='';
			});
			hovered_site.class = 'hovered-site';
			$scope.selected_site = hovered_site;
		}
	}
	$scope.edit_site = function(){
		$http.post('save-favorite/edit-site',$scope.selected_site).success(function(){
			$scope.Load_server_data();
			$scope.selected_site = false;
		})
	}
	$scope.add_sub = function(){
		$http.post('save-favorite/add-sub',$scope.selected_site).success(function(){
			$scope.Load_server_data();
		})		
	}
	$scope.delete_site = function(site){
		if(typeof site != 'undefined' && site != false){
			$http.post('delete-favorite-site',site).success(function(){
				$scope.Load_server_data();
			})	
		}	
	}
});

