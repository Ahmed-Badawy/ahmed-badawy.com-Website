@section('head_add')
	{!! get_it('icheck.css') !!}
	{!! get_it('icheck.js') !!}
	{!! get_it('jquery.form.js') !!}
@stop


@section('css_add')

@stop

<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
			@include(get_location('Projects.registration.index_includes.login'))
		</div>
		<div class="col-sm-8">
			@include(get_location('Projects.registration.index_includes.register'))
		</div>
	</div>
</div>

@include(get_location('Projects.registration.index_includes.terms-privacy'))
@yield('terms-of-use')
@yield('privacy-policy')


