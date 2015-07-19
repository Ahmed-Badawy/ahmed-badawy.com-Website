  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>المساهمين</h2>
  </div>
  <div class="panel-body" ng-controller='bank'>


@foreach($contributors as $con)
	<div class="contr">

		<div class="col-sm-10">
			<form method='post' action="{{url('admin/modify-id/contributer/'.$con->id)}}">
				<input type='text' class='form-control widthfix' name="item_name" value="{{$con->name}}">
				<textarea class='form-control widthfix' name='item_desc'>{{$con->desc}}</textarea>
				<button type='submit' class='btn btn-sm btn-primary'>{!! fa2('save') !!} عدل البيانات</button>
				<a href="{{url('admin/delete-id/contributer/'.$con->id)}}" class='btn btn-sm btn-danger'>{!! fa2('remove') !!} أحذف</a>
			</form>
		</div>
		<img src="{{get_it("site-imgs/asol/contributors/".$con->img)}}" class='col-sm-2' />

	</div>
	<div class="clearfix"></div>
	<br>
@endforeach


<hr>

@include(get_location('Asol.admin.contributer_modal'))


  </div>