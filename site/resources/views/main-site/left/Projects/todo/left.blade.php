    <div class="panel panel-default" style='position:fixed;float:left;padding:2px;width:23%'>
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Lists</h2>
  </div>

<div class="btn-group-vertical col-md-12" >
    <input type="button" ng-repeat='list_item in data.lists' ng-click="change_selected_list(list_item)" class='@{{list_item.left_tab_active_class}}' value='@{{list_item.list_name | uppercase}}'/>

</div>


  </div>
