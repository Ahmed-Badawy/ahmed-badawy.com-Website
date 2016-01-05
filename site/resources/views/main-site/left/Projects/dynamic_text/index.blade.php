{!! get_angular("dynamic_text") !!}
@section('head_add')
	{!! get_it("plugins/sweetAlert/sweet-alert.min.css") !!}
	{!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}
@overwrite



<!-- Main -->
<div class="container" ng-app="myApp">
<div class="row">




	<div class="well" id="project_desc">
		<div>
			<img class="img-thumbnail img-responsive" src='{!! imgs_dir.$page_img !!}'>
		</div>
		<h3> {!!fa2($logo)!!} Dynamic Text !</h3>
		<div>
			<p>A New way to edit documents & pages instead of the normal Wysiwyg to edit content.</p>
			<p class='arabic' dir='rtl' >طريقة جديدة و مبتكرة لتعديل و إنشاء النصوص بدلا من إستخدام طريقة الـ Wysiwyg المعهودة . كل ما عليك فعله هو تحديد الجزء المراد تحديده من النص و بدء الكتابة.</p>

			<button class="btn btn-primary" data-toggle="modal" data-target="#short_info">
				{!! fa2('question-circle') !!} <b>What is This App ?</b>
			</button>

		</div>
		<div class="clearfix"></div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="short_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h3  class="modal-title" id="myModalLabel"> {!!fa2($logo)!!} &nbsp; Dynamic Text !</h3>
				</div>
				<div class="modal-body">
					<p>A New way to edit documents & pages instead of the normal Wysiwyg to edit content.</p>
					<hr>
					<p class='arabic' dir='rtl' >طريقة جديدة و مبتكرة لتعديل و إنشاء النصوص بدلا من إستخدام طريقة الـ Wysiwyg المعهودة . كل ما عليك فعله هو تحديد الجزء المراد تحديده من النص و بدء الكتابة.</p>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>





<ng-view></ng-view>


</div>
</div>
<!-- /Main -->


