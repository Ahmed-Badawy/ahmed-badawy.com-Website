
  <div class="col-md-10 col-sm-offset-1 col-sm-12">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h3 class='text-center' dir='rtl'>البحث عن أكواد البريد المصرى ( Zip Code - Postal Code )</h3>
  </div>
  <div class="panel-body" ng-controller='postal_codes'>
    <h5>


<div class="col-md-6">
      <label  class='pull-right'>عدد النتائج المعروضة</label><br>
      <input type="number" class="form-control" ng-model="limitNum" placeholder="Limit Num" style='width:100%'>
</div>
<div class="col-md-6">
      <label class='pull-right'>أسم المكان المراد البحث عن رقم البريد به</label><br>
      <input type="search" class="form-control" ng-model="searchText" style='width:100%' dir='rtl'>
</div>

<div class="clearfix"></div><br>
<div class="clearfix"></div><br>

  <table ng-init="i=0" class="table table-striped table-hover table-bordered" ng-show='searchText'>
<tr>
  <th class='text-center' dir='rtl'>الكود البريدى (ZIP code)</th>
  <th class='text-center'>المدينة</th>
  <th class='text-center'>عنوان المكتب</th>
  <th class='text-center'>المكتب</th>
  <th class='text-center'>رقم</th>
</tr>
    <tr ng-repeat="code in postal_codes | filter:fst | limitTo:limitNum" ng-show='searchText'> 
      <td class='text-center'><b>@{{code.postal_code}}</b></td>
      <td class='text-right'>@{{code.postal_area}}</td>
      <td class='text-right'>@{{code.address}}</td>
      <td class='text-right'>@{{code.post_office}}</td>
      <td>@{{$index+1}}</td>
    </tr>
  </table>

<div class="clearfix"></div>

<br><br>

    </h5>
  </div>

<div class="panel-footer">
<a href="{{url('projects')}}" class='btn btn-danger btn-lg btn-block'>Back To Projects</a>
</div>

  </div>
</div>  
