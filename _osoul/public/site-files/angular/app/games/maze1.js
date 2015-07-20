var myApp = angular.module('myApp',['ngRoute','ngResource']);

		

myApp.controller('maze1',function($scope,$http,$timeout){
	
	$scope.mouse_leave = function(){
            swal({
                    title: "غلطة و تعيد من تانى",
                    text: "ها! عاوز تعيد تانى ؟",
                    type: "error",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "عاوز ألعب لعبة تانية!",
                    closeOnConfirm: false
                },
                function(){
                    swal("مفيش ألعاب تانية دلوقتى!", "هنعيدلك اللعبة من تانى", "success");
            });
    };

	$scope.point_met = function(){
            sweetAlert("أهلا وسهلا!", "وصلت ألف مبروك!", "success");
    };

});
