<div class="panel panel-default" ng-show='selected_site'>
	<div class="panel-heading"><h3 class='text-center'>Edit Site</h3></div>
	<div class="panel-body">

	<p>Thmbnail</p>
	<a href='{{imgs_dir."projects/favorite_sites_imgs/"}}@{{selected_site.img}}' target='_blank'><img class='img img-rounded' src='{{imgs_dir."projects/favorite_sites_imgs/"}}@{{selected_site.img}}' height="100px"></a>
		
		<form ng-submit='edit_site()'>
			<label for="title">Title</label>
			<input type="text" required class='form-control widthfix'  ng-model='selected_site.title'>
			<label for="url">URL</label>
			<input type="text" required class='form-control widthfix'  ng-model='selected_site.url'>
			<label for="desc">Description</label>
			<textarea class='form-control widthfix' ng-model='selected_site.desc'></textarea>
			<label for="cate">Select a Category</label>
			<select required class='form-control widthfix' ng-model='selected_site.list'>
				<option ng-repeat='cate in data.real_cates' value="@{{cate}}">@{{cate}}</option>
			</select>	
		<br>

<label for="">Sub Sites:</label>
<table class='table table-bordered table-striped table-condensed widthfix '>
<tr>
	<th>Title</th>
	<th>Options</th>
</tr>
<tr ng-repeat='sub_site in selected_site.subs'>
  <td><a ng-click="gotourl(sub_site)" target='_blank'>@{{sub_site.title}}</a> <span class='label label-default pull-right'>Visits: @{{sub_site.visits}}</span></td>
  <td><a class='btn btn-xs btn-danger' ng-click='delete_site(sub_site)'>delete</a></td>
</tr>
<tr>
  <td> 
	<div class="col-md-6"><input type="text" class='form-control widthfix input-sm' ng-model='selected_site.newSub.Title' placeholder='Title'> </div>
	<div class="col-md-6"><input type="text" class='form-control widthfix input-sm' ng-model='selected_site.newSub.Url' placeholder='URL'> </div>
</td>
  <td><a class='btn btn-success btn-sm' ng-click='add_sub()'>Add Sub-Site</a></td>
</tr>
</table>
	<hr>
		<input type='submit' class="btn btn-primary" value='Update Site'>
		<input type='reset' class="btn btn-danger" value='Reset'>
		<a class="btn btn-danger" ng-click='selected_site=false'>Cancel</a>
		<a class="btn btn-danger" ng-click='delete_site(selected_site);selected_site=false;'><b>Delete This Site</b></a>

		</form>	
	</div>	
</div>






<div class="panel panel-default" ng-show='newSite'>
	<div class="panel-heading"><h2 class='text-center'>Add New Site</h2></div>
	<div class="panel-body">
		<form ng-submit='add_site()'>
			<label for="title">Title</label>
			<input type="text" required class='form-control widthfix'  ng-model='newSite.title'>
			<label for="url">URL</label>
			<input type="text" required class='form-control widthfix'  ng-model='newSite.url'>
			<label for="desc">Description</label>
			<textarea class='form-control widthfix' ng-model='newSite.desc'></textarea>

			<div class="row">
			<div class="col-md-6">
		<label for="cate">Select a Category</label>
		<select required class='form-control widthfix' ng-model='newSite.cate'>
			<option ng-repeat='cate in data.real_cates' value="@{{cate}}">@{{cate}}</option>
		</select>
			</div>
			<div class="col-md-6">			
		<label for="">Create New Category</label><br>
		<input type="text" ng-model='newSite.newCate' class='form-control col-md-8'>
		<a class="btn btn-primary col-md-4" ng-click='add_cate(newSite.newCate)'>Create Cate</a>
  			</div>
			</div>

<br>

		<input type='submit' class="btn btn-primary" value='Add Site'>
		<input type='reset' class="btn btn-danger" value='Reset'>
		<a class="btn btn-danger" ng-click='newSite=false'>Cancel</a>
		</form>
	</div>	
</div>


