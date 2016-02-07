{!! get_angular("captcha-gene",'apis') !!}
@section("css_add")
	.elm{
		margin:5px;
		float:left;
    background-color:#ccc;
    border-radius:10px;
	}
	.elm image{
		clear:both;
	
	}
	.elm p{
		clear:both;
	}
@overwrite

<div class="container-fluid">
  <div class="col-sm-12">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Captcha Generator API</h2>
  </div>
  <div class="panel-body">
    <h5>

    <p class='arabic' dir='rtl'>
    كود متطور كتبته لتوليد كلمات الكابتشا للإستخدام فى مواقعى الخاصة بدلا من إستخدام (google captcha)
    <br>
    الميزة الرئيسية أنه يتمم كل شىء على السرفر دون أى إعتمادات من الخارج.
    <br>
    يمكنك إستخدام الكابتشا فى مواقعك الخاصة. هتلاقى اللينكات بالأسفل. 
    </p>
    <hr>

    <script type="text/javascript">
	    var base_url = '{{base_url}}';
      var all_fonts = {};
      all_fonts = '{!! json_encode($fonts) !!}';
    </script>


<div class="clearfix"></div>
{{br(1)}}

<div class="col-sm-6">    
	<label>Captcha Text</label>
  <input type="text" class="form-control widthfix" ng-model='text'>
</div>

<div class="col-sm-6">    
	<label>Choose a Font - إختر خط</label>
  <select class='form-control widthfix' ng-model='font'> 
	<option value='FONT_NAME' selected>FONT_NAME</option>
	@foreach($fonts as $font)
	<option value='{{$font}}'>{{$font}}</option>
	@endforeach
  </select>
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

    <b>Linking: </b>
    <div class='well well-sm'>
        {{base_url}}api/captcha-gene/@{{text}}?width=@{{width}}&height=@{{height}}&font=@{{font}}
    </div>

<button class='btn btn-primary btn-lg pull-right col-sm-6' ng-click='gene_click()'>Generate - ولد الأكواد</button>




<label>
<input type='radio' value='true' ng-model='font_name_view'> أظهر أسم الخط
</label>
 &nbsp;
<label>
<input type='radio' value='false' ng-model='font_name_view' ng-init='font_name_view="false"'> لا تظهر أسم الخط
</label>


<div class="clearfix"></div>
<hr>



<div class="clearfix"></div>

<div class='elm' ng-repeat='elm in showen_imgs'>
    <image class='img img-rounded' src='@{{elm}}'>
    <p ng-show='font_name_view=="true"'>@{{showen_fonts[$index]}}</p>
</div>

<div class="clearfix"></div>

<hr>

<br><br>
<a href="{{url('apis')}}" class='btn btn-danger btn-lg btn-block'>Back To APIs main Page</a>

    </h5>
  </div>


  </div>
</div>  

</div>

