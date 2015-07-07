<h3 class='text-center'>Actors</h3></div>


<label>Search Actors (@{{data.actors.length}})</label>
<input type="text" ng-model='data.actor_filter' class='form-control widthfix'><br>


<div ng-repeat="actor in data.actors | filter:data.actor_filter | offset:data.current_page*data.items_per_page | limitTo:data.items_per_page">
<p class="btn bright bright-background col-xs-6 col-xs-3" style='margin:1px' >

<a ng-href='#main/actor/@{{actor}}' class='bright pull-left'><b>@{{actor | wc}}</b></a>
<a ng-href='@{{actor | git:"google_img"}}' target='_blank' class='pull-right btn btn-default btn-xs'>{!!fa2('camera',0)!!}</a> 
<a ng-href='@{{actor | git:"google_search"}}' target='_blank' class='pull-right btn btn-default btn-xs'>{!!fa2('desktop',0)!!}</a>

</p> 
</div>

<div class="clearfix"></div>
<hr style='margin:15px 0px -10px 0px'>

<nav class='text-center'>
  <ul class="pagination">
    <li ng-class="prevPageDisabled()"><a ng-click="setPage(0)">{!!fa2('fast-backward')!!}</a></li>
    <li ng-class="prevPageDisabled()"><a ng-click="prevPage()">{!!fa2("step-backward")!!}</a></li>
            <li ng-repeat="n in pagi.before" ng-click="setPage(n)">
              <a>@{{n+1}}</a>
            </li>
            <li class='active'><a>@{{data.current_page+1}}</a></li>
            <li ng-repeat="n in pagi.after" ng-click="setPage(n)">
              <a>@{{n+1}}</a>
            </li>
    <li ng-class="nextPageDisabled()"><a ng-click="nextPage()">{!!fa2("step-forward")!!}</a></li>
    <li ng-class="nextPageDisabled()"><a ng-click="setPage(pageCount())">{!!fa2("fast-forward")!!}</a></li>
  </ul>
</nav>



