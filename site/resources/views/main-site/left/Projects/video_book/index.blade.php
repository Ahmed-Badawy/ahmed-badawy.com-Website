{!! get_angular("video-book") !!}

@section('css_add')

	@import url(http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);

	.arabic{
		font-family: 'Droid Arabic Naskh', serif;
	    font-size: 1em;
	}

	#text{
		height: 500px;
		overflow: auto;
	}
	#text span{
		color:#222;
		font-size: 120%;
	    transition: all .3s linear;
	}
	#text span:hover{
		color:white;
       	cursor:pointer;
       	font-weight:bold;
	    background-color:rgba(0,0,0,.3);
	    padding:1px;
	    border-radius: 5px;
	}
	#text .currently_played{
		color:#fff;
		text-shadow: 0px 0px 6px rgba(255,255,255,0.9);
	}
	.current-text{
		font-size: 200%;
		color:#fff;
		text-shadow: 0px 0px 8px rgba(255,255,255,1);
	    background-color:rgba(0,0,0,.3);
	    padding:10px;
	    border-radius: 10px;
	}
@overwrite

<div ng-controller='main'>
		<h1 class='bright text-center bright-background'>Video Book Project</h1>
<?php 
	$lines = [
			[
				"en_txt"=> "There were once three brothers",
				"ar_txt"=> "كان يا مكان - كان هناك ثلاثة اشقاء",
				"start" => "0:3",
			],
			[
				"en_txt"=> "who were traveling along ",
				"ar_txt"=> "يسافرون طريق متعرج وحيد",
				"start" => "0:5",
			],
			[
				"en_txt"=> "a lonely, winding road at twilight. \n ",
				"ar_txt"=> "عند الغسق. \n ",
				"start" => "0:7",
			],
			[
				"en_txt"=> "In time, the brothers reached a river",
				"ar_txt"=> "حتى وصل الإخوة لنهر",
				"start" => "0:13",
			],
			[
				"en_txt"=> "too treacherous to pass.\n",
				"ar_txt"=> "يصعب عبوره.\n",
				"start" => "0:16",
			],
			[
				"en_txt"=> "But being learned in the magical arts",
				"ar_txt"=> "ولكنهم بتمرسهم فى فنون السحر",
				"start" => "0:19",
			],
			[
				"en_txt"=> "the three brothers simply",
				"ar_txt"=> "الثلاثة أشقاء ببساطة",
				"start" => "0:21",
			],
			[
				"en_txt"=> "waved their wands and made a bridge.\n",
				"ar_txt"=> "لوحو بعصاهم السحرية ليكونو جسر يسهل مروره.\n",
				"start" => "0:22",
			],
			[
				"en_txt"=> "Before they could cross, however",
				"ar_txt"=> "لكن قبل إجتيازهم الجسر",
				"start" => "0:27",
			],
			[
				"en_txt"=> "they found their path blocked",
				"ar_txt"=> "وجدوا طريقهم فى نهايته",
				"start" => "0:30",
			],
			[
				"en_txt"=> "by a hooded figure.\n",
				"ar_txt"=> "خيال مغطى الرأس.\n",
				"start" => "0:31",
			],
			[
				"en_txt"=> "It was Death, and he felt cheated.",
				"ar_txt"=> "كان ذلك الخيال هو الموت, وكان يشعر بإنه تم خداعه .",
				"start" => "0:34",
			],
			[
				"en_txt"=> "Cheated because travelers would",
				"ar_txt"=> "لأن",
				"start" => "0:38",
			],
			[
				"en_txt"=> "normally drown in the river.\n",
				"ar_txt"=> " عادتا يغرق المسافرين فى النهر.\n",
				"start" => "0:39",
			],
			[
				"en_txt"=> "But Death was cunning.\n",
				"ar_txt"=> "لكن الموت كان مخادعا.\n",
				"start" => "0:41",
			],
			[
				"en_txt"=> "He pretended to congratulate",
				"ar_txt"=> "لقد تظاهر بتهنأة",
				"start" => "0:44",
			],
			[
				"en_txt"=> "the three brothers on their magic",
				"ar_txt"=> "الثلاثة أشقاء على سحرهم",
				"start" => "0:45",
			],
			[
				"en_txt"=> "and said that each had earned a prize for",
				"ar_txt"=> "وقال أن كل منهم ربح جائزة",
				"start" => "0:47",
			],
			[
				"en_txt"=> "having been clever enough to evade him.\n",
				"ar_txt"=> "لكونه ماهر كفاية لتفاديه الموت.\n",
				"start" => "0:49",
			],
			[
				"en_txt"=> "The oldest asked for a wand",
				"ar_txt"=> "الأخ الأكبر طلب إمتلك عصاه سحرية ",
				"start" => "0:53",
			],
			[
				"en_txt"=> "more powerful than any in existence.",
				"ar_txt"=> "أقوى من أى عصاه سحرية إخرى فى الوجود.",
				"start" => "0:55",
			],
			[
				"en_txt"=> "So Death fashioned him one",
				"ar_txt"=> "لذا صنع الموت له عصاه",
				"start" => "0:58",
			],
			[
				"en_txt"=> "from an elder tree that stood nearby.\n",
				"ar_txt"=> "من شجرة قديمة قريبة.\n",
				"start" => "0:59",
			],
			[
				"en_txt"=> "The second brother decided he wanted",
				"ar_txt"=> "الأخ الثانى أراد",
				"start" => "1:4",
			],
			[
				"en_txt"=> "to humiliate Death even further",
				"ar_txt"=> "إذلال الموت أكثر و أكثر",
				"start" => "1:6",
			],
			[
				"en_txt"=> "and asked for the power",
				"ar_txt"=> "فطلب القدرة على ",
				"start" => "1:8",
			],
			[
				"en_txt"=> "to recall loved ones from the grave.\n",
				"ar_txt"=> "إحياء الموتى من القبور.\n",
				"start" => "1:9",
			],
			[
				"en_txt"=> "So Death plucked a stone from the river",
				"ar_txt"=> "لذا إقتلع له الموت حجرا من النهر",
				"start" => "1:13",
			],
			[
				"en_txt"=> "and offered it to him.\n",
				"ar_txt"=> "ثم أعطاه له.\n",
				"start" => "1:15",
			],
			[
				"en_txt"=> "Finally,",
				"ar_txt"=> "و أخيرا,",
				"start" => "1:18",
			],
			[
				"en_txt"=> "Death turned to the third brother.",
				"ar_txt"=> "نظر الموت للأخ الثالث.",
				"start" => "1:19",
			],
			[
				"en_txt"=> "A humble man",
				"ar_txt"=> "فكان رجلا متواضعا! ",
				"start" => "1:23",
			],
			[
				"en_txt"=> "he asked for something that would",
				"ar_txt"=> "وطلب منه شىء غريب! \n",
				"start" => "1:25",
			],
			[
				"en_txt"=> "allow him to go forth from that place",
				"ar_txt"=> "طلب منه إمكنية مغادرة المكان",
				"start" => "1:27",
			],
			[
				"en_txt"=> "without being followed by Death.",
				"ar_txt"=> "بدون ان يتبعه الموت.",
				"start" => "1:29",
			],
			[
				"en_txt"=> "And so it was that Death reluctantly",
				"ar_txt"=> "لذا قام الموت على مضض و مضيق ",
				"start" => "1:33",
			],
			[
				"en_txt"=> "handed over his own Cloak of Invisibility.\n",
				"ar_txt"=> "و قطع له جزء من عبائته الإختفاء الخاصه به.\n",
				"start" => "1:35",
			],
			[
				"en_txt"=> "The first brother traveled",
				"ar_txt"=> "سافر الأخ الأول",
				"start" => "1:34",
			],
			[
				"en_txt"=> "to a distant village",
				"ar_txt"=> "لقرية بعيدة",
				"start" => "1:44",
			],
			[
				"en_txt"=> "where, with the Elder Wand in hand",
				"ar_txt"=> "و بالعصاه السحرية فى يده",
				"start" => "1:46",
			],
			[
				"en_txt"=> "he killed a wizard",
				"ar_txt"=> "أمكنه قتل ساحر آخر",
				"start" => "1:48",
			],
			[
				"en_txt"=> "with whom he had once quarreled.\n",
				"ar_txt"=> "كان على خلاف معه.\n",
				"start" => "1:50",
			],
			[
				"en_txt"=> "Drunk with the power",
				"ar_txt"=> "مخمورا بالقوة و السلطة",
				"start" => "1:54",
			],
			[
				"en_txt"=> "that the Elder Wand had given him",
				"ar_txt"=> "التى أعطتها العصاه السحرية له",
				"start" => "1:55",
			],
			[
				"en_txt"=> "he bragged of his invincibility.\n",
				"ar_txt"=> "ظل يتبجح بقوة و إستحالة هزيمته.\n",
				"start" => "1:58",
			],
			[
				"en_txt"=> "But that night,",
				"ar_txt"=> "حتى جائت ليلة,",
				"start" => "2:4",
			],
			[
				"en_txt"=> "another wizard stole the wand",
				"ar_txt"=> "و قام ساحر آخر بسرقة العصاه منه",
				"start" => "2:6",
			],
			[
				"en_txt"=> "and slit the brother's throat",
				"ar_txt"=> "ثم ذبح عنقه",
				"start" => "2:7",
			],
			[
				"en_txt"=> "for good measure.\n",
				"ar_txt"=> "لزيادة الإطمئنان.\n",
				"start" => "2:9",
			],
			[
				"en_txt"=> "And so Death took the first brother",
				"ar_txt"=> "فتمكن ",
				"start" => "2:11",
			],
			[
				"en_txt"=> "for his own.\n",
				"ar_txt"=> "الموت من أخذ الأخ الأول.\n",
				"start" => "2:12",
			],
			[
				"en_txt"=> "The second brother journeyed",
				"ar_txt"=> "الأخ الثانى سافر",
				"start" => "2:15",
			],
			[
				"en_txt"=> "to his home",
				"ar_txt"=> "إلى بيته",
				"start" => "2:16",
			],
			[
				"en_txt"=> "where he took the stone",
				"ar_txt"=> "حيث أخذ الحجر",
				"start" => "2:17",
			],
			[
				"en_txt"=> "and turned it thrice in hand.\n",
				"ar_txt"=> "و قلبه فى يده ثلاثة مرات.\n",
				"start" => "2:18",
			],
			[
				"en_txt"=> "To his delight, the girl he'd once hoped",
				"ar_txt"=> "و يال فرحته عندما ظهرت له الفتاه التى تمنى",
				"start" => "2:21",
			],
			[
				"en_txt"=> "to marry before her untimely death",
				"ar_txt"=> "الزواج منها قبل موتها المفاجئ. ",
				"start" => "2:22",
			],
			[
				"en_txt"=> "appeared before him.\n",
				"ar_txt"=> "ظهرت أما عينيه.\n",
				"start" => "2:25",
			],
			[
				"en_txt"=> "Yet, soon she turned sad and cold",
				"ar_txt"=> "لكنه سرعان ما أنقلبت للحزن و البرودة",
				"start" => "2:28",
			],
			[
				"en_txt"=> "for she did not belong in the mortal world.\n",
				"ar_txt"=> "لأنها لم تكن تنتمى لعالم الأحياء.\n",
				"start" => "2:30",
			],
			[
				"en_txt"=> "Driven mad with hopeless longing",
				"ar_txt"=> "سيق الأخ للجنون و تمكن منه التعاسة و اليأس لشدة فقدانه لحبيبته. \n",
				"start" => "2:33",
			],
			[
				"en_txt"=> "the second brother killed himself",
				"ar_txt"=> "فقام بالإنتحار",
				"start" => "2:35",
			],
			[
				"en_txt"=> "so as to join her.\n",
				"ar_txt"=> "ليجتمع بحبيبته مرة إخرى.\n",
				"start" => "2:37",
			],
			[
				"en_txt"=> "And so Death took the second brother.\n",
				"ar_txt"=> "وهكذا تمكن الموت من الحصول على الأخر الثانى.\n",
				"start" => "2:40",
			],
			[
				"en_txt"=> "As for the third brother",
				"ar_txt"=> "لكن بالنسبة للأخ الثالث",
				"start" => "2:43",
			],
			[
				"en_txt"=> "Death searched for many years",
				"ar_txt"=> "ظل الموت لسنوات عديده يبحث عنه",
				"start" => "2:45",
			],
			[
				"en_txt"=> "but was never able to find him.\n",
				"ar_txt"=> "لكن لم يتمكن أبدا من إيجاده.\n",
				"start" => "2:46",
			],
			[
				"en_txt"=> "Only when he attained a great age",
				"ar_txt"=> "لم يكن حتى ",
				"start" => "2:49",
			],
			[
				"en_txt"=> "did the youngest brother",
				"ar_txt"=> "وصل الاخ لعمر كبير",
				"start" => "2:50",
			],
			[
				"en_txt"=> "shed the Cloak of Invisibility",
				"ar_txt"=> "خلع عبائة الإختفاء",
				"start" => "2:52",
			],
			[
				"en_txt"=> "and give it to his son.\n",
				"ar_txt"=> "و أعطاها لإبنه.\n",
				"start" => "2:54",
			],
			[
				"en_txt"=> "He then greeted Death as an old friend",
				"ar_txt"=> "ومن ثم رحب بالموت كصديق قديم",
				"start" => "2:58",
			],
			[
				"en_txt"=> "and went with him gladly",
				"ar_txt"=> "و ذهب معه بسعادة",
				"start" => "3:0",
			],
			[
				"en_txt"=> "departing this life as equals.\n",
				"ar_txt"=> "ليفارق الدنيا مع الموت كأنهم سواسية.\n",
				"start" => "3:2",
			],
	];

	function calc_subtitle_time($time){
		$arr = explode(":",$time);
		$time_in_seconds = $arr[0]*60 + $arr[1];
		return $time_in_seconds;
	};


?>



<div class='col-xs-12 col-sm-6'>
<div align="center" class="embed-responsive embed-responsive-16by9">
    <video id='vid' controls preload='none' loop='true'
    	poster='{{ public_dir."site-docs/video-book-files/video-book.jpg" }}'>
		<source src='{{ public_dir."site-docs/video-book-files/TheStory.mp4" }}' type="video/mp4" />
    </video> 
</div>
</div>






<div class='col-xs-12 col-sm-6'>
	<a class="btn btn-default col-sm-6" ng-click='lang="en"'> English </a> 
	<a class="btn btn-default col-sm-6 arabic" ng-click='lang="ar"'> العربية </a> 
</div>



<div class='col-xs-12 col-sm-6' id='text'>

<p>

	<article ng-show='lang=="en"' class='col-xs-12 widthfix'>
@foreach($lines as $key=>$line) 
	<?php 
		$start = calc_subtitle_time($line['start']); 
		$end = (isset($lines[$key+1]['start'])) ?  calc_subtitle_time($lines[$key+1]['start']) : $start+3;  
	?>
		<span ng-click="seek( {{$start}} )" ng-class="get_class( {{$start}} , {{$end}} , {{$key}} )"> 
			{!! nl2br($line['en_txt']) !!} 
		</span>
@endforeach
	</article>


	<article ng-show='lang=="ar"' class='col-xs-12 widthfix arabic' dir='rtl'>
@foreach($lines as $key=>$line) 
	<?php 
		$start = calc_subtitle_time($line['start']); 
		$end = (isset($lines[$key+1]['start'])) ?  calc_subtitle_time($lines[$key+1]['start']) : $start+3;  
	?>
		<span ng-click="seek( {{$start}} )" ng-class="get_class( {{$start}} , {{$end}} ,'')"> {!! nl2br($line['ar_txt']); !!} </span>
@endforeach
	</article>

</p>
</div>


<div class='col-xs-12 col-sm-6'>
	@foreach($lines as $key=>$line)
<?php 
	$start = calc_subtitle_time($line['start']); 
	$end = (isset($lines[$key+1]['start'])) ?  calc_subtitle_time($lines[$key+1]['start']) : $start+3;  
?>
		<h1 ng-show='current_time >= {{$start}} && current_time < {{$end}}' class='current-text'> {!! $line['en_txt'] !!} </h1>	
	@endforeach
</div>


<div class='col-xs-12 col-sm-6 arabic'>
	@foreach($lines as $key=>$line)
<?php 
	$start = calc_subtitle_time($line['start']); 
	$end = (isset($lines[$key+1]['start'])) ?  calc_subtitle_time($lines[$key+1]['start']) : $start+3;  
?>
		<h1 dir='rtl' ng-show='current_time >= {{$start}} && current_time < {{$end}}' class='current-text'> {!! $line['ar_txt'] !!} </h1>	
	@endforeach
</div>




</div>
