    <div role="tabpanel" class="tab-pane" id="items_for_sale">
        	  <?php $i=1; ?>
<div class="btn-group btn-group-justified">
@foreach($tax_list['items_for_sale'] as $key=>$val)
	<div class="btn-group">	
		<a class="btn btn-default">{{$val['name_ar']}}</a>
	</div>
	<?php if ($i == 6){ echo "</div><div class='btn-group btn-group-justified'>"; $i = 0; }
	$i++; ?>
@endforeach
</div>  
    </div>