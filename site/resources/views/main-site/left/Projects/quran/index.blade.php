{!! get_angular("quran") !!}

@section("css_add")

@import url(http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);

	area:hover{
		cursor: pointer;
	}
	.arabic{
		font-family: 'Droid Arabic Naskh', serif;
		font-size: 1.1em;
		line-height: 1.2em;
	}
	#wrap{
		position: relative;
		padding:0;
	}
	.bs{
		background-color:green;
		z-index:999;
		position:absolute;
		opacity:.3;
		border-radius:10px;
		
		left: 10px;
		top: 10px;
		width: 0px;
		height: 0px;

		transition: all .5s linear;
	}
	hr{
		color:white;
		background-color:white;
	}
	#inter p,#inter h4{
		cursor : pointer;
	}
@overwrite

<?php 
	$soras_inter = [
		[
			["قل -أيها الرسول- للذين كفروا بالله ورسوله: يا أيها الكافرون بالله.","Say, \"O disbelievers,"],
			["لا أعبد ما تعبدون من الأصنام والآلهة الزائفة.","I do not worship what you worship."],
			["ولا أنتم عابدون ما أعبد من إله واحد، هو الله رب العالمين المستحق وحده للعبادة.","Nor are you worshippers of what I worship."],
			["ولا أنا عابد ما عبدتم من الأصنام والآلهة الباطلة.","Nor will I be a worshipper of what you worship."],
			["ولا أنتم عابدون مستقبلا ما أعبد. وهذه الآية نزلت في أشخاص بأعيانهم من المشركين، قد علم الله أنهم لا يؤمنون أبدًا.","Nor will you be worshippers of what I worship."],
			[" لكم دينكم الذي أصررتم على اتباعه، ولي ديني الذي لا أبغي غيره.","For you is your religion, and for me is my religion.\""]
		],
		[
			["إذا تمَّ لك -أيها الرسول- النصر على كفار قريش، وتم لك فتح \"مكة\".","When the victory of Allah has come and the conquest,"],
			["ورأيت الكثير من الناس يدخلون في الإسلام جماعات جماعات.","And you see the people entering into the religion of Allah in multitudes,"],
			["إذا وقع ذلك فتهيأ للقاء ربك بالإكثار من التسبيح بحمده والإكثار من استغفاره، إنه كان توابًا على المسبحين والمستغفرين، يتوب عليهم ويرحمهم ويقبل توبتهم.","Then exalt [Him] with praise of your Lord and ask forgiveness of Him. Indeed, He is ever Accepting of repentance."],
		],
		[
			["خسرت يدا أبي لهب وشقي بإيذائه رسول الله محمدا صلى الله عليه وسلم، وقد تحقق خسران أبي لهب.","May the hands of Abu Lahab be ruined, and ruined is he."],
			["ما أغنى عنه ماله وولده، فلن يَرُدَّا عنه شيئًا من عذاب الله إذا نزل به.","His wealth will not avail him or that which he gained."],
			["سيدخل نارًا متأججة، هو وامرأته التي كانت تحمل الشوك، فتطرحه في طريق النبي صلى الله عليه وسلم؛ لأذيَّته.","He will [enter to] burn in a Fire of [blazing] flame"],
			["سيدخل نارًا متأججة، هو وامرأته التي كانت تحمل الشوك، فتطرحه في طريق النبي صلى الله عليه وسلم؛ لأذيَّته.","And his wife [as well] - the carrier of firewood."],
			["في عنقها حبل محكم الفَتْلِ مِن ليف شديد خشن، تُرْفَع به في نار جهنم، ثم تُرْمى إلى أسفلها.","Around her neck is a rope of [twisted] fiber."]
		]
	];
	$soras = [
		[
			[ [232,124,175,30] ],
			[ [60,124,177,28] ],
			[ [223,162,184,32] ],
			[ [61,161,165,32] ],
			[ [227,197,180,35] ],
			[ [63,199,166,32] ],
		],
		[
			[ [185,316,223,41] ],
			[ [50,317,139,33] , [208,358,201,33] ],
			[ [49,354,161,37] , [121,392,230,37] ],
		],
		[
			[ [254,515,158,33] ],
			[ [60,511,195,38] ],
			[ [245,550,164,36] ],
			[ [62,554,186,35] ],
			[ [128,591,214,38] ],
		]
	];
	$soras_json = json_encode($soras);
	$inter_json = json_encode($soras_inter);
	$base_url = public_dir."site-docs/quran-project-files/";
?>

<script>
	var soras = <?php echo $soras_json; ?>;
	var inter = <?php echo $inter_json; ?>;
	 
	var base_url ="<?php  
		if(Dev) echo "http://localhost/ahmed-badawy.com/site/public/site-docs/quran-project-files/";
		else echo "http://ahmed-badawy.com/site/public/site-docs/quran-project-files/";
	?>";
</script>

<h1 class='bright bright-background text-center col-sm-4 col-sm-offset-4'>Quran Program</h1>

<div ng-controller='main'>


<audio id="audio" class='col-sm-12' controls <?php if(Dev) echo "autoplay='false'" ?>>
    <p> Your browser does not support the HTML5 audio feature. </p>
</audio>

<div class='clearfix'></div><br>

<div class='col-sm-6' id='inter'>



<div role="taped_area">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#Inter" aria-controls="Inter" role="tab" data-toggle="tab" class='arabic bright'>التفسير</a></li>
    <li role="presentation"><a href="#in_english" aria-controls="in_english" role="tab" data-toggle="tab" class='arabic bright'>الترجمة للإنجليزية - In English</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="taped_area" class="tab-pane active" id="Inter">

<div class='arabic'>
<h3 class='text-center bright bright-background'>التفسير</h3>
@foreach($soras_inter as $sora_key=>$sora)
	@foreach($sora as $aya_key=>$aya)
		<p dir='rtl' id="inter_{{$sora_key.'_'.$aya_key}}" ng-class="check_style({{$sora_key}},{{$aya_key}})" ng-click='new_playlist({{$sora_key}},{{$aya_key}});'>
			{!! ($aya_key+1)." - ".$aya[0] !!}
		</p>
		@if($sora[$aya_key] == end($sora))
			<hr>
		@endif
	@endforeach
@endforeach
</div>   

    </div>
    <div role="taped_area" class="tab-pane" id="in_english">

<div class='arabic'>
<h3 class='text-center bright bright-background'>الترجمة للإنجليزية</h3>
@foreach($soras_inter as $sora_key=>$sora)
	@foreach($sora as $aya_key=>$aya)
		<p ng-class="check_style({{$sora_key}},{{$aya_key}})" ng-click='new_playlist({{$sora_key}},{{$aya_key}});'>
			{!! ($aya_key+1)." - ".$aya[1] !!}
		</p>
		@if($sora[$aya_key] == end($sora))
			<hr>
		@endif
	@endforeach
@endforeach
</div>

    </div>
  </div>
</div>








	
</div>

<div id='wrap' class='col-sm-6'>

	<img src="{{ public_dir."site-docs/quran-project-files/603.png" }}" usemap="#map1" id='img' />
	<div class='bs' id='bs1' style='@{{bs1}}'></div>
	<div class='bs' id='bs2' style='@{{bs2}}'></div>
	<h1>@{{bs1}}</h1>
</div>

<map name="map1">
	@foreach($soras as $key1=>$sora)
		@foreach($sora as $key2=>$aya)
		<?php $points_in_json = json_encode($aya); ?>
			@foreach($aya as $key3=>$point)
<area shape="rect" 
ng-click='new_playlist({{$key1}},{{$key2}});'
coords="{{$point[0]}}, {{$point[1]}}, {{$point[2]+$point[0]}} , {{$point[3]+$point[1]}}" alt="rect" title="rectangular area" />
			@endforeach
		@endforeach
	@endforeach
</map>








</div>
