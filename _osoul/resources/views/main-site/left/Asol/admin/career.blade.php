  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>الوظائف</h2>
  </div>
  <div class="panel-body" ng-controller='bank'>




<div class="modal-body">


<form action='{{url("admin/add-career")}}' method='post' enctype="multipart/form-data">

<div class="input-group"> 
  
  <textarea id="editor1" name="txt1" rows="8" class='widthfix form-control' placeholder='نص التوظيف'>
  		{!! $career_txt !!}
  </textarea>
  
  <br>


</div>

<br>

<button type='submit' class="btn btn-primary btn-md btn-block">{!! fa('save') !!} أحفظ النص</button>
</form>


</div>



  </div>



