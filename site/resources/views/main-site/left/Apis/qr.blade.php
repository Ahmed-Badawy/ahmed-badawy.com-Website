{!! get_angular("qr",'apis') !!}


<div class="container">
  <div class="col-sm-8 col-sm-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>QR Generator API</h2>
  </div>
  <div class="panel-body">
    <h5>

    <p class='arabic' dir='rtl'>كل ما عليك هو كتابة الكلمة المراد تحويلها إلى كود QR.</p>
    <hr>

    <script type="text/javascript">
	    var base_url = '{{base_url}}';
    </script>

    <image class='img img-rounded' ng-src='@{{img}}' style='border:2px dashed #333'>
<div class="clearfix"></div>
{{br(1)}}

    <div class='well well-sm'>

    <b>Image Tag: </b><br>
    {{htmlentities('<image src=\'')}}@{{link}}'>
    <br><b>Linking: </b><br>
    @{{link}}

    </div>


<div class="clearfix"></div>
{{br(1)}}

<div class="col-sm-8">    
	<label>(Word/Link/Code) to Convert - الكلمة المراد تحويلها</label>
  <input type="text" autofocus="autofocus" class="form-control widthfix" ng-model='text'>
</div>

<div class="clearfix"></div>
{{br(1)}}

<div class="col-sm-6">    
	<label>Size of Image - حجم الصورة</label>
  <input type="number" class="form-control widthfix" ng-model='size'>
</div>
<div class="col-sm-6">    
	<label>Image Padding - الفراغ المحيط بالصورة</label>
  <input type="number" class="form-control widthfix" ng-model='padding'>
</div>

<div class="clearfix"></div>

<br><br>
<a href="{{url('apis')}}" class='btn btn-danger btn-lg btn-block'>Back To APIs main Page</a>

    </h5>
  </div>


  </div>
</div>  

</div>

