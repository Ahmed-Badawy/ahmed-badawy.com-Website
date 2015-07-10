
<footer class="col-xs-12 site-footer hidden-xs">
		<div class="col-sm-4">
			<h6>Copy Rights: {!! date('Y') !!} - Ahmed Badawy</h6>
		</div>
		
<h6 class="col-sm-4">
    <a href="{!! url('contact') !!}" class="highlight" target="_blank">Contact</a> | 
    <a href="{!! url('contact') !!}" class="highlight" target="_blank">Suggestions</a> | 
    <a href="{!! url('home') !!}" class="highlight" target="_blank">Home</a> | 
    <!-- <a href="{!! url('cv') !!}" class="highlight" target="_blank">C.V</a> |  -->
    <a href="http://spidro.com" class="highlight" target="_blank">Spidro</a> | 
</h6>


@section('social_media')
<h6>
	<div class="col-sm-4">
<a href="mailto:{{social('my_email_1')}}?Subject=Contact%20Message" target="_top">{!! fa2('envelope') !!}</a>
<!-- <a href="mailto:{{social('my_email_1')}}?Subject=Contact%20Message" target="_top">{!! fa2('phone') !!}</a>
<a href="mailto:{{social('my_email_1')}}?Subject=Contact%20Message" target="_top">{!! fa2('whatsapp') !!}</a>
<a href="mailto:{{social('my_email_1')}}?Subject=Contact%20Message" target="_top">{!! fa2('map-marker') !!}</a> -->
<a href="{{social('facebook')}}" target="_blank">{!! fa2('facebook') !!}</a>
<a href="{{social('twitter')}}" target="_blank">{!! fa2('twitter') !!}</a>
<a href="{{social('google-plus')}}" target="_blank">{!! fa2('google-plus') !!}</a>
<a href="{{social('github')}}" target="_blank">{!! fa2('github') !!}</a>
<!-- <a href="{{social('pinterest')}}" target="_blank">{!! fa2('pinterest') !!}</a>
<a href="{{social('linkedin')}}" target="_blank">{!! fa2('linkedin') !!}</a>
<a href="{{social('instagram')}}" target="_blank">{!! fa2('instagram') !!}</a>
<a href="{{social('xing')}}" target="_blank">{!! fa2('xing') !!}</a>
<a href="{{social('vk')}}" target="_blank">{!! fa2('vk') !!}</a>
<a href="{{social('vk')}}" target="_blank">{!! fa2('youtube') !!}</a> -->
	</div>
</h6>
@show	



</footer>

