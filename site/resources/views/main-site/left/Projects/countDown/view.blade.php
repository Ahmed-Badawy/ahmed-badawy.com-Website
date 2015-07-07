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
						<h2>{{$evt_info->title}}</h2>

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

<h2>Untill The Date: <small style="font-size:85%">{{$time->format('jS F,Y - h:i A')}}</small></h2>

						<hr />
<div class="row">
	<div class="col-md-12 text-center">
		<h2>{{$evt_info->title}}</h2>
		<p>{{$evt_info->text}}</p>
	</div>
</div>

<hr>

<a class="btn btn-success btn-lg" href="{{url('projects/countdown')}}">Create Your Own CountDown</a>
<a class="btn btn-primary btn-lg" href="{{url('projects/countdown/list')}}">View Countdowns List</a>
<a class="btn btn-danger btn-lg" href="{{route('cv')}}">Developer ? </a>

<div class="clearfix"></div><br>

<div class="fb-like pull-left" data-href="{{base_url}}countdown" data-width="400" data-layout="" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="g-plusone pull-right" data-href="{{base_url}}countdown" data-size="tall"></div>

<div class="clearfix"></div>

					</div>
				</div>
			</div>

		</div>






<script>

function $(id_name){
	return document.getElementById(id_name);
}
function timeDiff(time_stamp1,time_stamp2){
// var now = new Date(first_time[0],first_time[1],first_time[2],0,0,0,0).getTime();
// if(time_stamp1 == "now") var now = new Date().getTime();
// var after = new Date(second_time[0],second_time[1],second_time[2],second_time[3],second_time[4],0,0).getTime();
// var after = new Date(time_stamp2);
	var miliSecs = time_stamp2-time_stamp1;
	var secs = Math.floor(miliSecs/1000);
	var minu = Math.floor(secs/60);
	var hour = Math.floor(minu/60);
	var day = Math.floor(hour/24);
	var month = Math.floor(day/30);
	var year = Math.floor(day/364);
	var res = {
		year:year,
		month:add_zero(month%12),
		days_not_month:add_zero(day),
		day:add_zero(day%30),
		hour:add_zero(hour%24),
		minu:add_zero(minu%60),
		secs:add_zero(secs%60),
	};
	return res;
}
function add_zero(num){
	if(num<10 && num>-1) return "0"+num;
	return num;
}

var timer = setInterval(
	function(){
		var target_date = new Date( {{$time->format('Y')}} , {{$time->format('m')}}-1 , {{$time->format('d')}}
						, {{$time->format('H')}} , {{$time->format('i')}} , 0 , 0 );
		var res = timeDiff( new Date().getTime() , target_date.getTime() );
		// console.log(res);
		var output = res.year+"/"+res.month+"/"+res.day+" --- "+res.hour+" : "+res.minu+" : "+res.secs;
		console.log(output);
		$("days").innerHTML = res.days_not_month+" &nbsp; ";
		$("hours").innerHTML = res.hour+":";
		$("minutes").innerHTML = res.minu+":";
		$("seconds").innerHTML = res.secs;
		if(res.secs<1 && res.minu<1 && res.hour<1 && res.days_not_month<1){
			clearInterval(timer);
			console.log("countDown Done");
			$("countdown").innerHTML = "<h2>CountDown Finished.</h2>";
		}
		time_now.innerHTML = "The Time Now is: &nbsp;"+get_time_format(new Date());
	}
,1000)


function get_time_format(time){
	var dd = time.getDate();
	var mm = time.getMonth()+1; //January is 0!
	var yyyy = time.getFullYear();
	var hh = time.getHours();
	var ii = time.getMinutes();
	var ss = time.getSeconds();

	if(dd<10) dd='0'+dd;
	if(mm<10) mm='0'+mm;
	time = dd+'-'+mm+'-'+yyyy+" --- "+hh+":"+ii+":"+ss;
	return time;
}
</script>


