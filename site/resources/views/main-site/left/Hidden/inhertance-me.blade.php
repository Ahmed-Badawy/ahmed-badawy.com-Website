@section('header')
@overwrite

{!! get_angular() !!}

<div class="container" style='margin-top:1%' ng-app=''>
  <div class="col-md-8 col-sm-offset-2 col-sm-12">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>حساب الميراث</h2>
  </div>
  <div class="panel-body">
    <h5>

<form>
<div class="input-group">    
  <span class="input-group-addon">Total</span>
  <input type="number" ng-model="total" autofocus="autofocus" placeholder="Enter Number" class="form-control" id='amount'>
</div>

<h3 ng-show='total'>Us: @{{total * .4375}}</h3>
<h3 ng-show='total'>Them: @{{total * .5625}}</h3>
<h3 ng-show='total'>One Boy: @{{total * .21875}}</h3>
<h3 ng-show='total'>Her: @{{total * .125}}</h1>



<hr>
      <button type="reset" class="btn btn-danger col-md-12">Clear</button> 
</form>

    </h5>
  </div>

  </div>
</div>  


@section('footer')
@stop