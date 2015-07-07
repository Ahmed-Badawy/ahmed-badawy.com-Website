

<h3>سيارات - {{$models['name_ar']}}</h3>



<div class="col-sm-6">
	@yield('model')
	@yield('year')
	@yield('kms')
	@yield('cost')
</div>	

<div class="col-sm-6">
	@yield('title')
	@yield('desc')
	@yield('used')
</div>	


<div class='clearfix'></div>
<br>


	    <button type='submit' class="btn btn-success"><b>أعلن الإعلان</b></button>
	    <button type='reset' class="btn btn-danger" ><b>أمسح البيانات</b></button>



