@section("css_section")
  {!! get_it('bootstrap.css') !!}
  {!! get_it('custom_css/countDown/needs/layout.css') !!}
  {!! get_it('custom_css/countDown/needs/countdown.css') !!}
  {!! get_it('font-awesome.css') !!}
  {!! get_it('custom/css/custom.css') !!}
@stop
@section("breadcrumbs")
@overwrite
@section("media")
@overwrite

@section("css_add")
  body{
    background-image: url({{public_dir.'site-files/custom_pages/countDown/needs/covers/cover_1.jpg'}});
    background-size: 100% 200%;
    background-repeat: no-repeat;
  }
@stop


@section("js_section")
    {!! get_it('jquery') !!}
    {!! get_it('jquery.mask.js') !!}
    {!! get_it('bootstrap.js') !!}
@stop






		<div class="special-page container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="center-box">
						<h1 style='font-size:300%'>CountDown Generator</h1>

<div id="countdown">
	<div class="countdown-widget hasCountdown" id="countdown-widget" data-time="">
		<span>		
			<span class="countdown_section">
				<span class="countdown_amount" id='days'>00 &nbsp; </span><br>Days
			</span>
			<span class="countdown_section">
				<span class="countdown_amount" id="hours">00:</span><br>Hours
			</span>
			<span class="countdown_section">
				<span class="countdown_amount" id="minutes">00:</span><br>Minutes
			</span>
			<span class="countdown_section">
				<span class="countdown_amount" id="seconds">00</span><br>Seconds
			</span>
		</span>
	</div>
</div>

<h2>Untill The Date: <small style="font-size:85%"> Your Event Date Goes Here</small></h2>

						<hr />
<div class="row">
	<div class="col-md-12 text-left">
		<h4>Welcome!</h4>
    <p>This is a program that Lets you choose a date for an event in your life then creates a countDown to this date.
    also it enable you to share this Event-CountDown with your friends on social networks like facebook.
    </p>
	</div>
  <div class="col-md-12 text-right">
    <h3>!أهلا</h3><h4>هذا برنامج يسمح لك بإختيار تاريخ و موعد لحادث ما فى حياتك ثم يسمح لك بعمل صفحة عد تنازلى لهاذا الموعد. و يمكنك مشاركة صفحة العد التنازلى لأصدقائك على مختلف
    الشبكات الإجتماعية مثل الفيسبوك
    </h4>
  </div>
</div>

<hr>

<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".create">Create Your Own CountDown</button>
<a class="btn btn-primary btn-lg" href="{{url('projects/countdown/list')}}">View Countdowns List</a>
<!-- <a class="btn btn-success btn-lg" href="{{route('countdown/create')}}">Create Your Own CountDown</a> -->
<a class="btn btn-danger btn-lg" href="{{route('cv')}}">Developer ? </a>

<div class="clearfix"></div><br>

<div class="fb-like pull-left" data-href="{{base_url}}countdown" data-width="400" data-layout="" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="g-plusone pull-right" data-href="{{base_url}}countdown" data-size="tall"></div>

<div class="clearfix"></div>

					</div>
				</div>
			</div>

		</div>




@include(get_location("Projects.countDown.create_modal"))
@include(get_location("Projects.countDown.list"))


