@include(get_location('_CMS_Views.pages._layouts.head'))



@section('body')
  <body>
@show

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


@section('menu')
    <div id="navbar" class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{url('/')}}" class="external brand text"> الرئيسية</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
                      <li class="">
                <a href="#">English</a>
              </li>
                      
              <li class="">
                <a href="{{url('about-us')}}" class="">من نحن </a>
              </li>       
                      <li class="">
                <a href="{{url('contributor')}}" class="">المساهمون </a>
              </li>
                <li class="">
                <a href="{{url('product')}}" class="">منتجاتنا</a>
              </li>
                      <li class="">
                <a href="{{url('structure')}}" class="">الهيكل الوظيفي</a>
              </li>
                      <li class="">
                <a href="{{url('contact')}}" class=""></i>اتصل بنا</a>
              </li>
                      <li class="">
                <a href="{{url('career')}}" class="">التوظيف</a>
              </li>
                 </ul>
      </div>
    </div>
  </div>
</div> <!-- end navbar -->
@show



<!-- ******************************************************************** -->
    {!! $content_layout !!}
<!-- ******************************************************************** -->





<footer id="footer">
    <div class="container">
        <a href="http://erest.sa/" target="blank">تصميم وتطوير شركة إنجاز لتقنية المعلومات</a>
        -
        <a href="{{url('admin/login')}}">لوحة التحكم</a>
    </div>
    <a href="#" id="btn_up">top</a>
</footer>



</body>


</html>



