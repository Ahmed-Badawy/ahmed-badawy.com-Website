  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>المنتجات</h2>
  </div>
  <div class="panel-body" ng-controller='bank'>


@foreach($products as $con)
	<div class="contr">

		<div class="col-sm-10">
			<form method='post' action="{{url('admin/modify-id/product/'.$con->id)}}">
				<input type='text' class='form-control widthfix' name="item_name" value="{{$con->name}}">
				<textarea rows='4' class='form-control widthfix hidden' name='item_desc'>{{$con->desc}}</textarea>
				<button type='submit' class='btn btn-sm btn-primary'>{!! fa2('save') !!} عدل البيانات</button>
				<a myhref="{{url('admin/delete-id/product/'.$con->id)}}" class='btn btn-sm btn-danger delete_button'>{!! fa2('remove') !!} أحذف</a>
			</form>
		</div>
		<img src="{{get_it("site-imgs/asol/products/".$con->img)}}" class='col-sm-2' />

	</div>
	<div class="clearfix"></div>
	<br>
@endforeach

<hr>

@include(get_location('Asol.admin.products_modal'))


  </div>


  <script type="text/javascript">
  		$(".delete_button").on('click',function(e){
  			var href = this.getAttribute("myhref");
			swal({
				title: "هل أنت متأكد من الإلغاء ؟",
				text: "هل توكد عملية الإلغاء!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "نعم أحذفها!",
				cancelButtonText: "لا تحذف شىء",
				closeOnConfirm: false
			},
			function(){
				swal("تم الحذف!", "تم الإنتاء من حذف المنتج بقاعدة البيانات.", "success");
				setTimeout(function(){
					window.location.assign(href)
				}, 1000);
			});
  			return false;
  		});
  </script>