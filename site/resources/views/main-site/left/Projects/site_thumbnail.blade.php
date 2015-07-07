{!! get_angular("site_imgs") !!}
@section('head_add')
	{!! get_it("plugins/sweetAlert/sweet-alert.min.css") !!}
	{!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}
@overwrite



<div class='container' ng-controller='site_imgs'>

<div class="row">

<div class="panel panel-default">
	<div class="panel-heading">
		<h1 dir='rtl'>{!!fa2('camera')!!} برنامج تصوير المواقع</h1>
	</div>
	<div class="panel-body">


<div class='col-sm-6'>
	<label>Site URL: </label>
	<input type='text' class='form-control widthfix' ng-model='link'>
</div>
<img ng-src="{{imgs_dir}}projects/site_thumbnail/@{{src_0}}.jpg">
<img ng-src="{{imgs_dir}}projects/site_thumbnail/@{{src_1}}.jpg">
<img ng-src="{{imgs_dir}}projects/site_thumbnail/@{{src_2}}.jpg">
<img ng-src="{{imgs_dir}}projects/site_thumbnail/@{{src_3}}.jpg">
<img ng-src="{{imgs_dir}}projects/site_thumbnail/@{{src_4}}.jpg">
<img ng-src="{{imgs_dir}}projects/site_thumbnail/@{{src_5}}.jpg">


	</div>
	<div class="panel-footer">
		<a ng-click="take_pics(link)" class="btn btn-primary" href="">Take Images</a>
		<a ng-click="undo()" class="btn btn-danger" href="">Undo Changes</a>
		<a ng-click="reset()" class="btn btn-success" href="">Reset To Normal</a>
	</div>
</div>

</div>

</div>


