  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>الهيكل الوظيفى</h2>
  </div>
  <div class="panel-body" ng-controller='bank'>



<form action='{{url("admin/add-structure")}}' method='post' enctype="multipart/form-data">

<div class="modal-body text-center">

	<img src="{{get_it("site-imgs/Asol/structure/haekl.jpg")}}" />

<hr>
<label>أختر الصورة الجيدة</label>
<div class="input-group">
      <span class="input-group-addon">{!! fa('image') !!}</span>
      <input class="form-control" placeholder="أختر صورة" required="required" autofocus="autofocus" name="upload_img" type="file"> 
</div>


</div>


<button type='submit' class="btn btn-primary btn-md btn-block">{!! fa('save') !!} أضف الصورة الجديدة</button>
</form>




  </div>



