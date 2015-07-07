<?php 
    $page_desc = (isset($page_desc)) ?  $page_desc." ----- ".$page_title: " ---???--- ";
    $page_img = (isset($page_img)) ? $page_img : imgs_dir."site/logo.jpg";
    $ng_app = (isset($ng_app)) ? "ng-app='".$ng_app."'" : null;
    $ng_controller = (isset($ng_controller)) ? "ng-controller='".$ng_controller."'" : null;
?>

<!DOCTYPE html>
<html lang="ar" {!! $ng_app !!} > 
<head>
<title>{{$page_title}} | Ahmed-Badawy</title>


<!-- Google Search -->
    <meta name="google-site-verification" content="oxOvt2JiQVxY45ymi0jjNljLo6_AWvaW-BuUnP9vUPY" />
<!-- ********************************************************* -->
<!-- Google+ Section -->
    <meta itemscope itemtype="http://schema.org/Article" />
    <meta itemprop="headline" content="{{$page_title}}" />
    <meta itemprop="description" content="{{$page_desc}}" />
    <meta itemprop="image" content="{{$page_img}}" />
<!-- ********************************************************* -->
<!-- Facebook Section -->
    <meta property="og:url" content="{{URL::current()}}"/>    
    <meta property="og:title" content="{{$page_title}}"/>    
    <meta property="og:type" content="website"/>    
    <meta property="og:description" content="{{$page_desc}}"/>    
    <meta property="og:image" content="{!! imgs_dir.$page_img !!}"/>    
<!-- ********************************************************* -->
<!-- Noraml Meta Tags Section -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{$page_desc}}">
    <meta name="author" content="Ahemd Badawy">
    <meta name="keywords" content="{{implode(',',$keywords) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{imgs_dir.'special/logo.jpg'}}" />
<!-- ******************************************************************** -->

@section("css_section")
        {!! get_it("bootstrap-watch/css/$theme.min.css") !!}
        {!! get_it("font-awesome.css") !!}
        {!! get_it("spidro/css/custom.css") !!}
@show

<?php if(LOAD_FONTS){ ?>
@section('font_section')
@show
<?php } ?>


<style>
    @section('css_add')
    @show
</style>

@section("js_section")
    {!! get_it('jquery') !!}
    {!! get_it('bootstrap.js') !!}
    {!! get_it('spidro/js/custom.js') !!}
@show


    @section('js_add')
    @show

    @section('head_add')
    @show
    

</head>
<body {!! $ng_controller !!} >

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        