<!-- <div ng-mouseup="close_panel()" class='row'> -->
<div id="dimScreen" class="cover" ng-class="{dimScreen:show_style=='partial'}" ng-click="close_panel()"></div>
<!-- Main -->




<div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 page2" ng-show="show_style=='partial'">
<div class='col-sm-5'>
    <img src="http://pthumb.lisimg.com/image/@{{s_star.img}}/260full-feed.jpg" class='img img-thumbnail'>
	<div class="rating pull-left text-center" ng-show='is_rated(s_star)'>
		<span ng-click='rate_star(5)' ng-class='get_class(5,s_star)'>@{{get_star_type(s_star,5)}}</span>
		<span ng-click='rate_star(4)' ng-class='get_class(4,s_star)'>@{{get_star_type(s_star,4)}}</span>
		<span ng-click='rate_star(3)' ng-class='get_class(3,s_star)'>@{{get_star_type(s_star,3)}}</span>
		<span ng-click='rate_star(2)' ng-class='get_class(2,s_star)'>@{{get_star_type(s_star,2)}}</span>
		<span ng-click='rate_star(1)' ng-class='get_class(1,s_star)'>@{{get_star_type(s_star,1)}}</span>
	</div>
</div>
<div class="col-sm-7">
	    <a class='pull-right btn btn-danger btn-xs' ng-click="close_panel()">&nbsp;X&nbsp;</a>
		<h3>@{{s_star.name}}</h3> 
		<p ng-show="s_star.real_name">Real Name: <b>@{{s_star.real_name}}</b><p>
		<p ng-show="s_star.born">Born: <b>@{{s_star.born}}</b><p>
		<p ng-show="s_star.age">Age: <b>@{{s_star.age}}</b><p>
		<p ng-show="s_star.died">Died: <b>@{{s_star.died}}</b><p> 
		<p ng-show="s_star.country">Country: <b>@{{s_star.country}}</b><p> 
		<p ng-show="s_star.height">Height: <b>@{{s_star.height}}</b><p> 
		<p ng-show="s_star.origin">Origin: <b>@{{s_star.origin}}</b><p> 
		<p ng-show="s_star.residing">Residing In: <b>@{{s_star.residing}}</b><p> 
		<p ng-show="s_star.marital_status">Marital Status: <b>@{{s_star.marital_status}}</b><p> 
</div>
</div>




@section("pagination")
<nav class='text-center' ng-hide="loading">
  <ul class="pagination pagination-sm">
<li ng-class="li_class('first')" title="First Page"><a aria-label="Previous" ng-click="toPage(1)"><span aria-hidden="true"><small>(1)</small> {!! fa2("fast-backward") !!}</span></a></li>
<li ng-class="li_class('first')" title="Back Page"><a aria-label="Previous" ng-click="toPage(current_page-1)"><span aria-hidden="true">{!! fa2("step-backward") !!}</span></a></li>

  <li ng-repeat="p in pagi.before"><a ng-click="toPage(p)">@{{p}}</a></li>
  <li class='active'><a>@{{current_page}}</a></li>
  <li ng-repeat="p in pagi.after"><a ng-click="toPage(p)">@{{p}}</a></li>

<li ng-class="li_class('last')" title="Next Page"><a aria-label="Previous" ng-click="toPage(current_page+1)"><span aria-hidden="true">{!! fa2("step-forward") !!}</span></a></li>
<li ng-class="li_class('last')" title="Last Page"><a aria-label="Previous" ng-click="toPage(pagi.pages_number)"><span aria-hidden="true">{!! fa2("fast-forward") !!} <small>(@{{pagi.pages_number}})</small></span></a></li>

<li class="pull-right">
    <input type="number" placeholder="Page Num" class="form-control input-sm" style='width:80px' ng-model="goToPageNum">
</li>
<!-- <div style="display:inline-block;">
<input type="number" class='form-control input-sm' style='width:30%;display:inline;' ng-model="goToPageNum"><a class="btn btn-sm btn-default" ng-click="toPage(goToPageNum)">Go</a>
</div> -->
  </ul>
</nav>
@stop












<div class="col-sm-12">

<h1 class='text-center bright' style='font-size:400%;font-family:tahoma'>Actors Rate</h1>

<div class="col-sm-12">

<div class="col-sm-4">
    <label>Search For Actor:</label>
    <input type="text" ng-model='q' ng-change='search_pornstar()' class='form-control widthfix' autofocus='true'>
</div>


    <br><br><br><br><div class="clearfix"></div>

@yield("pagination")


<div class="clearfix"></div>

{!! render_loader() !!}

<div class="fixed-button back-fixed-button btn btn-primary btn-lg" ng-class="li_class('first')" ng-click="toPage(current_page-1)">{!! fa2('arrow-left') !!} Back</div>
<div class="fixed-button next-fixed-button btn btn-primary btn-lg" ng-class="li_class('last')" ng-click="toPage(current_page+1)">Next {!! fa2('arrow-right') !!}</div>

<div class="text-center" ng-hide="loading">
  <div class='thumbnail with-caption' ng-repeat="m in pornstars">
      <div class="num">@{{($index+1)+(current_page-1)*items_per_page}}</div>
      <img ng-src="http://pthumb.lisimg.com/image/@{{m.img}}/260full-feed.jpg" ng-click="select_pornstar(m)">
      <p class='text-center bright bright-background' ng-click="select_pornstar(m)">@{{m.name}}</p>
  </div>
</div>


</div>
@yield("pagination")







<!-- /Main -->