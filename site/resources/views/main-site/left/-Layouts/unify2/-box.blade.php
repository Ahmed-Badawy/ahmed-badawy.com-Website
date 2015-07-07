@section('head')
    @include( get_location("-Layouts.unify.head" ) )
@show
@section('header')
    @include( get_location("-Layouts.unify.header" ) )
@show




@section('main')
<div id='page_container'>
	@section("breadcrumbs")
        @include( get_location("-Layouts.unify.breadcrumbs" ) )
    @show
    @include( get_location("-Layouts.unify.content2" ) )
</div>
@show

<div class="clearfix"></div>   

@section('media')
    @if(false || !Dev)
        @include( get_location("-Layouts.unify.media" ) )
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
    @include( get_location("-Layouts.unify.footer" ) )
@stop

@section('modals')
    @include( get_location("-Layouts.unify.modals" ) )
@show

@section('foot')
    @include( get_location("-Layouts.unify.foot" ) )
@show

