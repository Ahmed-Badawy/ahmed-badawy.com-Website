<h1 class='bright bright-background text-center'>ضيف بيانات الإعلان الجديد</h1>

@include(get_location('spidro.ad_create.parts'))


<form method='post' action='{{route("save-ad")}}' name='form' novalidate>
	@include(get_location('spidro.ad_create.'.$cate.'_ad'))
	<input type='hidden' name='cate' value="{{$cate}}">
	<input type='hidden' name='sub1' value="{{$sub}}">
</form>

