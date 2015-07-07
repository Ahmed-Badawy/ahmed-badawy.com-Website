
<h3 class='text-center'>Franchises</h3></div>


<label>Search Franchises</label>
<input type="text" ng-model='searchText' ng-change='sss=searchText' class='form-control widthfix'><br>

<div class='bright' ng-repeat="g in data.franch | filter:sss">
	<!-- <a class="btn btn-default col-sm-2" ng-href='#main/franch/@{{g.franchises}}'><b>@{{g[0].franch | wc}}</b></a>  -->
	<h3 class='text-center bright-background' style='margin-top:0;padding:10px;' ng-click='g.show=!g.show'>@{{g[0].franch | wc}}</h3>
	<div ng-repeat="k in g" class='col-md-2' ng-show='g.show'>
		<a ng-href='#main/franch/@{{k.franch}}' class='col-xs-6 col-sm-3'><img ng-src="@{{k.id | git:'mojo_img'}}" alt="@{{k.franch}}" class='thumbnail'></a>
	</div>

	<div class="clearfix"></div>
</div>


