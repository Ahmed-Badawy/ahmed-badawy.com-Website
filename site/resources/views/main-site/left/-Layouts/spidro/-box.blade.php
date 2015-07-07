@section('head')
    @include( get_location("-Layouts.spidro.head" ) )
@show
@section('header')
    @include( get_location("-Layouts.bootstrap-watch.header" ) )
@show




@section('main')
<div id='page_container'>
	@section("breadcrumbs")
	    @include( get_location("-Layouts.bootstrap-watch.breadcrumbs" ) )
	@show
    {!! $content_layout !!}
</div>
@show

<div class="clearfix"></div>   

@section('media')
    @if(false || !Dev)
        @include( get_location("-Layouts.bootstrap-watch.media" ) )
        <div class='col-sm-9'>
            @yield('comments') 
        </div>
        <div class='col-sm-3'>
            @yield('share')  
            @yield('follow')  
        </div>
    @endif
@show


@section('footer')
    @include( get_location("-Layouts.bootstrap-watch.footer" ) )
@stop

@section('modals')
    @include( get_location("-Layouts.bootstrap-watch.modals" ) )
@show

@section('foot')
    @include( get_location("-Layouts.bootstrap-watch.foot" ) )
@show

