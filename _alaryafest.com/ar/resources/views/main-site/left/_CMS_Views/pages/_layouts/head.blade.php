<?php 
    $page_desc = (isset($page_desc)) ?  $page_desc." ----- ".$page_title: " ---???--- ";
    $page_img = (isset($page_img)) ? $page_img : imgs_dir."site/logo.jpg";
    $ng_app = (isset($ng_app)) ? "ng-app='".$ng_app."'" : null;
    $ng_controller = (isset($ng_controller)) ? "ng-controller='".$ng_controller."'" : null;
?>

<!DOCTYPE html>
<html lang="en" {!! $ng_app !!} > 
<head>
<title>{{$page_title}} | الأرياف</title>


<!-- Google Search -->
    <meta name="google-site-verification" content="oxOvt2JiQVxY45ymi0jjNljLo6_AWvaW-BuUnP9vUPY" />
<!-- ********************************************************* -->
<!-- Google+ Section -->
    <meta itemscope itemtype="http://schema.org/Article" />
    <meta itemprop="headline" content="{{$page_title}}" />
    <meta itemprop="description" content="{{$page_desc}}" />
    <meta itemprop="image" content="{!! th($page_img,140,140) !!}" />
<!-- ********************************************************* -->
<!-- Facebook Section -->
    <meta property="og:url" content="{{URL::current()}}"/>    
    <meta property="og:title" content="{{$page_title}}"/>    
    <meta property="og:type" content="website"/>    
    <meta property="og:description" content="{{$page_desc}}"/>
    <meta property="og:image" content="{!! th($page_img,600,315) !!}"/>
<!-- ********************************************************* -->
<!-- Noraml Meta Tags Section -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{$page_desc}}">
    <meta name="author" content="Ahemd Badawy">
    <meta name="keywords" content="{{implode(',',$keywords) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-ico" href="{{imgs_dir.'site/favicon.ico'}}" />
    <link rel="shortcut icon" type="image/x-ico" href="{{imgs_dir.'site/favicon.ico'}}" />
    <!-- ******************************************************************** -->





    {!! get_it('_CMS/css/bootstrap.css') !!}
    {!! get_it('_CMS/css/bootstrap-theme.css') !!}
    {!! get_it('_CMS/css/style.css') !!}
    {!! get_it('_CMS/fonts/font.css') !!}
    {!! get_it('_CMS/css/diapo.css') !!}
    {!! get_it('_CMS/css/css-hover.css') !!}
    {!! get_it('_CMS/css/style-ticker.css') !!}
    {!! get_it('_CMS/css/lightview.css') !!}


    {!! get_it('_CMS/js/jquery.min.js') !!}
    {!! get_it('_CMS/js/bootstrap.min.js') !!}



    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    {!! get_it('_CMS/js/jquery.slider.home.js') !!}
    {!! get_it('_CMS/js/jquery.easing.1.3.js') !!}
    {!! get_it('_CMS/js/jquery.hoverIntent.minified.js') !!}
    {!! get_it('_CMS/js/diapo.js') !!}

    <script>
        $(function(){
            $('.pix_diapo').diapo();
        });

    </script>


    {!! get_it('_CMS/js/jcarousellite_1.0.1c4.js') !!}

    <script type="text/javascript">
        $(function() {
            $(".newsticker-jcarousellite").jCarouselLite({
                vertical: false,
                hoverPause:true,
                visible: 3,
                auto:1000,
                speed:1000
            });
        });
    </script>


    {!! get_it('_CMS/js/lightview.js') !!}












<style>
    @section('css_add')
    @show
</style>

@section("js_section")

@show


    @section('js_add')
    @show

    @section('head_add')
    @show
    

</head>