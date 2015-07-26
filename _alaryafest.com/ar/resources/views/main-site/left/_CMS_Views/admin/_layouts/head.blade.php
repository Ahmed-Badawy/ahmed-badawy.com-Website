<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>


    @section("css_section")
        {!! get_it("bootstrap-watch/css/default.min.css") !!}
        {!! get_it("custom/css/custom.css") !!}
        {!! get_it("font-awesome.css") !!}
    @show

    @section("sweet_alert")
        {!! get_it("plugins/sweetAlert/sweetalert.css") !!}
        {!! get_it("plugins/sweetAlert/sweetalert-arabic.css") !!}
        {!! get_it("plugins/sweetAlert/sweetalert.min.js") !!}
    @show

    <?php if(LOAD_FONTS){ ?>
    @section('font_section')
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/earlyaccess/notokufiarabic.css' rel='stylesheet' type='text/css'>
    @show
    <?php } ?>


    <style>
        @section('css_add')
        @show
    </style>

    @section("js_section")
        <?php
        echo get_it('jquery');
        echo get_it('bootstrap.js');
        echo get_it('custom/js/custom.js');
        ?>
    @show


    @section('wysiwygJS')
        @include(get_location("_CMS_Views.admin._layouts.wysiwygJS_config"))
    @show


    @section('js_add')
    @show

    @section('head_add')
    @show


</head>
<body>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->



