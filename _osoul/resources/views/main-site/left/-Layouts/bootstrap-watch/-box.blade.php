@section('head')
    @include( get_location("-Layouts.bootstrap-watch.head" ) )
@show

<?php /*
@section('header')
    @include( get_location("-Layouts.bootstrap-watch.header" ) )
@show
    @section("breadcrumbs")
        @include( get_location("-Layouts.bootstrap-watch.breadcrumbs" ) )
    @show

@section('media')
    @if(!Dev)
        @include( get_location("-Layouts.bootstrap-watch.media" ) )
        <div class='col-sm-8'>
            @yield('comments') 
        </div>
        <div class='col-sm-4'>
            @yield('share')  
            @yield('follow')  
        </div>
    @endif
@show

@section('footer')
    @include( get_location("-Layouts.bootstrap-watch.footer" ) )
@show

@section('modals')
    @include( get_location("-Layouts.bootstrap-watch.modals" ) )
@show

@section('foot')
    @include( get_location("-Layouts.bootstrap-watch.foot" ) )
@show

    */
    ?>


@section('main')
<div id='page_container'>

    {!! $content_layout !!}
</div>
@show

<div class="clearfix"></div>






