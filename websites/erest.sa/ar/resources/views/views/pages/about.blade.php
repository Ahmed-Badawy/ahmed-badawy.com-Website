@extends("views.-layout")


@section('content')

   <!-- About Us -->

   <section class="about">
        <div class="about-hero">


	<div id="index-video" class="hidden-xs">
        <div class="index-video-container">
            <video autoplay="" loop="" muted="">
                <source src="{{__design_files}}video/148717512.mp4" type="video/mp4">
                <source src="{{__design_files}}video/148717512.webm" type="video/webm">
                <source src="{{__design_files}}video/148717512.ogv" type="video/ogg">
            </video>
        </div>
    </div>



        </div>

        {!! $main_text_5->desc !!}

        <div class="spacing-70"></div>

        <div class="about-quote">
            <div class="row full-width no-gutter">
                {!! $main_text_6->desc !!}
            </div>
        </div>

        

    </section>
   
   <!-- End of About Us -->

@endsection