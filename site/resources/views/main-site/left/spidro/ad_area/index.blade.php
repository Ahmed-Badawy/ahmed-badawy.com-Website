{!! get_angular() !!}
{!! get_it("angular/app/spidro/ask.js") !!}

@section('breadcrumbs')
@overwrite

@section('head_add')
	{!! get_it("plugins/sweetAlert/sweet-alert.min.css") !!}
	{!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}
@overwrite



<!-- Main -->
<div class="container-fluid" ng-app="myApp" dir='rtl'>
<div class="row">


      <ng-view></ng-view>


</div>
</div>
<!-- /Main -->

