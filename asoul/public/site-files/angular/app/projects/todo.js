var myapp=angular.module('myApp',[]);


myapp.controller('todo_controller',function($scope , $http , $timeout){

	$scope.data = { };
	var activeTask = false;
	$scope.selected_list = "all";
	$scope.newTask = {};
	$scope.newTask.isHidden = true;

	$scope.change_selected_list = function(list_item){
		$scope.selected_list = list_item.list_name;
		$scope.newTask.list = list_item.list_name;
		$scope.Load_server_data();	
	}
	$scope.Load_server_data = function(){
		$http.get('get-todos/'+$scope.selected_list).success(function(answer){ 
			// console.log(answer);
			lists = [ ];
			angular.forEach(answer.lists, function(list){
				list_obj = { list_name : list, left_tab_active_class: " btn btn-default " }
				if($scope.selected_list == list) list_obj.left_tab_active_class = "btn btn-primary";
				lists.push(list_obj);
			})
			$scope.data.lists = lists; 
			$scope.data.real_lists = answer.real_lists;
			angular.forEach(answer.tasks, function(task){
				// if(task.subs) console.log(task.subs);
				task.done = (task.done == 1) ? true : false ;
				if(task.done == true) task.class = ' done';
				if(activeTask && task.id == activeTask.id && task.done==false){
					task.active_class=' active';
					$scope.activeTask = task;
				}
			});				
			$scope.data.tasks = answer.tasks;
		});
		if(typeof timeout_promise != 'undefined') $timeout.cancel(timeout_promise);				
		timeout_promise = $timeout($scope.Load_server_data , 180000);		
	};
	$scope.Load_server_data();


	$scope.remaining = function(){
		var count = 0;
		angular.forEach($scope.data.tasks, function(task){
			count += (task.done) ? 0 : 1;
		});
		return count;
	}
	$scope.addNew = function(){
		var task = {
			title: $scope.newTask.title,
			desc: $scope.newTask.desc,
			list : $scope.newTask.list,
			done: false,
		}
		$http.post("new-task",task).success(function(){
			$scope.Load_server_data();
			$scope.newTask.title = null;
			$scope.newTask.desc = null;			
			$scope.newTask.isHidden = true;
		});
	}
	$scope.active = function(task){
		if(task.done == false){
			if(activeTask && activeTask.id == task.id){
				activeTask = false;
				task.active_class = '';
			}else{
				angular.forEach($scope.data.tasks , function(task_item){
					task_item.active_class = '';
				})
				activeTask = task;
				task.active_class = ' active';
			}
			$scope.activeTask = activeTask;
			$scope.newTask.isHidden = true;
		}
	}
	$scope.Edit = function(task){
		if(task.done != true) $http.post("edit-task",task).success(function(){
			$scope.Load_server_data();
			$scope.activeTask = false;
		});
	}
	$scope.check = function(task){
		task.done = !task.done;
		if(task.done == false) task.class = '';
		if(task.done == true) task.class = ' done';
		if($scope.activeTask) $scope.activeTask = false;
		$http.post("check-task",task).success(function(){
			$scope.Load_server_data();
		});
	}
	$scope.delete_task = function(task){
		$http.post('delete-task',task).success(function(){
			$scope.Load_server_data();
		})
	}
	$scope.add_sub = function(){
		$http.post('add-sub',$scope.activeTask).success(function(){
			$scope.Load_server_data();
		})
	}

	$scope.change_list = function(value){
		$scope.newTask.add_list = (value == 'create_new_list')?  true : false;
	}
	$scope.create_list = function(name){
		$http.post('create-list',{ list: name } ).success(function(){
			$scope.Load_server_data();
			$scope.newTask.list = name;	
			$scope.newTask.add_list = false;	
		});
	}	
	$scope.vote = function(task,up_down){
		$http.post('vote/'+up_down,task).success(function(){
			$scope.Load_server_data();
		})
	}



});




