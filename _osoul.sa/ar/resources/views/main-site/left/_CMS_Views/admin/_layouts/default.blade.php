@include(get_location("_CMS_Views.admin._layouts.head"))

<div class="text-center">


@section("header_nav")
    <div class="btn-group" role="group">
        <a class="btn btn-default arabic" target="_blank" href='{{url("career")}}'>التوظيف</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("contact")}}'>أتصل بنا</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("structure")}}'>الهيكل الوظيفى</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("product")}}'>المنتجات</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("recipes")}}'>مطبخ أصول</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("contributor")}}'>المساهمون</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("about-us")}}'>من نحن</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("/")}}'>الرئيسية</a>
    </div>
  </div>

  <div class="clearfix"></div>
  <h1 class='arabic text-center bright bright-background col-sm-4 col-sm-offset-4'>لوحة التحكم</h1>
  <div class="clearfix"></div>
@show

<div class="row arabic" dir='rtl'>




<!-- ******************************************************************** -->
  {!! $content_layout !!}
<!-- ******************************************************************** -->


@section("admin_side_nav")
  <div class="col-sm-3">
      <h3 class='text-center well-sm box'>روابط لوحة التحكم</h3>
      <div class="btn-group-vertical widthfix col-sm-12">
        <a class='btn btn-default widthfix' href="{{url('admin/tutorial')}}">توضيح لوحة التحكم</a>
          <a class='btn btn-default widthfix' href="{{url('admin/contributors')}}">المساهمون</a>
          <a class='btn btn-default widthfix' href="{{url('admin/recipes')}}">مطبخ أصول</a>
          <a class='btn btn-default widthfix' href="{{url('admin/products')}}">المنتجات</a>
          <!-- <a class='btn btn-default widthfix' href="one">من نحن</a> -->
          <a class='btn btn-default widthfix' href="{{url('admin/structure')}}">الهيكل الوظيفى</a>
          <a class='btn btn-default widthfix' href="{{url('admin/contact')}}">اتصل بنا</a>
          <a class='btn btn-default widthfix' href="{{url('admin/career')}}">التوظيف</a>
          <a class='btn btn-default widthfix' href="{{url('admin/options')}}">إعدادات</a>
      </div>
  </div>
@show



</div>


@include(get_location("_CMS_Views.admin._layouts.foot"))
