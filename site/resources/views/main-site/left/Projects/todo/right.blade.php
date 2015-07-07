  


<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-primary" ng-click='newTask.isHidden=false;activeTask=false'><b>Add a New Task</b></button>
  </div>
</div>
<br>





<div class="panel panel-default" ng-hide='newTask.isHidden'>
  <div class="panel-heading"><h3>Add New Task</h3></div>
  <div class="panel-body">

<form ng-submit='addNew()'>
  <label for="">Add a New Task</label>
  <div class="input-group">    
    <span class="input-group-addon">{!! fa2('star') !!}</span>
    <input type="text" ng-model="newTask.title" placeholder="Task Title" class="form-control">
  </div>
    <br>

    <label for="desc">Task Description</label>
<div class="input-group">    
      <span class="input-group-addon">{!! fa2('edit') !!}</span>
      <textarea id="" ng-model='newTask.desc' class='form-control' style='width:100%' placeholder='Task Description'></textarea>
</div>

<div class="row" ng-show='newTask.add_list'>
<div class='input-group'>
      <label class='col-md-12' for="">Create New List</label><br>
      <div class='col-md-8'>
      <input type="text" ng-model='newTask.newList' class='form-control'>
      </div>
      <a class="btn btn-primary col-md-4" ng-click='create_list(newTask.newList)'>Create List</a>
  </div>
</div>

<label for="">Task List</label>
<select class='form-control widthfix' ng-model='newTask.list' ng-change='change_list(newTask.list)'>
  <option value='create_new_list'>Create New List</option>
  <option ng-repeat='list in data.real_lists' value='@{{list}}' >@{{list}}</option>
</select>



  <br> 
    <button type='submit' class='btn btn-primary'>Add New</button>
    <button type='reset' class='btn btn-danger'>Reset</button>
    <button class='btn btn-danger' ng-click='newTask=false;newList=false;activeTask=false'>Cancel</button>
</form>
  </div>
</div>





<div class="panel panel-default" ng-show='activeTask'>
  <div class="panel-heading text-center"><h3>Edit a Task</h3></div>
  <div class="panel-body">

<form ng-submit='Edit(activeTask)'>
  <label for="">Task Title</label>
  <div class="input-group">    
    <span class="input-group-addon">{!! fa2('edit') !!}</span>
    <input type="text" ng-model="activeTask.title" placeholder="Task Title" class="form-control">
  </div>
  <br>
    <label for="desc">Task Description</label>
<div class="input-group">    
      <span class="input-group-addon">{!! fa2('edit') !!}</span>
      <textarea name="desc" id="" ng-model='activeTask.desc' class='form-control' style='width:100%'></textarea>
</div>
<br>
<label for="">Task List</label>
<select class='form-control widthfix' ng-model='activeTask.list'>
  <option ng-repeat='list in data.real_lists'  value='@{{list}}' >@{{list}}</option>
</select>
<br>

<label for="">Sub Tasks:</label>
<table class='table table-bordered table-striped widthfix '>
<tr>
  <th>Sub Tasks</th>
  <th>Operations</th>
</tr>
<tr ng-repeat='sub in activeTask.subs'>
  <td>@{{sub.title}}</td>
  <td><a class='btn btn-xs btn-danger' ng-click='delete_task(sub)'>{!! fa2('trash') !!}</a></td>
</tr>
<tr>
  <td><input type="text" class='form-control widthfix' ng-model='activeTask.newSub'></td>
  <td><a class='btn btn-success btn-sm' ng-click='add_sub()'>Add Sub-Task</a></td>
</tr>
</table>

<br>
    <button type='submit' class='btn btn-success'>Save</button>
    <button type='reset' class='btn btn-danger'>Reset</button>
    <button class='btn btn-danger' ng-click='newTask=false;newList=false;activeTask=false'>Cancel</button>
</form>

</div>
</div>






</div> <!-- Close the Right Colomn -->