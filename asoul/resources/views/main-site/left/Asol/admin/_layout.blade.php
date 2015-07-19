@include(get_location("Asol.admin.-ext.header_area"))

<div class="text-center">
<div class="btn-group" role="group">
  <a class="btn btn-default arabic" target="_blank" href='{{url("career")}}'>التوظيف</a>
  <a class="btn btn-default arabic" target="_blank" href='{{url("contact")}}'>أتصل بنا</a>
  <a class="btn btn-default arabic" target="_blank" href='{{url("structure")}}'>الهيكل الوظيفى</a>
  <a class="btn btn-default arabic" target="_blank" href='{{url("product")}}'>المنتجات</a>
  <a class="btn btn-default arabic" target="_blank" href='{{url("contributor")}}'>المساهمون</a>
  <a class="btn btn-default arabic" target="_blank" href='{{url("about-us")}}'>من نحن</a>
  <a class="btn btn-default arabic" target="_blank" href='{{url("/")}}'>الرئيسية</a>
</div>
</div>


<div class="clearfix"></div>




<h1 class='arabic text-center bright bright-background col-sm-4 col-sm-offset-4'>لوحة التحكم</h1>

<div class="clearfix"></div>

<div class="row arabic" dir='rtl'>



<div class="col-sm-9">
<div class='col-sm-12'>
    <div class="panel panel-default">
    		@include(get_location("Asol.admin.".$page))
  </div>
  </div>
</div>




<div class="col-sm-3">
	<h3 class='text-center well-sm box'>روابط لوحة التحكم</h3>
	<div class="btn-group-vertical widthfix col-sm-12">
	    <a class='btn btn-default widthfix' href="{{url('admin/contributors')}}">المساهمون</a>
	    <a class='btn btn-default widthfix' href="{{url('admin/products')}}">المنتجات</a>
	    <!-- <a class='btn btn-default widthfix' href="one">من نحن</a> -->
	    <a class='btn btn-default widthfix' href="{{url('admin/structure')}}">الهيكل الوظيفى</a>
	    <a class='btn btn-default widthfix' href="{{url('admin/contact')}}">اتصل بنا</a>
	    <a class='btn btn-default widthfix' href="{{url('admin/career')}}">التوظيف</a>
	</div>
</div>




</div>