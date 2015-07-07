    <div role="tabpanel" class="tab-pane" id="appliances">
<div class="btn-group btn-group-justified">
	  <?php $i=1; ?>

@foreach($tax_list['appliances'] as $key=>$val)
	<div class="btn-group">	
		<a class="btn btn-default">{{$val['name_ar']}}</a>
	</div>
	<?php if ($i == 6){ echo "</div><div class='btn-group btn-group-justified'>"; $i = 0; }
	$i++; ?>
@endforeach
</div>  
    </div>