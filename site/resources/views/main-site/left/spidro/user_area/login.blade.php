{!! get_it('plugins/bootstrap-social/bootstrap-social.css') !!}

@section("breadcrumbs")
@overwrite







<div id="center-box">
        <h1 class="text-center">تسجيل الدخول</h1>
    <br/>
            <a href="{{REMOTE_SITE_URL.'remote-auth/google'}}" class='btn btn-block btn-social btn-lg btn-google-plus text-center'>{!!fa2('google')!!} <span class="text-center">جوجل</span></a>
            <a href="{{REMOTE_SITE_URL.'remote-auth/facebook'}}" class='btn btn-block btn-social btn-lg btn-facebook'> {!!fa2('facebook')!!} الفيسبوك </a>
            <a href="{{REMOTE_SITE_URL.'remote-auth/twitter'}}" class='btn btn-block btn-social btn-lg btn-twitter'> {!!fa2('twitter')!!} التويتر</a>
            <a href="{{REMOTE_SITE_URL.'remote-auth/github'}}" class='btn btn-block btn-social btn-lg btn-github'> {!!fa2('github-alt')!!} جيت هاب </a>
</div>

@section("media")
@stop
@section("footer")
@overwrite