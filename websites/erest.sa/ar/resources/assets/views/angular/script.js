var app = angular.module('my_app',[]);


app.controller('chat_controller',function($scope,$http,$timeout){
	$scope.msg = "";
	$scope.client_email = window.client_email;

	$scope.get_msgs = function(){
		//console.log("hello");
		 $http.post("recive-msgs",{ client_email:$scope.client_email }).success(function(data){
	         console.log(data.msgs);
             $scope.msgs_array = data.msgs;
	     });
        $timeout(function(){
            $scope.get_msgs();
        },2000);
	};
	$scope.get_msgs();


	$scope.send_msg = function(){
		if($scope.msg == '') return false; 
		console.log($scope.client_email);

		$http.post("send-msg",{ msg:$scope.msg,client_email:$scope.client_email }).success(function(data){
	        console.log(data);
	    });
		$scope.msg = "";
        $scope.get_msgs();
	}

    $scope.define_class = function(n,client_email){
        if(n.sender_email == client_email) return "text-right";
        else return "bg-danger text-right";
    }
});


app.controller('admin_chat_controller',function($scope,$http,$timeout){
    $scope.msg = "";
	$scope.current_client = "";
	$scope.chat_sys = {};

    $scope.get_msgs = function(){
        $http.post("recive-admin-msgs",{client:$scope.current_client }).success(function(data){
            $scope.chat_sys.clients = data.clients;
            $scope.chat_sys.chat_client = data.client;
            $scope.chat_sys.chat = data.chat;
            // $scope.chat_sys.client_msgs = data.clients;
        });
        $timeout(function(){
            $scope.get_msgs();
        },2000);
    };
    $scope.get_msgs();

    $scope.set_current_client = function(client){
    	$scope.current_client = client;
    };

    $scope.send_msg = function(){
        if($scope.msg == '') return false;
        $http.post("admin-send-msg",{ msg:$scope.msg,client_email:$scope.current_client }).success(function(data){
           console.log(data);
        });
        $scope.msg = "";
    }

    $scope.define_class = function(n,client_email){
        if(n.sender_email != client_email) return "text-right";
        else return "bg-danger text-right";
    }
});