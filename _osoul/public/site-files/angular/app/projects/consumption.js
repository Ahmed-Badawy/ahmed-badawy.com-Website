var myApp = angular.module('myApp',[]);




myApp.controller('water',function($scope) {
    $scope.ec = 0;

    $scope.calc = function(){
        total_consumption = $scope.ec;
        $cost = false;
        $scope.final_ans = 0 ;


        if(total_consumption <= 9999999999999 ) $cost = 150;
        if(total_consumption <= 60 ) $cost = 140;
        if(total_consumption <= 50 ) $cost = 65;
        if(total_consumption <= 40 ) $cost = 57;
        if(total_consumption <= 30 ) $cost = 46;
        if(total_consumption <= 20 ) $cost = 35;
        if(total_consumption <= 10 ) $cost = 25;

        $scope.final_cost = $cost ;
    }

});

myApp.controller('electricity',function($scope){

    var total_consumption,
    lower_levels_consumption,
    consumption_stac_layer_data;
    $scope.ec = 0;
    $scope.type = "normal";
    $scope.total_money = 0;
    $scope.show_ans = false;


    $scope.calc = function(){
        $scope.show_ans = true;
        total_consumption = $scope.ec;
        lower_levels_consumption = [];
        $scope.total_money = 0;

        //determine consumption stacks
        if($scope.type == "normal") {
            if (total_consumption > 100) {
                stacs = [
                    {min: 1, max: 200, cost: 16, additional: 3},
                    {min: 201, max: 350, cost: 24, additional: 5},
                    {min: 351, max: 650, cost: 34, additional: 7},
                    {min: 651, max: 1000, cost: 60, additional: 10},
                    {min: 1001, max: 9999999999, cost: 74, additional: 15},
                ];
            }
            else if (total_consumption <= 100) {
                stacs = [
                    {min: 1, max: 50, cost: 7.5, additional: 1},
                    {min: 51, max: 100, cost: 14.5, additional: 1.5},
                ];
            }
        }else if($scope.type=="commercial"){
            if (total_consumption > 100) {
                stacs = [
                    {min: 1, max: 250, cost: 44, additional: 0},
                    {min: 251, max: 600, cost: 59, additional: 0},
                    {min: 601, max: 1000, cost: 78, additional: 0},
                    {min: 1001, max: 9999999999, cost: 83, additional: 0},
                ];
            }
            else if (total_consumption <= 100) {
                stacs = [
                    {min: 1, max: 100, cost: 30, additional: 0},
                ];
            }
        }

        //determine the consumption stac & final_layer_consumption
        for(i=0;i<=stacs.length-1;i++){
            if(total_consumption >= stacs[i].min && total_consumption <= stacs[i].max){
                consumption_stac = i;
                consumption_stac_layer_data = {
                    layer           :   consumption_stac,
                    consumption     :   ( (stacs[i-1]) ? total_consumption - stacs[i-1].max: total_consumption) ,
                    min             :   stacs[i].min,
                    max             :   stacs[i].max,
                    cost            :   stacs[i].cost,
                    additional      :   stacs[i].additional
                };
            }
        }
        console.log(consumption_stac);
        //console.log(final_layer_consumption);

        for(i=consumption_stac;i>=0;i--) {
            if (i == consumption_stac) continue;
            layer_consumption = stacs[i].max - stacs[i].min + 1;
            //layer_consumption = (i==consumption_stac) ?
            //    ( (stacs[i-1]) ? total_consumption - stacs[i-1].max: total_consumption)
            //    : stacs[i].max - stacs[i].min + 1;
            layer_data = {
                layer: i,
                consumption: layer_consumption,
                min: stacs[i].min,
                max: stacs[i].max,
                cost: stacs[i].cost,
                additional: stacs[i].additional
            };
            lower_levels_consumption.push(layer_data);
            $scope.total_money += (layer_data.cost * layer_data.consumption / 100);

        }
        $scope.lower_levels_consumptions = lower_levels_consumption;
        $scope.consumption_stac_layer_data = consumption_stac_layer_data;
        $scope.total_money +=
            consumption_stac_layer_data.additional
            + (consumption_stac_layer_data.cost*consumption_stac_layer_data.consumption/100)
        ;

        //console.log(lower_levels_consumption);
        //console.log(consumption_stac_layer_data);
        console.log($scope.total_money);

    }







});
