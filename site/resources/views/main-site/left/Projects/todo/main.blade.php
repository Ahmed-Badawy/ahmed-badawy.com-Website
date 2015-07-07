    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>ToDo List</h2>
  </div>
  <div class="panel-body">
    <h5>



<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-primary" ng-click='newTask.isHidden=false;editTask=false'><b>Add a New Task</b></button>
  </div>
</div>
<br>


  <div class="input-group">    
    <span class="input-group-addon">Search: </span>
    <input type="search" ng-model='search' class='form-control'>
  </div>
<h3>List: @{{selected_list}} &nbsp;
  <small ng-if='remaining()'>Remaining (@{{remaining()}}) of (@{{data.tasks.length}}) Tasks</small>
</h3>


<div class="list-group">
  <a ng-repeat='task in data.tasks | filter:search' class="list-group-item @{{task.active_class}} @{{task.class}}" ng-dblclick='check(task)'>          
                    <!-- <input type="checkbox" ng-model='task.done' style='visibility:hidden;'> -->
                   <span class='pull-left'>
                       <span class='vote' ng-click='vote(task,"up")'>{!! fa2('toggle-up',['size'=>0]) !!}</span>
                       <span class='vote' ng-click='vote(task,"down")'>{!! fa2('toggle-down',['size'=>0]) !!}</span>
                   </span>
                    <span ng-click='active(task);'><b> &nbsp; @{{task.title}} </b></span>
                    <span class='label label-default pull-left'>@{{task.list}}</span>
                    <span class='btn btn-danger pull-right btn-xs' ng-click='delete_task(task)'>{!! fa2('trash',['size'=>0]) !!}</span>
                    <span class='btn btn-success pull-right btn-xs' ng-click='check(task)'>{!! fa2('check',['size'=>0]) !!}</span>
    </a>
</div>


<!-- <div class="list-group">
  <a ng-repeat='task in data.done_tasks | filter:search' class="list-group-item" ng-dblclick='check(task)' ng-mouseover=''>          
                    <input type="checkbox" ng-model='task.done'>
                    &nbsp; <s>@{{task.title}}</s>
                    <span class='btn btn-danger pull-right btn-xs' ng-click='active(task)'>delete</span> &nbsp;
    </a>
</div> -->





<br>
    </h5>
  </div>


  </div>
