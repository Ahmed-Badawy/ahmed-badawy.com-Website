  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>المساهمين</h2>
  </div>
  <div class="panel-body" ng-controller='bank'>


@foreach($contributors as $con)
	<div class="contr">
		<img src="{{get_it("site-imgs/asol/contributors/".$con->img)}}" width="100" height="100" />
		<b class='text-center'>{{$con->name}}</b>
		--------
		<p style='display:inline'>{{$con->desc}}</p>
		<span><a href="{{url('admin/delete-contributer/'.$con->id)}}" class='btn btn-xs btn-danger'>{!! fa2('remove',0) !!} أحذف</a></span>
	</div>
	<div class="clearfix"></div>
	<br>
@endforeach


<hr>

@include(get_location('Asol.admin.contributer_modal'))


  </div>