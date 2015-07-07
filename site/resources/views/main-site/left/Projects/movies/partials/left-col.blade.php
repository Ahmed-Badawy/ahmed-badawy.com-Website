	<div class="col-sm-2">
  <h1> </h1>
      <!-- Left column -->
      <p style='margin-bottom:-15px;'><strong>{!! fa2('gear') !!}Search By</strong></p>     
      <hr>
      


<a ng-href='#/' class='widthfix bright btn bright-background'>Main Page</a>

<hr>

<div class="panel panel-default">
<a class="panel-heading text-center btn btn-primary widthfix" ng-click='years.left_panel=!years.left_panel'>Year</a>
<ul class="list-group col-sm-4" ng-show='years.left_panel'>
  <a class="btn btn-default btn-sm list-group-item" ng-href="#main/year/all">All</a>
@for($year = 2014;$year>2003;$year--)
  <a class="btn btn-default btn-sm list-group-item" ng-href="#main/year/{!! $year !!}">{!! $year !!}</a>
@endfor
</ul>
<ul class="list-group col-sm-4" ng-show='years.left_panel'>
@for($year = 2003;$year>1991;$year--)
  <a class="btn btn-default btn-sm list-group-item" ng-href="#main/year/{!! $year !!}">{!! $year !!}</a>
@endfor
</ul>
<ul class="list-group col-sm-4" ng-show='years.left_panel'>
@for($year = 1991;$year>=1980;$year--)
  <a class="btn btn-default btn-sm list-group-item" ng-href="#main/year/{!! $year !!}">{!! $year !!}</a>
@endfor
</ul>
<div class="clearfix"></div> 
</div>

<hr>
<!-- <a ng-href='#attach' class='btn btn-default widthfix'>Attach Files</a> -->
<a ng-href='#genre' class='widthfix bright btn bright-background' style='margin-bottom:5px'>Genres</a>
<a ng-href='#actors' class='widthfix bright btn bright-background' style='margin-bottom:5px'>Actors</a>
<a ng-href='#franch' class='widthfix bright btn bright-background' style='margin-bottom:5px'>Franchises</a>
<a ng-href='#rating' class='widthfix bright btn bright-background' style='margin-bottom:5px'>Rating</a>
<!-- <a ng-href='#play' class='btn btn-default widthfix'>Play Movies</a> -->

<div class="clearfix"></div> 
<hr>

  	</div><!-- /col-2 -->