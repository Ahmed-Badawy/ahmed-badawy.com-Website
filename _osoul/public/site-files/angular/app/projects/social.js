var myapp=angular.module('myApp',[]);


myapp.controller('social_id_controller',function($scope , $http){

	$http.get('social-id-citys-codes').success(function(citys_codes){
		states_ids = citys_codes;
	});

	$scope.data = { };
	$scope.$watch('id_num',function(value){
		var1 = String(value);

		if(!value) $scope.data = { };
		if(value && var1.length != 14) $scope.data = { };
		if(value && var1.length == 14) {
			if(var1[0] == 1) $scope.data.mel = '18';
			else if(var1[0] == 2) $scope.data.mel = '19';
			else if(var1[0] == 3) $scope.data.mel = '20';

			$scope.data.year = var1[1]+var1[2];
			$scope.data.month = var1[3]+var1[4];
			$scope.data.day = var1[5]+var1[6];
			$scope.data.age = calculateAge(new Date($scope.data.mel+$scope.data.year,$scope.data.month-1,$scope.data.day));

			$scope.data.state = states_ids[ var1[7]+var1[8] ];

			$scope.data.id = var1[9]+var1[10]+var1[11]+var1[12]+var1[13];
			$scope.data.type = (var1[12]%2 == 1) ? 'ذكر' : 'إنثى';

			sep = "-";
			$scope.data.birth_date = $scope.data.mel+$scope.data.year+sep+$scope.data.month+sep+$scope.data.day;

			// console.log($scope.data);
		}
	});
});



function calculateAge(birthday) { // birthday is a date
    var ageDifMs = Date.now() - birthday.getTime();
    var ageDate = new Date(ageDifMs); // miliseconds from epoch
    years = Math.abs(ageDate.getUTCFullYear() - 1970);
    months = Math.abs();
    return years;
}