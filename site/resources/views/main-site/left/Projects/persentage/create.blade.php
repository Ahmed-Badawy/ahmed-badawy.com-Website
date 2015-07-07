
<h1>Add A New Persentage Query:-</h1>



<form class="form-inline" method="post">
	<div class="well well-sm col-sm-6 col-sm-offset-3" ng-show='stage==0'>
		<label>Name Of Persentage Query: </label> &nbsp; 
		<input type="text" class='form-control' ng-model='query'>  &nbsp; 
		<a class='btn btn-success' ng-click='query_name=query;stage=1;'>Save</a>
	</div>

<div ng-show='stage==1' class='row'>
	<div class='well well-sm' style='margin-bottom:0px' >
	<div class='col-sm-4'>
	<label>Person Name: &nbsp; </label>
	<input type='text' class='form-control widthfix' placeholder='Enter Person Name' ng-model="name">
	</div>
	<div class='col-sm-4'>
	<label>Person Persentage: &nbsp; </label>
	<input type='number' class='form-control' placeholder='Enter Persentage' ng-model="persent">
	</div>
	<div class='col-sm-4'>
	<label>OF: &nbsp; </label>
	<input type='number' class='form-control' ng-model="overall">
	</div>	
	<div class="clearfix"></div>
<div class="alert alert-danger" ng-show="errorMsg">Name Must be a String & persentage Must be a number.</div>
	</div>

<a ng-click="addPerson(name,persent)" class='btn btn-primary btn-block btn-lg'>Add Person</a>
<br>

<table ng-hide='persons.length == 0' class="table table-condensed table-hover table-bordered">
	<tr>
		<th>Name</th>
		<th>Persent</th>
		<th>Outof</th>
		<th>Total Persent</th>
		<th>Operations</th>
	</tr>
	<tr ng-repeat="n in persons">
		<td>@{{n.name}}</td>
		<td>@{{n.persent}}</td>
		<td>@{{n.overall}}</td>
		<td>@{{n.overall_persent}}%</td>
		<td><a ng-click="deleteElm($index)">{!! fa2('trash') !!}</a></td>
	</tr>
</table>



<div class="btn-group btn-group-justified">
  <div class="btn-group">
<a class='btn btn-success btn-lg btn-block' ng-click='submitForm()'>I Have Finished</a>
  </div>
  <div class="btn-group">
<button type='reset' class='btn btn-danger btn-lg btn-block'>Reset The Form</button>
  </div>  
</div>


</form>
</div>
<div class="clearfix"></div>
<a class='btn btn-default btn-sm col-sm-6 col-sm-offset-3' href='persentage#/main'>Cancel</a>

<br>





