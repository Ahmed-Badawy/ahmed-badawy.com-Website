
<div class="panel panel-default">
	<div class="panel-heading"><h3 class='text-center'>Categories</h3></div>
		

	<div class="btn-group-vertical col-md-12">
		<a ng-repeat='cate in data.cates' class='@{{cate.left_tab_active_class}}' ng-click='change_cate(cate)'>@{{cate.name | uppercase}}</a>
	</div>

</div>

<div class="clearfix"></div>
<br><br>



<div class="btn-group-vertical col-md-12">
  <div class="btn-group">
    <button type="button" class="btn btn-success" ng-click='newSite={}; selected_site=false'><b>Add a New Site</b></button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-danger" ng-click='delete_site(selected_site);selected_site=false'><b>Delete Selected Site</b></button>
  </div>  
</div>

