@section("modals")
@overwrite
@section('breadcrumbs')
@overwrite
@section('footer')
@overwrite
@section('media')
@overwrite



@section('css_add')

@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);



  #page_container {
      font-family: 'Droid Arabic Kufi', serif;
      font-size:90%;
      margin-top:3%;
      margin-bottom:800px;
  }


  h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{ 
      font-family: 'Droid Arabic Kufi', serif;
      font-size: 2em;
  }

  @media screen and (min-width: 768px) {
    #masthead h1 {
      font-size: 50px;
    }
  }

  .navbar-bright {
    background-color:#111155;
      color:#fff;
  }

  .affix-top,.affix{
    position: static;
  }

  @media (min-width: 979px) {
    #sidebar.affix-top {
      position: static;
      margin-top:30px;
      width:228px;
    }
    
    #sidebar.affix {
      position: fixed;
      top:70px;
      width:228px;
    }
  }

  #sidebar li.active {
    border:0 #eee solid;
    border-right-width:4px;
  }

  #main-page p,#main-page li{
    font-size: 1.3em;
  }


  .gray{
    color:#5a5a5a;
  }
  p,ul li{
    color:#111;
  }
  .panel-body p,.panel-body li,.list-group li{
    color:#BABABA;
    font-family: "tahoma","arial";
  }

  #previous-work li{
    color:#ccc;
    background-color:rgba(0,0,0,.5);
    padding:2px;
    border:2px solid #333;
    border-radius:10px;
    margin-bottom:10px;
    transition:all .3s ease-out; 
  }
  #previous-work li:hover{
    color:#fff;
    background-color:rgba(0,0,0,.8);
    border:2px solid white;
    cursor:pointer;
  }

  #previous-work a{
    text-decoration:none;
    color:white;
  }

  .inner-list a{
  	color:#fff;
  }

  img{
    margin-bottom:15px;
  }

  .container h3,#sidebar li a{
    padding:7px;
    border-radius: 5px;
    background-color:rgba(0,0,0,.3);
    color:#fff;
    text-shadow: 0px 0px 6px rgba(255,255,255,0.9);
  }

  hr{
    color:#fff;
    text-shadow: 0px 0px 6px rgba(255,255,255,0.9);
  }

  #sidebar .inner-list li{
    width:80%;
    margin:0 auto;
    margin-top: 2px;
    margin-bottom: 2px;
  }

  #ContactModalButton{
    display:none;
  }

  #sidebar li {
    font-size:110%;
  }






  .accordion_opened{
    border:2px solid white;
  }
  .custom_accordion{
    display:none;
    border-left:2px solid white;
    border-bottom:2px solid white;
    border-right:2px solid white;
    border-radius:0 0 20px 20px;
    padding:10px;
  }
.highlight{
    color:#111;
    font-weight:bold;
    background-color:rgba(255,255,255,.2);
    border-radius:5px;
    padding:0 5px 0 5px;
}
.english{
    font-family: "Open Sans","tahoma";
}


@stop



@include(get_location("pages.cv-inc.cv_header"))




<!-- Begin Body -->
<div class="container">
	<div class="row" id='main-page'>

      		<div class="col-md-12">




    @include(get_location("pages.cv-inc.cv_brief"))
    @include(get_location("pages.cv-inc.cv_summery"))
    @include(get_location("pages.cv-inc.cv_personal_info"))
    @include(get_location("pages.cv-inc.cv_web_development_skills"))
                @include(get_location("pages.cv-inc.cv_programing"))
                @include(get_location("pages.cv-inc.cv_other_tech"))



<script type="text/javascript">
    var selected_id = "";
      $(".acc_header").on("click",function(){
          id_name = $(this)[0].id;
          acc_name = id_name+"_accordion";

          if(selected_id == id_name){
              selected_id = "";
              $(".accordion_opened").removeClass('accordion_opened');
              $('.custom_accordion').slideUp();
          }else {
              selected_id = id_name;
              $(".accordion_opened").removeClass('accordion_opened');
              $('.custom_accordion').slideUp();
              $("#" + id_name).toggleClass("accordion_opened");
              $("#" + acc_name).slideToggle();
          }
      });
</script>




                <hr>
                <hr>
                <hr>
                <h3 id='tec4' dir='rtl'>مهارات تقنية إخرى</h3>
	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' href='#tec4'>Other Technical Skills</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
	<ul class='col-sm-12'>
		<li>Very Good understanding of <span class="highlight">Networks</span> & how to manage them.</li>
    <li>Studied & passed the exams of Cisco <span class="highlight">CCNA</span> Certification</li>
    <li>Studied & passed the exams of Cisco <span class="highlight">CCNP</span> Certification <small> (didn't take the TSHOOT EXAM yet) </small></li>

    <li>Great Background in: </li>
        <ul>
          <li><span class='highlight'>Adobe Photoshop</span> image manipulation program</li>
          <li><span class='highlight'>Adobe Illustrator</span> Vector manipulation program</li>
          <li><span class='highlight'>Adobe Dreamweaver</span> Website Designer</li>
          <li><span class='highlight'>Office Word</span> Website Designer</li>
          <li><span class='highlight'>Office Excel</span> for SpreadSheets</li>
          <li><span class='highlight'>Office PowerPoint</span> SlideShow Creator</li>
          <li><span class='highlight'>Office Access</span> Database Interface</li>
        </ul>

  </ul>

	</div>
  </div>

<div class="clearfix"></div>



                <h3 id='tec5' dir='rtl'>نقاط القوة - (جيد جدا فى)</h3>
	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec5' href='#tec5'>Very Good At</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
		<ul class='col-sm-6'>
			<li>PHP programing in general</li>
			<li><span class='highlight'>Laravel Framework</span> MVC website Structure for faster & Efficient development</li>
			<li>Providing Online APIs to other developers (depend on JSON to transfer data)</li>
		</ul>
		<ul class='col-sm-6'>
			<li>javascript Client-Side applications</li>
			<li>Google's <span class='highlight'>Angularjs Framework</span> For MV* website Structure</li>
			<li>Creating Single Page Applications that works on multiple platforms smoothly</li>
		</ul>
	</div></div>

<div class="clearfix"></div>


                <h3 id='tec6' dir='rtl'>اللغات البرمجية</h3>
	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' href='#tec6'>Programing Languages Used</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
		<ul class='col-sm-6'>
			<li><span class='highlight'>PHP</span> (very good)</li>
			<li><span class='highlight'>HTML</span> (Markup language)</li>
			<li><span class='highlight'>CSS</span> (Layout language)</li>
		</ul>
		<ul class='col-sm-6'>
			<li><span class='highlight'>JavaScript</span></li>
			<li><span class='highlight'>JAVA</span> (still learning)</li>
			<li><span class='highlight'>C#</span> (still learning)</li>
		</ul>
	</div></div>

  <div class="clearfix"></div>


                <h3 id='tec12' dir='rtl'>مهارات عمل عامة</h3>
  <div class='panel panel-default'>
  <a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' href='#tec12'>General Work Skills</a>
  <div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
  <ul class='col-sm-12 english'> 
    <li>Love to Read Technology-related Books</li>
    <li>Very Good Knowledge of General Computer Technologies</li>
    <li>A keen approach to learning.</li>
    <li>Ability to learn new technologies (fast)</li>
    <li>A keen approach to learning.</li>
    <li>Good Typing Skills</li>
    <li>Strong physics and math background</li>
    <li>Time Management Skills</li>
  </ul>
  </div>
  </div>


<div class="clearfix"></div>

	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec7' href='#tec7'>Tools I Have Used</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
		<ul class='col-sm-6'>
			<li>Sublime Text IDE</li>
			<li>NetBeans IDE</li>
			<li>Emmet For Shortcuts in HTML & CSS</li>
		</ul>
		<ul class='col-sm-6'>
			<li>Twitter BootStrap for Fast Designs</li>
			<li>PHP Composer</li>
			<li>PHP Packagist</li>
		</ul> 
	</div>
	</div>

<div class="row"></div>

	      		
<?php 
    $array = array(
              "php" => "http://www.php.net/",
              "laravel" => "http://laravel.com/",
              "codeigniter" => "http://ellislab.com/codeigniter",
              "zend" => "http://framework.zend.com/",
              "wordpress" => "http://wordpress.org/",
              "html5" => "http://www.w3schools.com/html/html5_intro.asp",
              "css3" => "http://www.w3schools.com/css/DEFAULT.asp",
              "javascript" => "http://www.w3schools.com/js/DEFAULT.asp",
              "jquery" => "http://jquery.com/",
              "AngularJS" => "https://angularjs.org/",
              "json" => "http://www.json.org/",
              "less" => "http://lesscss.org/",
              "sass" => "http://sass-lang.com/",
              "java" => "http://www.java.com/",
              "smarty" => "http://www.smarty.net/",
              "regex" => "http://www.regular-expressions.info/",
              "composer" => "https://getcomposer.org",
              "tb" => "http://getbootstrap.com/",
              "emmet" => "http://emmet.io/",
              "photoshop" => "www.photoshop.com/",
              "excel" => "#",
              "word" => "#",
              "ccna" => "#",
              "ccnp" => "#",
      );
 ?>

<div class="well">
<div class="row" id='tec8'>
<?php 
$i = 0;
    foreach($array as $img => $site){
echo "<div class='col-xs-6 col-sm-3 col-md-2'><a href='$site'><img src='".th("cv/$img.jpg")."' class='img-responsive img-thumbnail img-force'></a></div>";
// if($i==5 || $i==11 || $i==17) echo "</div><br><div class='row'>";
$i++;
    }
?>
</div>
</div>

              
              	<hr>


                <h3 id="sec11" dir='rtl'>أتعلم حاليا</h3>
<ul class='english'>
  <!-- <li>Java GUI Programing</li> -->
  <li>Android Programing</li>
  <li>More about SEO</li>
  <li>More about Website Analysis</li>
  <li>More about C# & ASP.NET</li>
</ul>

<hr>



              	<h3 id="sec3" dir='rtl'>الدورات التدريبية</h3>
<ul class='english'>
	<li>PhotoShop : Hi-Q - Tanta</li>
  <li>Java : New Horizon - Mansoura</li>
	<li>Android Development : New Horizon - Mansoura</li>
	<li>ICDL : Axon</li>
	<li>English : Pioneer - Tanta</li>
</ul>


<hr>
          	<h3 id="sec8" dir='rtl'>الشهادات</h3>
<ul class='english'>
    <li>PhotoShop Course Completion from HI-Q Academy</li>
    <li>Java Course Completion from New Horizon</li>
    <li>English Course Completion from Poinear</li>
<!--     <li>Cisco ICND1 Exam 640-822</li>
    <li>Cisco ICND2 Exam 640-816</li> -->
    <li>Cisco CCNP Exam 642-902 ROUTE</li>
    <li>Cisco CCNP Exam 642-813 SWITCH</li>
    <!-- <li>Cisco CCNP Exam 642-832 TSHOOT</li> -->
    <li>Acquired CCNA Certification</li>
    <!-- <li>Acquired CCNP Certification</li> -->
</ul>   


<hr id="prev-work">

<?php if(!$fake){ ?>

        <br/>
          	<h3 dir='rtl'>أعمال سابقة</h3>
          <div id="previous-work">
<ul class='text-center list-unstyled'>
  <li><a href="{{ url('selling-manager') }}" target='_blank'>أتممت الكثير من البرامج الخدمية معظمها برامج مطاعم و محلات بيع وحدات مثل الموبيلات</a></li>

  <li><a href="http://ahmed-badawy.com" target='_blank' class='english'>Ahmed-Badawy.com</a></li>
  <li><a href="http://spidro.com" target='_blank' class='english'>Spidro.com</a></li>
  <li><a href="{!! url('blog') !!}" target='_blank' class='english'>Personal wordpress blog</a></li>

  <li><a href="https://www.egyptcodebase.com" target='_blank'>موقع بيانات كود مصر</a></li>
  <li><a href="http://www.elmasriadecoration.com" target='_blank'>المصرية للديكورات</a></li>
  <li><a href="http://alnourfemtolasercenter.com" target='_blank'>مركز النور لعمليات للفيمتو ليزيك و الفيمتو سميل</a></li>
  <li><a href="http://guryildiz.com.tr/ar/" target='_blank'>شركة ملابس غوريلدز</a></li>
  <li><a href="http://www.gfi-am.ch/ar" target='_blank'>شركة جريس للإستثمارات المالية</a></li>
  <li><a href="http://www.al-shia.org" target='_blank'>موقع مركز آل البيت العالمى للمعلومات</a></li>
  <li><a href="http://www.inaba-petfood.co.jp/ar/" target='_blank'>Inaba Petfood</a></li>
  <li><a href="http://fatn.net/" target='_blank'>فاتن مول</a></li>
  <li><a href="http://www.trade-ksa.com" target='_blank'>سوق شيهانة الخير</a></li>
  <li><a href="http://matgar.weebly.com/" target='_blank'>متجر نورا</a></li>
  <li><a href="http://ar.esis.com.tr/" target='_blank'>ESIS Power</a></li>
  <li><a href="http://www.colub.be/" target='_blank'>Colub</a></li>
</ul>

<ul class='list-unstyled english text-center' style='border:2px solid white;padding:7px;border-radius:10px'>
    <h4 class='arabic text-center'>أفكارى و مشاريعى الخاصة</h4>
    @foreach(\sr::projects() as $project)
<li class='col-sm-4'><a href="{{$project['link']}}" title='{{$project["page_desc"]}}' dir='rtl' target='_blank'>{{$project['page_name']}}</a></li>
    @endforeach
    <div class="clearfix"></div>
</ul>


<div class="clearfix"></div>
<ul>

  <li><a href="{!! route('projects') !!}" target='_blank' class='arabic'>العديد من الأفكار و المشاريع نفذتها بشكل مبدئى فى أوقات الفراغ</a></li>
  <li><a href="{!! route('games') !!}" target='_blank' class='arabic'>ألعاب بسيطة نفذتها</a></li>
  <li><a href="{!! route('apis') !!}" target='_blank' class='arabic'>خدمات للمواقع الخارجية</a></li>
	<li><a href="{!! url('blog') !!}" target='_blank' class='arabic'>البلوج التقنية الخاصة بى</a></li>
	<!-- 	@foreach(sr::projects() as $project)
		<li class='col-sm-4'><a href='{!! $project["link"] !!}' target='_blank'><small class='arabic' dir='rtl'>{!! $project['page_name'] !!}</small></a></li>
		@endforeach -->
    <div class="clearfix"></div>
	</ul>
</ul> 


</div>






<div class="clearfix"></div>  
<hr>

<!--             <h3 id="sec10" dir='rtl'>Work History</h3>
<p> Have Not Worked As a Professional yet.</p>
<hr>            
 -->

<?php } ?>


<?php if(!$fake){ ?>
              	<h3 id="sec1" dir='rtl'>التعليم</h3>
<p dir='rtl'>
<!-- 2010   =>  2014   :  -->
درجة الباكليريوس فى علوم الحاسبات المعلومات بتقدير عام جيد جدا و <span class='bright'>ترتيب السادس على الدفعة</span>
<!-- - Misr Academy for Engineering and Technology in Mansoura city. -->
<!-- <br> -->
<!-- معادلة موثقة لبكليريوس الحاسبات و المعلومات -->
</p>
<!-- <br> -->

<!--                	<div class="row">
                  <div class="col-md-6">
	      		<img src="<?php echo imgs_dir."cv/met.jpg" ?>" class="img-responsive img-thumbnail">
                  </div>
                  <div class="col-md-6">
                      <div class="panel panel-default">
                      <div class="panel-heading text-center">
                        <h3>M.E.T</h3>
                        <h5>Misr Engineering & Technology</h5>
                      </div>
                      <div class="panel-body">
                      Website : <a href="http://www.metmansoura.com/" class="btn btn-md btn-primary pull-right btn-block">metmansoura.com</a>
                      <br><br><br>
                      Engineering Website : <a href="http://www.engmet.org/" class="btn btn-md btn-primary pull-right btn-block">engmet.org</a>
                      <br><br><br>
                      FaceBook Page : <a href="https://www.facebook.com/M.E.T.Mansoura/" class="btn btn-md btn-primary pull-right btn-block">M.E.T.Mansoura</a>
                      </div>
                    </div>
                  </div>  
              	</div>  -->

 <hr>

<?php } ?>


              	<h3 id="sec6" dir='rtl'>اللغات</h3>
<ul>
	 <li>العربى: Native</li>
	 <li>الإنجليزية : Excelent</li>
</ul>   

              	<hr>

<div class="row">
	<div class='col-sm-6'>
	<h3 id='sec5' dir='rtl'>Contact Me</h3>
<ul class='list-group '>
      <li class="col-sm-12 list-group-item">{!! fa2("at") !!} {{social('my_email_1')}}</li>
      <li class="col-sm-12 list-group-item">{!! fa2("mobile") !!} {{social('my_phone_1')}}</li>
      <li class="col-sm-12 list-group-item">{!! fa2("desktop") !!} <a href='{!! url("/") !!}'>www.Ahmed-Badawy.com</a></li>
</ul>
	</div>

<div class="col-sm-6">
	<h3 id='sec7' dir='rtl'>أرسل لى رسالة</h3>
	<form action="{!! url('contact') !!}" method='post'>
          <div class="form-group">
<input name='email' type="email" class='form-control' style='width:100%' placeholder="Your Email" required>
<input name='subject' type="text" class='form-control' style='width:100%' placeholder="Message Title" required>
<textarea name='msg' class='form-control' style='width:100%' rows='3' placeholder='Message' required></textarea>
<br>
<input type="submit" value="Send" class='btn btn-primary btn-md btn-block'>
          </div>
	</form>
</div>
</div>





      		</div>



<br style="clear:both">

  	</div>
</div>







       
<!-- JavaScript jQuery code from Bootply.com editor -->
<script type='text/javascript'>
$(document).ready(function() {

    $("#main-page a").not($('.deny')).not($('ul a')).attr('target','_blank');     

    $('#sidebar').affix({
        offset: {
          top: 235
        }
    });

var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;

$body.scrollspy({
  target: '#leftCol',
  offset: navHeight
});

      /* smooth scrolling sections */
      $('a[href*=#]:not([href=#])').click(function(){
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top - 50
              }, 1000);
              return false;
            }
          }
      });
        
});
</script>
   




@section('share')
@overwrite
@section('comments')
@overwrite

