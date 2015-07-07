
{!! get_angular("bank") !!}


<div class="container" style='margin-top:1%' ng-app='bank_profit_app'>
  <div class="col-md-8 col-sm-offset-2 col-sm-12">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Bank Profit Calculator</h2>
  </div>
  <div class="panel-body" ng-controller='bank'>
    <h5>

<select name="" id="" ng-model='type' class='form-control' style='width:100%'>
            <option value="norm" class='h4'>الطريقة العادية</option>
            <option value="adv" class='h4'>الطريقة الدقيقة</option>
</select> 
<br>
<div class="alert alert-info text-right">@{{msgs.typeMsg}}</div>
<div class="clearfix"></div>

<br><br>
<div class="input-group">    
  <span class="input-group-addon">مبلغ الإيداع</span>
  <input type="number" ng-model="amount" autofocus="autofocus" placeholder="Enter Number" class="form-control">
</div>
<br>
<div class="input-group">    
  <span class="input-group-addon">نسبة الربح الشهرية</span>
  <input type="number" ng-model="per" placeholder="Enter Number" class="form-control">
</div>
<br>
<div class="input-group">    
  <span class="input-group-addon">زمن الإيداع بالأشهر</span>
  <input type="number" ng-model="months" placeholder="Enter Number" class="form-control">
</div>
<br>
<div class="alert alert-info text-right">لو سنتين مثلا يبقى 24 شهر.</div>

<h4 ng-show='profit' class='text-right'>صافى الربح: @{{profit}}</h4>
<h4 ng-show='total' class='text-right'>المبلغ الكلى بالأرباح هو: @{{total}}</h4>

<br><br><hr>
<a href="{{url('projects')}}" class='btn btn-primary btn-lg btn-block'>Back To Projects</a>

    </h5>
  </div>


  </div>
</div>  


