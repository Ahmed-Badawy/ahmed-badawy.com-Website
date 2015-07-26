
<body>

{{--*******************************Header*********************************--}}
<header>

    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="social">
                    <a href="{{$facebook_link->desc}}" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="Facebook"><img src="{!! get_it("site-files/_CMS/images/facebook.png") !!}" /></a>
                    <a href="{{$google_plus_link->desc}}" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="Google+"><img src="{!! get_it("site-files/_CMS/images/google-plus.png") !!}" /></a>
                    <a href="{{$twitter_link->desc}}" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="twitter"><img src="{!! get_it("site-files/_CMS/images/twitter.png") !!}" /></a>
                    <a href="{{$youtube_link->desc}}" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="youtube"><img src="{!! get_it("site-files/_CMS/images/youtube.png") !!}" /></a>
                </div>

                <div class="lang"><a href="en/index.php">English</a></div>

            </div>

            <div class="col-md-6">
                <div class="phone">
                    <div> <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0536232523 </div>
                    <div><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> ahmed@erest.sa </div>
                </div>
            </div>

        </div>
    </div>

</header>


{{--*************************************************Menu*************************************--}}

<div class="container">
    <div class="row">
        <div class="menu-main">

            <div class="col-md-3 col-xs-offset-2">

                <div class="logo">
                    <img src="{!! get_it("site-files/_CMS/images/logo.png") !!}" />
                </div>

            </div>

            <div class="col-md-7">
                <div class="menu">
                    <nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
                        <div class="container-fluid padd-right">
                            <div class="navbar-header">
                                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>
                            <div class="navbar-collapse bs-example-js-navbar-collapse padd-right collapse" aria-expanded="false" style="height: 1px;">
                                <ul class="nav navbar-nav">


                                    <!-- <li class="dropdown">
                                       <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                         منتجات مميزة
                                         <span class="caret"></span>
                                       </a>
                                       <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="#">هدايا</li>
                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="#">منتجات عربية</a></li>
                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ديكور مكتب</a></li>
                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="#">أقلام</a></li>
                                       </ul>
                                     </li>-->
                                    <li class="dropdown"> <a href="{{url('/')}}"> الرئيسية </a></li>
                                    <li class="dropdown"> <a href="{{url('about-us')}}">  من نحن</a></li>
                                    <li class="dropdown"> <a href="{{url('projects')}}">  مشاريعنا</a></li>
                                    <li class="dropdown"> <a href="{{url('clients')}}">  عملائنا</a></li>
                                    <li class="dropdown"> <a href="{{url('photo-gallary')}}">  معرض الصور</a></li>
                                    <li class="dropdown"> <a href="{{url('contact')}}">  أتصل بنا</a></li>
                                </ul>

                            </div><!-- /.nav-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>


{{--***********************************************Helight*****************************************--}}

<div class="helight">
    <div class="container">
        <div class="row">
            <div class="col-md-3 padd-right">
                <div class="form-mass-home">


                    <form>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="الأسم">
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="الإيميل">
                        </div>
                        <div class="col-md-12">
                            <input type="tel" class="form-control" placeholder="الجوال">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input class="btn btn-default" type="submit" value="أرسال">
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-9 padd-left padd-right">

                <div class="pix_diapo">

                    @foreach($slider_imgs as $item)
                        <div>
                            <img src="{!! get_it('site-imgs/_CMS/slider-imgs/'.$item->img) !!}">
                            <div class="caption elemHover fromLeft">
                                {{$item->desc}}
                            </div>
                        </div>
                    @endforeach





                </div><!-- #pix_diapo -->


            </div>
        </div>
    </div>
</div>