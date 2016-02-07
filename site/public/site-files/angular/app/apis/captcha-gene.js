var myapp=angular.module('myApp',[]);


myapp.controller('main',function($scope){
	$scope.text = "Hello";
	$scope.font = "FONT_NAME";
	$scope.height = 75;
	$scope.width = 120;

	//console.log(all_fonts);
	all_fonts = JSON.parse(all_fonts);
	// $scope.link = "";
	$scope.showen_imgs = [];
	$scope.showen_fonts = [];
	// console.log(all_fonts);
	// $scope.showen_links = all_fonts;

	$scope.gene_click = function(){
		var image_elm = {};
		for(i=0;i<all_fonts.length;i++){
			font = all_fonts[i];
			// image_elm.font = font;
			image_elm.link = base_url+"api/captcha-gene/"+$scope.text+"?width="+$scope.width+"&height="+$scope.height+"&font="+font;
			$scope.showen_imgs.push(image_elm.link);
			$scope.showen_fonts.push(font);
		}
		// console.log($scope.showen_imgs);
		// console.log("hi");
	}
	// $scope.determine_link = function(font){
		// font = ($scope.font=="all") ? "FONT_NAME" : $scope.font;
	    // return $scope.link ;
	// }
	// console.log(all_fonts);
	// $scope.determine_link();

	// $scope.$watchGroup(["text","width","height",'font'],function(){
	// 	$scope.determine_link();
	// })	


});