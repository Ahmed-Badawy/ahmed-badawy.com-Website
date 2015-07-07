@section("head_add")
{!! get_it('plugins/bootstrap-social/bootstrap-social.css') !!}
@overwrite



<div class='container panel col-xs-12 col-sm-8 col-sm-offset-2' >

<div class='panel panel-heading'>
	<h3>Remote Sign-In  - <small>You can Remotly <b>Sign-in</b> with:</small></h3>
</div>


<div class='panel-body'>

<h3 class='text-center'>Login with</h3>
<div class="btn-group-vertical col-sm-4 col-sm-offset-4" role="group">
	<a href="{{REMOTE_SITE_URL.'remote-auth/google'}}" class='btn btn-block btn-social btn-lg btn-google-plus'>{!!fa2('google')!!} Google</a>
	<a href="{{REMOTE_SITE_URL.'remote-auth/facebook'}}" class='btn btn-block btn-social btn-lg btn-facebook'> {!!fa2('facebook')!!} Facebook</a>
	<a href="{{REMOTE_SITE_URL.'remote-auth/twitter'}}" class='btn btn-block btn-social btn-lg btn-twitter'> {!!fa2('twitter')!!} Twitter</a>
	<a href="{{REMOTE_SITE_URL.'remote-auth/github'}}" class='btn btn-block btn-social btn-lg btn-github'> {!!fa2('github-alt')!!} Github</a>
</div>




</div>
</div>