var myapp=angular.module('myApp',[]);


myapp.controller('main',function($scope){
	$scope.text = "Hello World";
	$scope.size = 200;
	$scope.padding = 5;

	$scope.construct_img = function(){
		$scope.link = base_url+"api/qr-gene/"+$scope.text+"?size="+$scope.size+"&padding="+$scope.padding;
		$scope.img = $scope.link;
	}
	$scope.construct_img();

	$scope.$watchGroup(["text","size","padding"],function(){
		console.log("hello");
		$scope.construct_img();
	})

});