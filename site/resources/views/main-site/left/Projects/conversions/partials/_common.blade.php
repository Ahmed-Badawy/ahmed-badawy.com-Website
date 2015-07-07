
@foreach($itiration as $key=>$val)
<div class="col-sm-{{$cols}} pull-right">    
  <label class="input-group">{{u($val[0])}}</label>
  <div class="input-group">
      <input type="text" ng-change="calc({{$key}} ,{{json_encode($itiration)}} ,unit_{{$key}})" ng-model="unit_{{$key}}" autofocus="autofocus" placeholder="Enter Number" class="form-control input-sm">
      <div class="input-group-addon">{{$val[1]}}</div>
  </div>
<br>
</div>
@endforeach


<div class="clearfix"></div>
<br><br>

<button type="button" class="btn btn-success btn-sm col-xs-6" data-toggle="modal" data-target=".bs-example-modal-lg">The Logic</button>
<a class="btn btn-danger btn-sm col-xs-6" href="converter#/main">Back</a>
