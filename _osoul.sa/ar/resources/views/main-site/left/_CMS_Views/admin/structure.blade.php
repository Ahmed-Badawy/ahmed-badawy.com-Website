
@section('wysiwygJS')
@overwrite


<div class="col-sm-9">
    <div class='col-sm-12'>
        <div class="panel panel-default">




  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>الهيكل الوظيفى</h2>
  </div>
  <div class="panel-body text-center">


<form action='{{url("admin/update-structure-image")}}' method='post' enctype="multipart/form-data">

	    <img src="{{get_it("site-imgs/_CMS/structure/structure.jpg")}}"/>

    <br>

    <div class="well">
        <div class="fileUpload btn btn-primary">
            <span>تغيير الصورة</span>
            <input id="uploadBtn" type="file" class="upload" name="upload_img" required/>
        </div>
        <input id="uploadFile" placeholder="Choose File" disabled="disabled" />
        <button type='submit' class="btn btn-primary btn-md">{!! fa('save') !!} أحفظ التغيرات</button>
    </div>



</form>


  </div>



        </div>
    </div>
</div>



<script type="text/javascript">
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
</script>