{!! get_angular("dynamic_text") !!}
@section('head_add')
	{!! get_it("plugins/sweetAlert/sweet-alert.min.css") !!}
	{!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}
@overwrite



<!-- Main -->
<div class="container" ng-app="myApp">
<div class="row">


<ng-view></ng-view>


</div>
</div>
<!-- /Main -->


