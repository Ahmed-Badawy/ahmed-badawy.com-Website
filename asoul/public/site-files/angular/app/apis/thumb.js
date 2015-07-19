var myapp=angular.module('myApp',[]);


myapp.controller('main',function($scope){
	$scope.img = "projects/actors.jpg";
	$scope.height = 300;
	$scope.width = 300;

	$scope.construct_img = function(){
		$scope.link = base_url+"api/thumb/"+$scope.img+"?width="+$scope.width+"&height="+$scope.height;
		// $scope.img = $scope.link;
	}
	// $scope.construct_img();

	$scope.$watchGroup(["img","width","height"],function(){
		$scope.construct_img();
	})

});