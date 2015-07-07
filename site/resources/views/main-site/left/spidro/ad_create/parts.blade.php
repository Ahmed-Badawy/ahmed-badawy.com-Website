@section('title')
<div data-title="عنوان الإعلان" data-placement="right" data-content="Putting Descriptive Title Helps Your Ad To Reach The Most Number Of People." class="has-popover" data-original-title="" title="">
		<div class="form-group">
		<label for="ad_title">{!! fa2('fire') !!} عنوان الإعلان</label>
		<input type="text" id="ad_title" name="ad_title" ng-model='ad.title' required="required" placeholder="عنوان الإعلان" class="form-control" kl_virtual_keyboard_secure_input="on">		
		</div>    
</div>
@stop 

@section('desc')
		<div class="form-group">
		<label for="desc">تفاصيل الإعلان</label>		
		<textarea cols="20" name="desc" ng-model='ad.desc' rows="10" id="desc" required="required" placeholder="تفاصيل الإعلان" class="form-control"></textarea>	
		</div>
@stop 


@section("model")
	@if(isset($models))
			<div class="form-group">
			<label for="model">{!! fa2('cab') !!} موديل</label>
			<select name="model" ng-model='ad.models' id="model" required="required" class="form-control en" placeholder='Choose Model'>
			<optgroup label="hummer Models">
			<option value="undefined" selected>غير محدد</option>
			@foreach($models['models_ar'] as $key=>$val)
						<option value="{{$key}}">{{$val}} &nbsp; |-|-| &nbsp; {{$models['models_en'][$key]}}</option>
			@endforeach
			</optgroup>
			</select>						
			</div>
	@endif
@stop


@section("capacity")
			<div class="form-group">
			<label for="capacity">Capacity</label>
			<select name="capacity" ng-model='ad.capacity' id="capacity" required="required" class="form-control">
			<optgroup label="سعة المحرك">
				<option value="undefined">غير محدد</option>
				<option value="1000 - 2000CC">1000 - 2000CC</option>
				<option value="2001 - 3000CC">2001 - 3000CC</option>
				<option value="3000 - 4000CC">3000 - 4000CC</option>
				<option value="4000+ CC">4000+ CC</option>
			</optgroup>
			</select>						
			</div>
@stop


@section("year")
			<div class="form-group">
			<label for="year">{!! fa2('clock-o') !!} سنة الموديل</label>
			<select name="year" ng-model='ad.year' id="year" required="required" class="form-control en">
			<optgroup label="Model Year">
			<option value="undefined">غير محدد</option>
			@for($i=date("Y");$i>=1950;$i--)
				<option value='{{$i}}'>{{$i}}</option>
			@endfor
			</optgroup>
			</select>						
			</div>	
@stop


@section("kms")
	<div class="form-group">
	<label for="km">{!! fa2('car') !!} كم عدد الكيلومترات التى سارتها ؟</label>
	<input type="text" ng-model='ad.kms' placeholder="kms" class="form-control" name="km">						
	</div>
@stop


@section("used")
<label>{!! fa2('wrench') !!} مستعمل ولا جديد ؟</label>
<label class="radio-inline">
  <input type="radio" name="status" value="new" style='position:relative;margin-left:0'> جديدة
</label>
<label class="radio-inline">
  <input type="radio" name="status" value="used" style='position:relative;margin-left:0'> مستعملة
</label>
@stop


@section("cost")
	<div class="form-group">
	<label for="cost">{!! fa2('dollar') !!} الثمن</label>
	<input type="number" ng-model='ad.cost' required="required" placeholder="الثمن" class="form-control" name="cost">			
	</div>          
@stop


@section("currency")
	<div class="form-group">
	<label for="currency">currency</label>
	<?php //dd(\Lst::common('currency')); ?>
	<select name="currency" ng-model='ad.currency' id="currency" required="required" class="form-control en">
	<optgroup label="Your Currency">
	@foreach(\Lst::common('currency') as $key=>$val)
		<option value='{{$val["code"]}}'>{{$val['name']}} - {{$val['format']}}</option>
	@endforeach
	<option value="Other Currency">Other Currency</option>
	</optgroup>
	</select>		        
	</div>
@stop