@include(get_location("_CMS_Views.admin._layouts.head"))

<div class="text-center">


@section("header_nav")
    <div class="btn-group" role="group">
        <a class="btn btn-default arabic" target="_blank" href='{{url("contact")}}'>أتصل بنا</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("photo-gallary")}}'>معرض الصور</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("clients")}}'>عملائنا</a>
        <a class="btn btn-default arabic" target="_blank" href='{{url("projects")}}'>مشاريعنا</a>
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
        <a class='btn btn-default widthfix' href="{{url('admin/texts')}}">النصوص</a>
        <a class='btn btn-default widthfix' href="{{url('admin/projects')}}">المشاريع</a>
          <a class='btn btn-default widthfix' href="{{url('admin/clients')}}">العملاء</a>
          <a class='btn btn-default widthfix' href="{{url('admin/photo-gallary')}}">معرض الصور</a>
          <a class='btn btn-default widthfix' href="{{url('admin/slider')}}">صور الـ Slider</a>
          <a class='btn btn-default widthfix' href="{{url('admin/options')}}">إعدادات</a>
      </div>
  </div>
@show



</div>


@include(get_location("_CMS_Views.admin._layouts.foot"))
