@extends("views.-layout")
        @section('breadcrumbs')
        @overwrite

@section('content')

        <!-- Slider -->
    <div class="slidercontainer">
        <div id="mainslider" class="owl-carousel">


            <div class="item">
                <div class="slidecaption">
                    <h2>تصميم إنجــــاز</h2>
                    <h4>مناسب لكل الاحتياجات وبأسعار لن تجدها في مكان أخر</h4>
                    <p><a class="btn btn-slide" href="#">المزيد من التفاصيل</a>
                    </p>
                </div>
                <img src="{{__design_files}}images/slider/1.jpg" alt="" />
            </div>

            <div class="item">
                <div class="slidecaption">
                   <h2>برمجة إنجــــاز</h2>
                    <h4>مناسب لكل الاحتياجات وبأسعار لن تجدها في مكان أخر</h4>
                    <p><a class="btn btn-slide" href="#">المزيد من التفاصيل</a>
                    </p>
                </div>
                <img src="{{__design_files}}images/slider/4.jpg" alt="" />
            </div>

            <div class="item">
                <div class="slidecaption">
                    <h2>تسويق إنجــــاز</h2>
                    <h4>مناسب لكل الاحتياجات وبأسعار لن تجدها في مكان أخر</h4>
                    <p><a class="btn btn-slide" href="#">المزيد من التفاصيل</a>
                    </p>
                </div>
                <img src="{{__design_files}}images/slider/2.jpg" alt="" />
            </div>

            <div class="item">
                <div class="slidecaption">
                   <h2>مطبوعات إنجــــاز</h2>
                    <h4>مناسب لكل الاحتياجات وبأسعار لن تجدها في مكان أخر</h4>
                    <p><a class="btn btn-slide" href="#">المزيد من التفاصيل</a>
                    </p>
                </div>
                <img src="{{__design_files}}images/slider/3.jpg" alt="" />
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div id="mainslider-nav" class="owl-carousel">
                    <div class="item"><i class="fa fa-pencil-square-o"></i>تصميم مواقع</div>
                    <div class="item"><i class="fa fa-file-code-o"></i>برمجة موقع</div>
                    <div class="item"><i class="fa fa-line-chart"></i>تسويق الكتروني</div>
                    <div class="item"><i class="fa fa-picture-o"></i>مطبوعات</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Slider -->


    <!--  Features -->
        {!! $main_text_1->desc !!}
    <!-- End of Features -->


    <!--  Call to Action -->
        {!! $main_text_4->desc !!}
    <!-- End of Call to Action -->
    
    
    <section class="features">
        <div class="row">
            <div class="col-sm-12">
                <h2>معرض الأعمال</h2>
                <span style="margin-bottom: 25px;">بعض من أخر انجازات إنجاز لتقنية المعلومات</span>
            </div>
        </div>

        <div class="row feature wow zoomIn" data-wow-delay="0.2s">


          <!--Carousel -->
                   

                    <div id="carousel-example">

    @foreach($elements['معرض الأعمال'] as $con)
        <div class="item"><img src="{{public_dir}}site-imgs/_CMS/elements/{{$con->img}}" alt=""></div>
    @endforeach


                        {{--<div class="item"><img src="{{__design_files}}images/carousel-1.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="item"><img src="{{__design_files}}images/carousel-2.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="item"><img src="{{__design_files}}images/carousel-3.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="item"><img src="{{__design_files}}images/carousel-4.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="item"><img src="{{__design_files}}images/carousel-1.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="item"><img src="{{__design_files}}images/carousel-2.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="item"><img src="{{__design_files}}images/carousel-3.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="item"><img src="{{__design_files}}images/carousel-4.jpg" alt="">--}}
                        {{--</div>--}}
                        
                    </div>

                    <!--End of Carousel  -->



        </div>
    </section>
    

    <!--  Pricing Tables -->
    {!! $main_text_2->desc !!}
    <!-- End of Pricing Tables -->



    <!--  Statistics -->
    {!! $main_text_3->desc !!}
    <!-- End of Statistics -->

    <div class="testimonials gray">
        <div class="row">
            <div class="col-sm-12">
                <h3>عملاء قالو عن إنجاز </h3>
                

                <div id="testimonials-carousel" class="owl-carousel">


                    @foreach($elements['عملاء قالو عنا'] as $con)
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonialimg"><img src="{{public_dir}}site-imgs/_CMS/elements/{{$con->img}}" alt="" />
                            </div>
                            {!! $con->elm_desc !!}
                        </div>
                    </div>
                    @endforeach



                </div>

            </div>
        </div>
    </div>


@endsection