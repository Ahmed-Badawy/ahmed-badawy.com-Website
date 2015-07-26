


<div class="col-sm-9">
	<div class='col-sm-12'>
		<div class="panel panel-default">



			<div class="panel-heading">
				<h1 class="panel-title"></h1><h2 class='text-center'>المنتجات</h2>
			</div>



			<div class="panel-body">

				<h4 class="text-center">لا تنسى الضغط على زر حفظ التغيرات على كل عنصر يتم تغيره</h4>


				@foreach($products as $con)
					<hr>

					<div class="col-sm-10">
						<form method='post' action="{{url('admin/modify-id/product/'.$con->id)}}" enctype="multipart/form-data">
							<input type='text' class='form-control widthfix' name="item_name" value="{{$con->name}}">
							<textarea rows='4' class='form-control widthfix hidden' name='item_desc'>{{$con->desc}}</textarea>



							<a id='products_createModalButton' class='btn btn-default' href="#products_create" data-toggle='modal' role='button'>{!! fa2('plus-square') !!}</a>

							<div class="fileUpload btn btn-primary btn-sm">
								<span>تغيير الصورة</span>
								<input id="uploadBtn" type="file" class="upload" name="upload_img"/>
								<input id="uploadFile" placeholder="أختر صورة جديدة" disabled="disabled" style="color:black"/>
							</div>

							<div class="btn btn-primary btn-sm">
								<span>أختر أولوية العرض</span>
								<input type="number" style="color:black" placeholder="حدد أولوية العرض" value="{{$con->priority}}" name="item_priority">
							</div>


							<button type='submit' class='btn btn-sm btn-primary'>{!! fa2('save') !!} أحفظ التغيرات</button>


							<a myhref="{{url('admin/delete-id/product/'.$con->id)}}" class='btn btn-sm btn-danger delete_button'>{!! fa2('remove') !!} أحذف</a>


						</form>
					</div>
					<img src="{{get_it("site-imgs/_CMS/products/".$con->img)}}" class='col-sm-2' />

					<div class="clearfix"></div>

				@endforeach

				<div class="clearfix"></div>


				<hr>

				@include(get_location('_CMS_Views.admin.modals.products_create_modal'))


			</div>

		</div>
	</div>
</div>



<script type="text/javascript">
	$(".delete_button").on('click',function(e){
		var href = this.getAttribute("myhref");
		swal({
					title: "هل تريد حذف هذا العنصر ؟",
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

<script type="text/javascript">
	document.getElementById("uploadBtn").onchange = function () {
		document.getElementById("uploadFile").value = this.value;
	};
</script>
