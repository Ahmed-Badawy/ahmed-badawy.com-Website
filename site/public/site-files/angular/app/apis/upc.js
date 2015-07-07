var myapp=angular.module('myApp',[]);


myapp.controller('main',function($scope){
	$scope.file_type = "PNG";
	$scope.dpi = 73;
	$scope.thickness = 30;
	$scope.scale = 2;
	$scope.rotation = 0;
	$scope.font = "Arial.ttf";
	$scope.font_size = 20;
	$scope.text = "Ahmed Badawy";
	// $scope.link = "http://localhost/ahmed-badawy.com/public/barcodegen-1d/html/image.php?filetype=JPEG&dpi=72&scale=2&rotation=0&font_family=Arial.ttf&font_size=30&text=hello&thickness=20&checksum=&code=BCGcode39extended";
	$scope.link = "";

	$scope.render_img = function(){

		console.log($scope.dpi);

		$scope.link = base_url+"public/barcodegen-1d/html/image.php?filetype="+$scope.file_type+
		"&dpi="+$scope.dpi+"&scale="+$scope.scale+"&rotation="+$scope.rotation+"&font_family="+$scope.font+
		"&font_size="+$scope.font_size+"&text="+$scope.text+"&thickness="+$scope.thickness+"&code=BCGcode39extended";
		return false;
	}
	$scope.render_img();

	// $scope.$watchGroup(["file_type","text","dpi",""],function(){
	// 	console.log("hello");
	// 	$scope.construct_img();
	// })

});