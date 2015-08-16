var myApp = angular.module('myApp',[]);



myApp.filter('boolean', [function(){
    return function(input){
        if(input==1) return true;
        else return false;
    };
}]);
myApp.filter('is_checked', [function(){
    return function(input){
        if(input==1) return "checked";
        else return "";
    };
}]);




myApp.controller("client_manager",function($scope) {
    $scope.Edited_item = {};

    $scope.clients = angular_clients;
    console.log($scope.clients);

    $scope.delete_it = function(href){
        var r = confirm("هل أنت متأكد من إلغاء العنصر ؟");
        if (r == true) {
            setTimeout(function(){
                window.location.assign(href)
            }, 1000);
        }
    }

    $scope.set_selected = function(n){
        console.log(n);
        $scope.Edited_item=n;
    }


    $scope.highlighted_emails = [];
    $scope.highlight_email = function(n){
        n.color = !n.color;
        if(n.color){
            $scope.highlighted_emails.push(n.email);
        }else{
            $scope.highlighted_emails = remove_value_from_array($scope.highlighted_emails, n.email);
        }
        console.log($scope.highlighted_emails);
    }
    $scope.select_all = function(){
        $scope.highlighted_emails = [];
        for(r in $scope.clients){
            $scope.clients[r].color = true;
            $scope.highlighted_emails.push($scope.clients[r].email);
        }
    }
    $scope.unselect_all = function(){
        $scope.highlighted_emails = [];
        for(r in $scope.clients){
            $scope.clients[r].color = false;
        }
    }


});



myApp.controller("todo_controller",function($scope) {

    $scope.todos = [
    	{txt:"one",status:false,important:false},
    	{txt:"two",status:false,important:false},
    	{txt:"one",status:false,important:false},
    	{txt:"three",status:false,important:false},
    	{txt:"one",status:false,important:false},
    	{txt:"four",status:false,important:false},
    	{txt:"one",status:false,important:false},
    	{txt:"five",status:false,important:false},
    ];


    $scope.set_selected = function(n){
        console.log(n);
        $scope.Edited_item=n;
    }

});

myApp.controller("registratoin_controller",function($scope) {
    $scope.registed_users = angular_users;
    $scope.Edited_item= {};

    $scope.fields = [];
    for (var property in angular_users[0]) {
        $scope.fields.push(property);
    }
    //console.log($scope.fields);

    $scope.set_selected = function(n){
        console.log(n);
        $scope.Edited_item=n;
    }

    $scope.delete_it = function(href){
        var r = confirm("هل أنت متأكد من إلغاء العنصر ؟");
        if (r == true) {
            setTimeout(function(){
                window.location.assign(href)
            }, 1000);
        }
    }

});



myApp.controller('chat_controller',function($scope,$http,$timeout){
    $scope.chat = {};
    $scope.chat.last_id = 0;
    $scope.chat.msgs = [];


    //$scope.client_email = window.user_email;

    $scope.get_msgs = function(last_id){
        $http.get("recive-msgs/"+last_id).success(function(data){
            //console.log(data);
            if(data.msgs.length > 0){
                angular.forEach(data.msgs, function(value, key) {
                    this.push(value);
                },$scope.chat.msgs);
                //$scope.chat.msgs.concat(data.msgs);
            }

            //console.log($scope.chat.last_id);
            //console.log($scope.chat.msgs);
            $scope.chat.last_id = data.last_id;
            $timeout(function(){
                $scope.get_msgs($scope.chat.last_id);
            },4000);

        });
    };
    $scope.get_msgs($scope.chat.last_id);


    $scope.send_msg = function(){
        if($scope.msg == '') return false;
        $http.post("send-msg",{ msg:$scope.msg }).success(function(data){
            //console.log(data);
            $scope.msg = "";
        });
    }

    $scope.define_class = function(sender_email,client_email){
        if(sender_email == client_email) return "text-right";
        return "bg-danger text-left";
    }
});





myApp.controller('admin_chat_controller',function($scope,$http,$timeout){
    $scope.chat = {};
    $scope.chat.last_id = 0;
    $scope.chat.msgs = [];
    $scope.promise = undefined;


    //$scope.client_email = window.user_email;

    $scope.get_msgs = function(last_id){
        $http.post("admin-recive-msgs",{last_id:last_id,client_email:$scope.current_client}).success(function(data){
            // console.log(data);
            if(data.msgs.length > 0){
                angular.forEach(data.msgs, function(value, key) {
                    this.push(value);
                },$scope.chat.msgs);
            }
            $scope.chat.last_id = data.last_id;
            $scope.promise = $timeout(function(){
                $scope.get_msgs($scope.chat.last_id,$scope.current_client);
            },4000);
        });
    };


    $scope.send_msg = function(){
        if($scope.msg == '') return false;
        $http.post("send-msg",{ msg:$scope.msg, client_email: $scope.current_client }).success(function(data){
            //console.log(data);
            $scope.msg = "";
        });
    }


    $scope.selected_email = '';
    $scope.set_current_client = function(current_client){
        $scope.current_client = current_client;
        if($scope.promise == undefined) $scope.promise = $scope.get_msgs($scope.chat.last_id,$scope.current_client);
        else {
            $scope.chat.last_id = 0;
            $scope.chat.msgs = [];
            $scope.promise.cancel();
            $scope.promise = $scope.get_msgs($scope.chat.last_id,$scope.current_client);
        }
    } 

    $scope.define_class = function(sender_email,client_email){
        if(sender_email == client_email) return "text-right";
        return "bg-danger text-left";
    } 

});







function refresh(){
    window.location.assign(href);
}
//remove a value from an array
function remove_value_from_array(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}



