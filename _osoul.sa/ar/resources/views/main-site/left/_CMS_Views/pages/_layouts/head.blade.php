<?php 
    $page_desc = (isset($page_desc)) ?  $page_desc." ----- ".$page_title: " ---???--- ";
    $page_img = (isset($page_img)) ? $page_img : imgs_dir."site/logo.jpg";
    $ng_app = (isset($ng_app)) ? "ng-app='".$ng_app."'" : null;
    $ng_controller = (isset($ng_controller)) ? "ng-controller='".$ng_controller."'" : null;
?>

<!DOCTYPE html>
<html lang="en" {!! $ng_app !!} > 
<head>
<title>{{$page_title}} | أصول</title>


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
    <link rel="icon" type="image/ico" href="{{imgs_dir.'site/image-circle.png'}}" />
<!-- ******************************************************************** -->

<?php /*
<link rel='stylesheet' id='argo-main-style-css'  href='Osoul/css/style.css?ver=3.9' type='text/css' media='all' />
<link rel='stylesheet' id='argo-main-style-css'  href='Osoul/css/style-tow.css' type='text/css' media='all' />
<link rel='stylesheet' id='argo-responsive-css'  href='Osoul/css/responsive.css?ver=3.9' type='text/css' media='all' />
<link rel='stylesheet' href='Osoul/css/fonts-web/font.css' type='text/css' media='all' /> -->

<script type='text/javascript' src='http://abcli.edu.sa/wp-includes/js/jquery/jquery.js?ver=1.11.0'></script>
<script type='text/javascript' src='http://abcli.edu.sa/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script> 

<script type='text/javascript' src='js/bootstrap.min840f.js'></script>
<script type='text/javascript' src='js/jquery.mCustomScrollbar.concat.min840f.js'></script>
<script type='text/javascript' src='js/jquery.hoverdir840f.js'></script>
<script type='text/javascript' src='js/jquery.isotope.min840f.js'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
<script type='text/javascript' src='js/gmap-min840f.js'></script>
<script type='text/javascript' src='js/main840f.js'></script>
<script type='text/javascript' src='http://abcli.edu.sa/wp-includes/js/comment-reply.min.js'></script>


        {!! get_it("bootstrap-watch/css/$theme.min.css") !!}
        {!! get_it("custom/css/custom.css") !!}
        {!! get_it("font-awesome.css") !!}
*/?>


@section("css_section")
            {!! get_it("_CMS/css/style.css") !!}
            {!! get_it("_CMS/css/style-tow.css") !!}
            {!! get_it("_CMS/css/responsive.css") !!}
            {!! get_it("_CMS/css/fonts-web/font.css") !!}
@show




<style>
    @section('css_add')
    @show
</style>

@section("js_section")

            {!! get_it("_CMS/js/jquery.js") !!}
            {!! get_it("_CMS/js/jquery-migrate.min.js") !!}
            {!! get_it("_CMS/js/bootstrap.min840f.js") !!}
            {!! get_it("_CMS/js/jquery.mCustomScrollbar.concat.min840f.js") !!}
            {!! get_it("_CMS/js/jquery.hoverdir840f.js") !!}
            {!! get_it("_CMS/js/jquery.isotope.min840f.js") !!}
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
            {!! get_it("_CMS/js/gmap-min840f.js") !!}
            {!! get_it("_CMS/js/main840f.js") !!}
            {!! get_it("_CMS/js/comment-reply.min.js") !!}
@show


    @section('js_add')
    @show

    @section('head_add')
    @show
    

</head>