
<h3 class='bright bright-background text-center'>عايز تعلن عن إيه بالظبط ؟</h3>


@foreach($new_ad_cates as $key=>$val)
    <a ng-click='selected.cate="{{$val[0]}}";cate_partial("{{$val[0]}}")' class='btn bright bright-background'>{{$val[1]}}</a>
@endforeach
<div class="clearfix"></div>
<div ng-include src="cate_partial"></div>




<hr>


