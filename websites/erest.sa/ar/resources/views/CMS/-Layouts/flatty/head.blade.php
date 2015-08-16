<!DOCTYPE html>
<html>
<head>
    <title>Spidro CMS</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>

    <link href='{{CMS_ASSETS}}images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='{{CMS_ASSETS}}images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='{{CMS_ASSETS}}images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='{{CMS_ASSETS}}images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='{{CMS_ASSETS}}images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='{{CMS_ASSETS}}images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!-- / START - page related stylesheets [optional] -->
    <link href="{{CMS_ASSETS}}stylesheets/plugins/tabdrop/tabdrop.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / END - page related stylesheets [optional] -->

<link href="{{CMS_ASSETS}}stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>


    <!-- / bootstrap [required] -->
    <!-- <link href="{{CMS_ASSETS}}stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" /> -->
    <!-- / theme file [required] -->
    <link href="{{CMS_ASSETS}}stylesheets/dark-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="{{CMS_ASSETS}}stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / demo file [not required!] -->
    <!-- <link href="{{CMS_ASSETS}}stylesheets/demo.css" media="all" rel="stylesheet" type="text/css" /> -->
    <!--[if lt IE 9]>
    <script src="{{CMS_ASSETS}}javascripts/ie/html5shiv.js" type="text/javascript"></script>
    <script src="{{CMS_ASSETS}}javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->


@section('font_section')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/earlyaccess/notokufiarabic.css' rel='stylesheet' type='text/css'>
@show



    <link href="{{public_dir}}site-files/custom.css" media="all" rel="stylesheet" type="text/css" />


    @section('angular_area')
        <script src="{{CMS_ASSETS}}special/sources/angular.min.js" type="text/javascript"></script>
        <script src="{{CMS_ASSETS}}special/script.js" type="text/javascript"></script>
    @show



    <!-- / jquery [required] -->
    <!-- <script src="{{CMS_ASSETS}}javascripts/jquery/jquery.min.js" type="text/javascript"></script> -->
    <!-- / jquery mobile (for touch events) -->
    <script src="{{CMS_ASSETS}}javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery migrate (for compatibility with new jquery) [required] -->
    <script src="{{CMS_ASSETS}}javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="{{CMS_ASSETS}}javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="{{CMS_ASSETS}}javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="{{CMS_ASSETS}}javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="{{CMS_ASSETS}}javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="{{CMS_ASSETS}}javascripts/plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="{{CMS_ASSETS}}javascripts/theme.js" type="text/javascript"></script>
    <!-- / demo file [not required!] -->
    {{--<script src="{{CMS_ASSETS}}javascripts/demo.js" type="text/javascript"></script>--}}
    <!-- / START - page related files and scripts [optional] -->
    <script src="{{CMS_ASSETS}}javascripts/plugins/tabdrop/bootstrap-tabdrop.js" type="text/javascript"></script>
    <!-- / END - page related files and scripts [optional] -->




<style type="text/css">
    .bg-danger{
        background-color: #c5ebf1;
    }
</style>


@section("head_add")
@show

        @section("wysiwyg")
            @include("CMS.-Layouts.flatty.wysiwygJS_config")
        @stop

</head>
<body class='contrast-sea-blue'>