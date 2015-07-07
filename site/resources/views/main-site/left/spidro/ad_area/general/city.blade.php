


@if(isset($region_cities))
<div class='col-sm-6'>
<h3 class="bright bright-background text-center">فى أنهى مدينة من {{$city}} ؟</h3>
	<div class="btn-group btn-group-justified">
	<?php $i=1; ?>
	@foreach($region_cities as $key=>$city)
		<div class="btn-group">	
			<a class="btn btn-default btn-sm" ng-click='selected.city="{{$key}}"'>{{$city}}</a>
		</div>
		<?php if ($i == 5){ echo "</div><div class='btn-group btn-group-justified'>"; $i = 0; }
		$i++; ?>
	@endforeach
	</div>	
</div>
@endif



<div class='col-sm-6 pull-right'>
<h3 class="bright bright-background text-center">فى أنهى محافظة ؟</h3>


 <div class="btn-group btn-group-justified">
  <div class="btn-group">
    <a class="btn btn-default" ng-click='city_filter_config("all_egypt");selected.region="all_egypt"'>{{$regions['all_egypt']}}</a>
  </div>
  <div class="btn-group">
    <a class="btn btn-default" ng-click='city_filter_config("cairo");selected.region="cairo"'>{{$regions['cairo']}}</a>
  </div>
  <div class="btn-group">
    <a class="btn btn-default" ng-click='city_filter_config("giza");selected.region="giza"'>{{$regions['giza']}}</a>
  </div>  
  <div class="btn-group">
    <a class="btn btn-default" ng-click='city_filter_config("alexandria");selected.region="alexandria"'>{{$regions['alexandria']}}</a>
  </div>
</div>

<?php 
	$i=1;
	unset($regions['all_egypt']);
	unset($regions['cairo']);
	unset($regions['giza']);
	unset($regions['alexandria']);
?>
<div class="btn-group btn-group-justified">
@foreach($regions as $key=>$region)
	<div class="btn-group">	
		<a class="btn btn-default btn-sm" ng-click='city_filter_config("{{$key}}");selected.region="{{$key}}"'>{{$region}}</a>
	</div>
	<?php if ($i == 6){ echo "</div><div class='btn-group btn-group-justified'>"; $i = 0; }
	$i++; ?>
@endforeach
</div>


</div>



<div class='clearfix'></div>
<hr>

