var app = angular.module('bank_profit_app',[]);


app.controller('bank',function($scope){
	$scope.type = "adv";
	$scope.per = .006;
	$scope.months = 1;
	$scope.profit = 0;
	$scope.total = 0;

	$scope.msgs = { };
	$scope.$watch('type',function(){
		calc($scope);
		if($scope.type == "norm") $scope.msgs.typeMsg = "إنها الطريقة العادية لحساب نسبة الربح على المبلغ الكلى";
		if($scope.type == "adv") $scope.msgs.typeMsg = "إنها الطريقة مطورة لحساب الفوائد بإضافة الأرباح الشهرية لكل شهر قبل حساب أرباح الشهر التالى.";
	});
	$scope.$watch('amount',function(){ calc($scope); })
	$scope.$watch('per',function(){ calc($scope); })
	$scope.$watch('months',function(){ calc($scope); })


});

	var calc = function($scope){
		if($scope.type == "adv"){
			var profit = 0;
			for (var i = $scope.months ; i > 0; i--) {
				profit += ($scope.amount * $scope.per);
			};
			$scope.profit = profit;
			$scope.total = total = profit + $scope.amount;
			console.log(total);
		}
		if($scope.type == "norm"){
			var months = Math.floor($scope.months/12)
			$scope.profit = $scope.amount * ($scope.per*10) * months;
			$scope.total = total = $scope.profit + $scope.amount;
			console.log(total);
		}	
	}