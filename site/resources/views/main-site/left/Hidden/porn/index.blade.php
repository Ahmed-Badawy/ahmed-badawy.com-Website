@section("header")
@stop

@section("css_section")
    {{get_it("bootstrap-watch/css/$theme.min.css")}}
    {{get_it('font-awesome.css')}}
    {{get_it('custom/css/custom.css')}}
@stop

@section("js_section")
      {{get_it('angular')}}
      {{get_it('ngResource')}}
      {{get_it('ngRoute')}}
      {{get_it('angular/app/projects/porn.js')}}

      {{get_it('jquery')}}
      {{get_it('bootstrap.js')}}
@stop   



@section("css_add")
    .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
    }
    .rating > span {
        display: inline-block;
        position: relative;
    }
    .rating > span:hover:before,
    .rating > span:hover ~ span:before {
        content: "\2605";
        position: absolute;
    }


a.btn.btn-xs.label-default,
a.btn.btn-xs.btn-danger{
    margin-bottom:2px;
    color:white;
    font-weight:bolder;
}    
@stop




<!-- Main -->
<div class="container-fluid" ng-controller='main_controller'>
<div class="row">

    @include( get_location("projects.movies.partials.left-col" ) )


<div class="col-sm-10">
      <ng-view></ng-view>
</div><!--/col-span-9-->


</div>
</div>
<!-- /Main -->


@section('footer')
@stop