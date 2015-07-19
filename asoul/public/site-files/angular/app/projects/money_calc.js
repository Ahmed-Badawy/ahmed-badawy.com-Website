var myapp=angular.module('myApp',[]);


myapp.controller('main_controller',function($scope){

	$scope.clearit = function(){
		$scope.hun2 = null;
		$scope.hun = null;
		$scope.fif = null;
		$scope.twen = null;
		$scope.ten = null;
		$scope.fiv = null;
		$scope.one = null;
	}

	$scope.$watchGroup(['hun2','hun','fif','twen','ten','fiv','one'], function(newValues, oldValues, scope) {
		$scope.hundreds2 = (isNumeric(newValues[0]*200))? newValues[0]*200: 0;
		$scope.hundreds = (isNumeric(newValues[1]*100))? newValues[1]*100: 0;
		$scope.fiftes = (isNumeric(newValues[2]*50))? newValues[2]*50: 0;
		$scope.twentes = (isNumeric(newValues[3]*20))? newValues[3]*20: 0;
		$scope.tens = (isNumeric(newValues[4]*10))? newValues[4]*10: 0;
		$scope.fives = (isNumeric(newValues[5]*5))? newValues[5]*5: 0;
		$scope.ones = (isNumeric(newValues[6]*1))? newValues[6]*1: 0;
		$scope.sum = $scope.hundreds2 + $scope.hundreds +
			$scope.fiftes + $scope.twentes + $scope.tens + $scope.fives + $scope.ones;
	});

});	


function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}