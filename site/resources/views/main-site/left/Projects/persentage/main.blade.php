
<h1 class='bright'>Persentage Querys :</h1><br>

        <div class="col-xs-12 col-sm-9 alert alert-danger" ng-hide='sp'>
<h4>Choose a Persentage Query from the right or Create A new One.</h4>
		</div>

        <div class="col-xs-12 col-sm-9 box" ng-show='sp'>
<label for="">Enter The Calculated Nubmer</label>
<input type="number" ng-model='full_amount' ng-change="calc(full_amount)" class='form-control widthfix' placeholder="Enter Calculated Number">
<br>
<div class="clearfix"></div>

<!-- <ul class="list-group">
  <li ng-repeat='n in sp' class="list-group-item h4" ><b>@{{n.name}} : @{{(n.persent/100)*full_amount}}</b></li>
</ul> -->
<table class="table table-striped table-hover table-bordered">
	<tr>
		<th>Name</th>
		<th>Persent</th>
		<th>Amount Share</th>
	</tr>
	<tr ng-repeat="n in sp">
		<td>@{{n.name}}</td>
		<td>@{{n.persent}}%</td>
		<td>
			<input type="number" ng-model="n.val" ng-change="calcfull(n.val,n.persent)" class='form-control input-sm' style='display:inline;'>
			&nbsp; -- &nbsp; @{{n.val | number}}
		</td>
	</tr>
</table>

		</div>
		
        <div class="col-xs-12 col-sm-3 pull-right" id="sidebar">
          <div class="list-group">
<a ng-href="persentage#/create" class="list-group-item" style='background:#0DB85F;color:white'><b>Create A New Persentage Query</b></a>
<a ng-repeat='p in persentages' ng-click="choose_p(p)" class="list-group-item" >@{{p}}</a>
<a href="{{url('projects')}}" class="list-group-item" style='background:#F5163F;color:white'><b>Exit To Projects</b></a>

          </div>
        </div><!--/.sidebar-offcanvas-->










