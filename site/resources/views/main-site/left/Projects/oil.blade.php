{!! get_angular("oil") !!}


<div class="container" style='margin-top:1%' ng-app='myApp'>
  <div class="col-md-8 col-sm-offset-2 col-sm-12">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Oil Calculator</h2>
  </div>
  <div class="panel-body" ng-controller='oil'>
    <h5>


<select name="" id="" ng-model='type' class='form-control' style='width:100%'>
            <option value="none">Choose Fuel Type</option>
            <option value="ben80" ng-click='calc()'>بنزين 80</option>
            <option value="ben92" ng-click='calc()' >بنزين 92</option>
            <option value="ben95" ng-click='calc()'>بنزين 95</option>
            <option value="solar" ng-click='calc()'>سولار</option>
            <option value="gas" ng-click='calc()'>الغاز)بالمتر المكعب)</option>
</select> 

<p class="alert alert-danger" ng-show='msg'><b>@{{msg}}</b></p>

<br>
<div class="input-group">    
  <span class="input-group-addon">كمية الوقود بالليتر</span>
  <input type="number" ng-model="amount" autofocus="autofocus" placeholder="Enter Number" class="form-control">
</div>
<br>
<div class="input-group">    
  <span class="input-group-addon">ثمن الوقود بالجينه</span>
  <input type="number" ng-model="price" placeholder="Enter Number" class="form-control">
</div>

<br><br>
<a href="{{url('projects')}}" class='btn btn-danger btn-lg btn-block'>Back To Projects</a>

    </h5>
  </div>


  </div>
</div>  

</div>

