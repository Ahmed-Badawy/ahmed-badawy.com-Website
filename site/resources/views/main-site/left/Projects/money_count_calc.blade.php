@section("css_add")
  div.panel-body{
    position: relative;
  }
  #page2{
      background-color:white;
      z-index: 900;
      position: fixed;
      top:50px;
      right:15px;
      color:black;
      border:4px solid #5a5a5a;
  }
  #page2 h3{ color:black; }
@stop 



{!! get_angular("money_calc") !!}





<div class="container" style='margin-top:1%' ng-app='myApp'>
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Money Calculator</h2>
  </div>


  <div class="panel-body" ng-controller='main_controller'>
    <h5>

<div id='page2' class="col-xs-6 col-xs-offset-6 pull-right">
      <h3 style='display:inline'>Total: @{{sum}}</h3>
      <a class="btn btn-danger btn-xs pull-right" ng-click="clearit()">Clear</a>
</div>



<div>    
  <input type="number" ng-model="hun2" autofocus="autofocus" placeholder="Enter Number" class="form-control" style="display:inline">
  <b style="font-size:200%">&nbsp; X 200&nbsp; = &nbsp; <span ng-show="hundreds2">@{{hundreds2}}</span></b>
</div>
<div class="clearfix"></div>
<br>

<div>    
  <input type="number" ng-model="hun" autofocus="autofocus" placeholder="Enter Number" class="form-control" style="display:inline">
  <b style="font-size:200%">&nbsp; X 100&nbsp; = &nbsp; <span ng-show="hundreds">@{{hundreds}}</span></b>
</div>
<div class="clearfix"></div>
<br>

<div>    
  <input type="number" ng-model="fif" autofocus="autofocus" placeholder="Enter Number" class="form-control" style="display:inline">
  <b style="font-size:200%">&nbsp; X 50 &nbsp;&nbsp; = &nbsp; <span ng-show="fiftes">@{{fiftes}}</span></b>
</div>
<div class="clearfix"></div>
<br>

<div>    
  <input type="number" ng-model="twen" autofocus="autofocus" placeholder="Enter Number" class="form-control" style="display:inline">
  <b style="font-size:200%">&nbsp; X 20 &nbsp;&nbsp; = &nbsp; <span ng-show="twentes">@{{twentes}}</span></b>
</div>
<div class="clearfix"></div>
<br>

<div>    
  <input type="number" ng-model="ten" autofocus="autofocus" placeholder="Enter Number" class="form-control" style="display:inline">
  <b style="font-size:200%">&nbsp; X 10 &nbsp;&nbsp; = &nbsp; <span ng-show="tens">@{{tens}}</span></b>
</div>
<div class="clearfix"></div>
<br>

<div>    
  <input type="number" ng-model="fiv" autofocus="autofocus" placeholder="Enter Number" class="form-control" style="display:inline">
  <b style="font-size:200%">&nbsp; X 5 &nbsp;&nbsp;&nbsp;&nbsp; = &nbsp; <span ng-show="fives">@{{fives}}</span></b>
</div>
<div class="clearfix"></div>
<br>

<div>    
  <input type="number" ng-model="one" autofocus="autofocus" placeholder="Enter Number" class="form-control" style="display:inline">
  <b style="font-size:200%">&nbsp; X 1 &nbsp;&nbsp;&nbsp;&nbsp; = &nbsp; <span ng-show="ones">@{{ones}}</span></b>
</div>
<div class="clearfix"></div>
<br>

<h1>Total Sum: @{{sum}} <a class="btn btn-danger" ng-click="clearit()">Clear</a></h1>


<br><br>
<a href="{{url('projects')}}" class='btn btn-primary btn-lg btn-block'>Back To Projects</a>


    </h5>
  </div>
  </div>
</div>  
</div>

@section('footer')
@stop