{!! get_angular("currency") !!}



<div ng-app='myApp'>
<div class="container-fluid" ng-controller="currnecyController">

<script type="text/javascript">
  <?php $j = json_encode($json_array['rates'],false); ?> ;
  var json_rates = <?php echo $j; ?>;
</script>

        <div class="col-xs-12">

<div class="row">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>Currency Calculator</h2>
  </div>
  <div class="panel-body">
<h5>



@foreach($json_array['rates'] as $key=>$rate)
 <div class="col-xs-12 col-sm-6 col-md-3 pull-right">
   <label class="input-group">{{$rate['name']}}</label>
   <div class="input-group">
 	  <input type="text" class="form-control input-sm" ng-change="calc2( '{{$rate['short']}}' , {{'currency_rates.'.$rate['short']}} )" ng-model="{{'currency_rates.'.$rate['short']}}" placeholder="{{$rate['short']}}">
 	  <div class="input-group-addon">{{$rate['short']}}</div>
   </div>
 <br>
 </div>
@endforeach



</h5>
</div>
</div>
      </div><!--/row-->

</div>


      </div><!--/row-->

</div>

