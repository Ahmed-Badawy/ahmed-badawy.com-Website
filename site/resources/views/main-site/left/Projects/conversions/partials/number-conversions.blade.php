
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Number Conversion</h2>
  </div>
  <div class="panel-body">
    <h5>


<div class="input-group">    
  <span class="input-group-addon">Decimal</span>
  <input type="text" ng-change="calc(dec,10)" ng-model="dec" autofocus="autofocus" placeholder="Enter Number" class="form-control">
</div>
<br>
<div class="input-group">    
  <span class="input-group-addon">Binary</span>
  <input type="text" ng-change="calc(bin,2)" ng-model="bin" placeholder="Enter Number" class="form-control">
</div>
<br>
<div class="input-group">    
  <span class="input-group-addon">Octal</span>
  <input type="text" ng-change="calc(oct,8)" ng-model="oct" placeholder="Enter Number" class="form-control">
</div>
<br>
<div class="input-group">    
  <span class="input-group-addon">HexDecimal</span>
  <input type="text" ng-change="calc(hex,16)" ng-model="hex" placeholder="Enter Number" class="form-control">
</div>




<div class="clearfix"></div>
<br><br>


<a class="btn btn-danger btn-sm col-xs-6 col-xs-offset-3" href="converter#/main">Back</a>


    </h5>
  </div>
  </div>
