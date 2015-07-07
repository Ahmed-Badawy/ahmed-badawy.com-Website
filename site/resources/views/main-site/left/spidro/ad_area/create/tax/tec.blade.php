    <div role="tabpanel" class="tab-pane" id="tecnology">

    <h3 class='text-center'>كمبيوتر</h3>
	  <?php $i=1; ?>
<div class="btn-group btn-group-justified">
@foreach($tax_list['computers'] as $key=>$val)
	<div class="btn-group">	
		<a class="btn btn-default">{{$val['name_ar']}}</a>
	</div>
	<?php if ($i == 6){ echo "</div><div class='btn-group btn-group-justified'>"; $i = 0; }
	$i++; ?>
@endforeach
</div>  

    <h3 class='text-center'>لابتوب</h3>
    <?php $i=0; ?>
<div class="btn-group btn-group-justified">
@foreach($tax_list['laptops'] as $key=>$val)
	<div class="btn-group">	
		<a class="btn btn-default">{{$val['name_ar']}}</a>
	</div>
	<?php if ($i == 6){ echo "</div><div class='btn-group btn-group-justified'>"; $i = 0; }
	$i++; ?>
@endforeach
</div>  

    <h3 class='text-center'>موبيلات و أجهزة لوحية</h3>
	  <?php $i=1; ?>
<div class="btn-group btn-group-justified">
@foreach($tax_list['mobile_tablets'] as $key=>$val)
	<div class="btn-group">	
		<a class="btn btn-default">{{$val['name_ar']}}</a>
	</div>
	<?php if ($i == 6){ echo "</div><div class='btn-group btn-group-justified'>"; $i = 0; }
	$i++; ?>
@endforeach
</div>  


    </div>