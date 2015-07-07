{!! get_angular("movies") !!}

@section("head_add")
    {!! get_it('custom_css/movies.css') !!}
    {!! get_it('custom/css/custom.css') !!}
@stop



<!-- Main -->
<div class="container-fluid" ng-app="myApp">
<div class="row" ng-controller='main_controller'>

    @include( get_location("Projects.movies.partials.left-col" ) )


<div class="col-sm-10">
<h1 class='text-center bright'>Movies Indexer</h1>
      <ng-view></ng-view>
</div><!--/col-span-9-->


</div>
</div>
<!-- /Main -->


