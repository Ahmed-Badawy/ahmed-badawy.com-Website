    <h3 class='text-center'>نوع السيارة</h3>
    	  <?php $i=1; ?>

<div class="btn-group btn-group-justified">
@foreach($cars_types as $key=>$val)
	<div class="btn-group">	
		<a class="btn btn-default btn-sm" ng-click="new_ad_panel('cars','{{$key}}')">
		<b>{{$val['name_ar']}} - <span class='en'>{{u($val['name_en'])}}</span></b>
		</a>
	</div>
	<?php if ($i == 6){ echo "</div><div class='btn-group btn-group-justified'>"; $i = 0; }
	$i++; ?>
@endforeach
</div>  

	<?php $i=0; ?>
  	<h3 class='text-center'>متعلقات بالسيارت</h3>
    <div class="btn-group btn-group-justified">
@foreach($cars_others_types as $key=>$val)
	<div class="btn-group">	
		<a class="btn btn-default">{{$val['name_ar']}}</a>
	</div>
	<?php if ($i == 4){ echo "</div><div class='btn-group btn-group-justified'>"; $i = 0; }
	$i++; ?>
@endforeach

    </div>
