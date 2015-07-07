<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->


<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<head>
    <title>Unify | Creative One Page Theme</title>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="hello">
    <meta name="author" content="hello">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">




    <!-- CSS Global Compulsory -->
    {!! get_it("unify/One-Page/assets/plugins/bootstrap/css/bootstrap.min.css") !!}
    {!! get_it("unify/One-Page/assets/css/one.style.css") !!}


    <!-- CSS Footer -->
    {!! get_it("unify/One-Page/assets/css/footers/footer-v7.css") !!}


    <!-- CSS Implementing Plugins -->
    {!! get_it("unify/One-Page/assets/plugins/animate.css") !!}
    {!! get_it("unify/One-Page/assets/plugins/line-icons/line-icons.css") !!}
    {!! get_it("unify/One-Page/assets/plugins/font-awesome/css/font-awesome.min.css") !!}
    {!! get_it("unify/One-Page/assets/plugins/pace/pace-flash.css") !!}
    {!! get_it("unify/One-Page/assets/plugins/owl-carousel/owl.carousel.css") !!}
    {!! get_it("unify/One-Page/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css") !!}
    {!! get_it("unify/One-Page/assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css") !!}
    {!! get_it("unify/One-Page/assets/plugins/revolution-slider/rs-plugin/css/settings.css") !!}


    {{--<!-- [if lt IE 9]>{!! get_it("unify/One-Page/assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css") !!}<![endif] -->--}}



    <!-- CSS Customization -->
    {{--{!! get_it("unify/One-Page/assets/css/custom.css") !!}--}}


    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/earlyaccess/notokufiarabic.css' rel='stylesheet' type='text/css'>
    <!-- fonts: -->
    <style>
        body{

            font-family: 'Lato', Helvetica, sans-serif;
            /*line-height: 1.5em;*/
            /*color:#222;*/
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .english{
            font-family: 'Open Sans','Lato', Helvetica, sans-serif;
        }
        .arabic{
            font-family: 'Noto Kufi Arabic', serif;
        }

        .service-block{
            transition:all .3s ease-out;
        }
        .service-block:hover{
            background-color: rgba(150,200,200,.5);
            color: #fff;
            padding-top:40px;
        }
    </style>

</head>



<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery arabic" dir='rtl'>