  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>المساهمين</h2>
  </div>
  <div class="panel-body" ng-controller='bank'>



@foreach($contributors as $con)
	<div class="contr">

		<div class="col-sm-10">
			<form method='post' action="{{url('admin/modify-id/contributer/'.$con->id)}}">
				<input type='text' class='form-control widthfix' name="item_name" value="{{$con->name}}">
				<textarea rows='4' class='form-control widthfix' name='item_desc'>{{$con->desc}}</textarea>

<div class="fileUpload btn btn-primary btn-sm">
    <span>{!! fa2('image') !!} تعديل الصورة</span>
    <input type="file" class="upload" />
</div>

<button type='submit' class='btn btn-sm btn-primary'>{!! fa2('save') !!} تعديل البيانات</button>
<a id='contributers_createModalButton' class='btn btn-default btn-sm' href="#contributers_create" data-toggle='modal' role='button'>{!! fa2('plus-square',['size'=>0]) !!} أضف مساهم جديد</a>
<a id='contributers_priorityModalButton' class='btn btn-default btn-sm' href="#contributers_priority" data-toggle='modal' role='button'>{!! fa2('arrow-up',['size'=>0]) !!} تعديل ترتيب العرض</a>

<a myhref="{{url('admin/delete-id/contributer/'.$con->id)}}" class='btn btn-sm btn-danger delete_button'>{!! fa2('remove') !!} أحذف</a>


			</form>
		</div>
		<img src="{{get_it("site-imgs/asol/contributors/".$con->img)}}" class='col-sm-2' />

	</div>
	<div class="clearfix"></div>
	<br>
@endforeach



<hr>

@include(get_location('Asol.admin.modals.contributer_priority_modal'))
@include(get_location('Asol.admin.modals.contributer_create_modal'))


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


