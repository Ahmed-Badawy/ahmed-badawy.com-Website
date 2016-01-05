

    @section('font_section')
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/earlyaccess/notokufiarabic.css' rel='stylesheet' type='text/css'>
    @overwrite
    @section("css_add")
        body{

            font-family: 'Open Sans','Lato', Helvetica, sans-serif;
            color:#222;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;

            background: url('{{imgs_dir."site/covers/img1.jpg"}}') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

            background-size: 100% 100%;*/
        }
        .pointer_row:hover{
            cursor: pointer;
            color:red;
            font-weight:bolder;
            background-color:#eee;
        }
        .arabic{
            font-family: 'Noto Kufi Arabic', serif;
            line-height: 1.5em;
        }
        .widthfix{
            width:100%;
        }
    @overwrite

    @section("css_section")
            {!! get_it("bootstrap-watch/css/$theme.min.css") !!}
            {!! get_it("font-awesome.css") !!}
    @overwrite

    @section('head_add')
        {!! get_it("plugins/sweetAlert/sweet-alert-arabic.min.css") !!}
        {!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}
    @overwrite
    @section('breadcrumbs')
    @overwrite
    @section('header')
    @overwrite    
    @section('footer')
    @overwrite    


    {!! get_angular("main","selling-manager") !!}



<div class="col-sm-12" dir='rtl'>

<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a class='arabic' style="color:black;font-size:120%">سبدرو للأنظمة الإدارية</a></li>
      </ul>


      <ul class="nav navbar-nav navbar-right">


        <li class="dropdown">
          <a href="#" class="dropdown-toggle arabic" data-toggle="dropdown" role="button" aria-expanded="false">فواتير <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" dir='rtl'>
   <li><a class='arabic text-right' href="{{url('selling-manager/new-invoice')}}">{!!fa2('folder-open-o')!!} فتح فاتورة جديدة</a></li>
              <li><a class='arabic text-right' href="{{url('selling-manager/invoice-view')}}">{!!fa2('pagelines')!!} عرض فاتورة</a></li>
              <li><a class='arabic text-right' href="{{url('selling-manager/invoice-view')}}">{!!fa2('edit')!!} تعديل فاتورة</a></li>
            <li><a class='arabic text-right' href="{{url('selling-manager/invoice-view')}}">{!!fa2('trash')!!} حذف فاتورة</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle arabic" data-toggle="dropdown" role="button" aria-expanded="false">منتجات <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a class='arabic text-right' href="{{url('selling-manager/new-product')}}">{!!fa2('star')!!} إضافة منتج جديد</a></li>
            <li><a class='arabic text-right' href="{{url('selling-manager/update-product')}}">{!!fa2('edit')!!} تعديل منتج</a></li>
            <li><a class='arabic text-right' href="{{url('selling-manager/update-product')}}">{!!fa2('trash')!!} حذف منتج</a></li>
          </ul>
        </li>
        
        <li><a href="{{url('selling-manager/new-invoice')}}" class='arabic'>{!!fa2('home')!!} لوحة الفواتير</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class='clearfix'></div>
<br class='clearfix'>



<div class='row'>
    <div class="container-fluid" ng-app="myApp">



@include( get_location("Selling-Manager.".$inner_layout) )


    </div>
</div>

</div>
