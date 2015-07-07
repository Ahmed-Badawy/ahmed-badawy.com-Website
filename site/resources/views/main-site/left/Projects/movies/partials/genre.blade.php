<h3 class='text-center'>Genres</h3></div>

<label>Search Genre</label>
<input type="text" ng-model='data.gen_filter' class='form-control widthfix'><br>

<div ng-repeat="g in data.genres | filter:data.gen_filter">
<a class="btn bright bright-background col-xs-4 col-sm-2" ng-href='#main/genre/@{{g}}' style='margin:2px'><b>@{{g | wc}}</b></a> 
</div>
