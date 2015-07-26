
<div class="col-sm-9">
  <div class='col-sm-12'>
    <div class="panel panel-default">




  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>أتصل بنا</h2>
  </div>
  <div class="panel-body">




<div class="modal-body">


<form action='{{url("admin/update-contact")}}' method='post' enctype="multipart/form-data">

<div class="input-group widthfix" dir="rtl">
  

  <label>النص الأول</label>
  <textarea id="editor1" name="txt1" rows="8" class='widthfix form-control' placeholder='النص الأول'>
  		{{ $contact_txt_1 }}
  </textarea>
  
  <br>

  <label>النص الثانى</label>
  <textarea id="editor2" name="txt2" rows="8" class='widthfix form-control' placeholder='النص الثانى'>
  		{!! $contact_txt_2 !!}
  </textarea>

</div>

<br>

<button type='submit' class="btn btn-primary btn-md btn-block">{!! fa('save') !!} أحفظ النصوص الجديدة</button>
</form>


</div>



  </div>




    </div>
  </div>
</div>


