{!! get_angular("thumb",'apis') !!}


<div class="container">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Image Thumb Generator API</h2>
  </div>
  <div class="panel-body">
    <h5>

    <p class='arabic' dir='rtl'>
    هذا الكود هو API كتبته لإعادة تحجيم الصور على أى موقع أعمل عليه لأى حجم أريده تبعا لرابط الصورة.
    <br>
    مصمم خصيصا ليعمل كـ Live Thumb Generator لتصغير الصور فور طلبها. مع القدرة على حفظها على السرفر للإستخدام فيما بعد.
    </p>
    <hr>

    <script type="text/javascript">
	    var base_url = '{{base_url}}';
    </script>

    <image class='img img-rounded' ng-src='@{{link}}'>
    <image class='img img-circle deny' ng-src='@{{link}}'>
<div class="clearfix"></div>
{{br(1)}}

    <div class='well well-sm'>
    <b>Linking: </b><br>
    @{{link}}

    </div>


<div class="clearfix"></div>
{{br(1)}}

<div class="col-sm-6">    
	<label>Width of Image - عرض الصورة</label>
  <input type="number" class="form-control widthfix" ng-model='width'>
</div>
<div class="col-sm-6">    
	<label>Height of Image - طول الصورة</label>
  <input type="number" class="form-control widthfix" ng-model='height'>
</div>

<div class="clearfix"></div>
{{br(1)}}


<div class="col-sm-8">    
	<label>Image To Resize - الصورة المراد تحجيمها</label>
  <select ng-model='img' class='form-control widthfix'> 
  	<option value='projects/actors.jpg'>projects/actors.jpg</option>
  	<option value='projects/movies.jpg'>projects/movies.jpg</option>
  	<option value='api/apis.jpg'>api/apis.jpg</option>
  	<option value='projects/actorsrate.jpg'>projects/actorsrate.jpg</option>
  	<option value='projects/countdown.png'>projects/countdown.png</option>
  </select>
</div>

<div class="clearfix"></div>


<br><br>
<a href="{{url('apis')}}" class='btn btn-danger btn-lg btn-block'>Back To APIs main Page</a>

    </h5>
  </div>


  </div>

</div>

