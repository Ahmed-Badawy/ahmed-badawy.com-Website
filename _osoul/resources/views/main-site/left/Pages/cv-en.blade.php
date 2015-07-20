@section("modals")
@overwrite

@section('css_add')

  body{
      font-family: 'Open Sans';
      font-size:130%;
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

.highlight{
  color:#ddd;
  font-size: 105%;
  border-bottom:2px solid #2a9fd6;
  font-weight:bold;
} 
.gray{
  color:#5a5a5a;
}

p,ul li{
  color:#111;
}

.panel-body p,.panel-body li,.list-group li{
  color:#BABABA;
  font-family: tahoma;
}



#previous-work li{
  color:#ccc;
  background-color:rgba(0,0,0,.5);
  padding:2px;
  border-radius:10px;
  margin-bottom:10px;
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
  padding:5px;
  border-radius: 5px;
  background-color:rgba(0,0,0,.2);
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

@stop




<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 id='page_header'>Ahmed Badawy
            <p class="lead">Professional Developer </p>
          </h1>
        </div>
        <div class="col-md-5">
            <div class="well well-lg"> 
              <div class="row">
                <div class="col-sm-6">
        	      	<img src="{!! get_thumb('private-photos/me.jpg') !!}" class="img-responsive img-thumbnail img">
                </div>
                <div class="col-sm-6 text-center">
                <h4>Ahmed Badawy</h4>
                <h2>C.V</h2>
                <div class="btn-group">

  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Download C.V &nbsp;&nbsp;<span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{!! url('cv/download/jpg') !!}" class="deny">Download CV -- jpg</a></li>
    <li><a href="{!! url('cv/download/pdf') !!}" class="deny">Download CV -- pdf</a></li>
    <li><a href="{!! url('cv/download/rar') !!}" class="deny">Link to CV -- win shortcut</a></li>
    <li class="divider"></li>
    <li><a href="#" class="deny" data-toggle="modal" data-target=".send-cv-modal">Send C.V to an Email</a></li>
  </ul>


<div class="modal fade send-cv-modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
  <h4>Send C.V to Email</h4>

  <form class="form-inline" method=''>
  <div class="form-group pull-left">
    <label for="exampleInputEmail2">Please Enter The Send-to Email</label>
    <input type="email" class="form-control col-xs-12 input-sm" style='width:100%' placeholder="Enter Your Email">
  </div>
  <button type="submit" class="btn btn-primary col-xs-6 btn-sm">Send C.V</button>
  <button class="btn btn-danger col-xs-6 btn-sm" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </form>

  <br><br><br><br><br>
  <div class='clearfix'></div>

</div>
</div>
</div>


</div>
    
                
                </div>
              </div>
            </div>
        </div>
      </div> 
  </div><!-- /cont -->
</div>

<!-- Begin Body -->
<div class="container">
	<div class="row" id='main-page'>
  			<div class="col-md-3" id="leftCol">
              
              	<ul class="nav nav-stacked" id="sidebar">

                  <li><a href="#page_header">Download C.V</a></li>
                  <li><a href="#sec0">Objective</a></li>
                  <li><a href="#sec4">Personal info</a></li>
                  <li><a href="#sec2">Skills</a></li>

                  <ul class='list-unstyled inner-list'>
	                  <li><a class='btn btn-block' href='#tec1'>Web Development Skills</a></li>
                    <li><a class='btn btn-block' href='#dev-skills'>Development Skills</a></li>
	                  <li><a class='btn btn-block' href='#tec4'>Other Skills</a></li>
	                  <li><a class='btn btn-block' href='#tec5'>Very Good At</a></li>
	                  <li><a class='btn btn-block' href='#tec6'>Language</a></li>
	                  <li><a class='btn btn-block' href='#tec8'>Tecnologies</a></li>
                  </ul>
                  <li><a href="#sec11">Currently Learning</a></li>
                  <li><a href="#sec3">Courses</a></li>
                  <li><a href="#sec8">Certifications</a></li>
<?php if(!$fake){ ?>      
                  <li><a href="#sec9">Previous Work</a></li>
                  <!-- <li><a href="#sec10">Work History</a></li> -->
<?php } ?>
<?php if(!$fake){ ?>
                  <li><a href="#sec1">Education</a></li>
<?php } ?>
                  <li><a href="#sec6">Languages</a></li>
                  <li><a href="#sec5">Contact Me</a></li>
                  <li><a href="#sec7">Send Me A Message</a></li>
              	</ul>
              
      		</div> 



      		<div class="col-md-9">
              	<h3 class='sec' id="sec0">Career Objective</h3>

<p>
My objective is to be better programer/developer,  So to achieve that I always try my hardest, learn every new concept I hear of. I just Love to learn new things related to Computers & Technology.		
</p>
              
              <hr>
              
                              <h3 id="sec4">Personal Info</h3>
                  <ul>
<li><b class='col-sm-3'>Name:</b> Ahmed Badawy El-Said </li>
<li><b class='col-sm-3'>Age:</b> 24</li>
<!-- <li>Date of birth : 11 August, 1990 </li> -->
<li><b class='col-sm-3'>Nationality:</b> Egyptian</li>
<li><b class='col-sm-3'>Marital Status:</b> Single</li>
<li><b class='col-sm-3'>Military Status:</b> Final Exemption - إعفاء نهائى</li>
@if(!$fake)
<li><b class='col-sm-3'>Education:</b>  B.Sc. IN Computer Scince</li>
@endif
<li><b class='col-sm-3'>Website:</b> <a href='http://ahmed-badawy.com/site' target='_blank' class='btn btn-xs btn-default'>Ahmed-badawy.com/site</a></li>
<li><b class='col-sm-3'>Blog:</b> <a href='http://ahmed-badawy.com/blog' target='_blank' class='btn btn-xs btn-default'>Ahmed-badawy.com/blog</a></li>
<li><b class='col-sm-3'>TEL (Egypt):</b> &nbsp; <span class='bright'>01111988246</span> --|OR|-- <span class='bright'>01028999810</span></li>
<li><b class='col-sm-3'>E-mail:</b> admin@ahmed-badawy.com</li>
<li><b class='col-sm-3'>Additional Info:</b> ( Non-smoker, &nbsp; Drive & have driving licence, &nbsp; keyboard Typing skills )</li>
<!-- <li>Started Programming Since 1/2013</li> -->
                  </ul>
<div class='clearfix'></div>
<hr>


              	<h3 id="sec2">Web Development Skills</h3>
<br>



	<ul class='col-sm-6'>
	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec1' href='#tec1'>Front-End</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
		<li><span class="highlight">XHTML - HTML 5</span></li>
		<li><span class="highlight">CSS 2 - CSS 3</span></li>
		<li><span class="highlight">Twitter BootStrap</span> Front-end Framework</li>
		<li><span class="highlight">JavaScript</span> (Client-Side Programing Language)</li>
		<li>Very good at <span class="highlight">AngularJS</span> (JavaScript Framework)</li>
		<li><span class="highlight">jQuery</span> (JavaScript Library)</li>
		<li>Very good in dealin with <span class="highlight">jQuery's plugins</span> & exploiting them in my Projects</li>
		<li>good <span class="highlight">JSON</span> knowledge</li>
		<li>Alway's make <span class="highlight">Responsive</span> Websites. (works Well on all platforms pc-tablet-mobile)</li>
		<li>Expert in creating <span class="highlight">Single Page Applications</span> for more pleasant user experience</li>
    <li><span class="highlight">LESS</span> : CSS Pre-Processor</li>
    <li><span class="highlight">SASS (SCSS syntax)</span> : CSS Pre-Processor</li>
    <li>Some knowlege of task-runners like <span class="highlight">Grunt & Gulp</span> : Node.js Task Runners</li>
		<li><span class="highlight">Bower js</span> : Good Knowlege of Package Manager Bower.js</li>
    <li>Good Background in <span class="highlight">Ajax</span> Technology</li>
    <li>Both sass & scss css prefix lanuges <span class="highlight">Ajax</span> Technology</li>

        <div class="clearfix"></div>

  </div></div>
	</ul>

	<ul class='col-sm-6'>
	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec2' href='#tec2'>Back-End</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
    <li><span class="highlight">git and github approch</span> (server-side)</li>
		<li><span class="highlight">PHP</span> (server-side)</li>
		<li><span class="highlight">MVC</span> OOP Structure & Organization</li>
		<li>Expert in <span class="highlight">Laravel</span> Framework (php)</li>
		<li><span class="highlight">Zend</span> Framework (php)</li>
		<li><span class="highlight">Codeigniter</span> Framework (php)</li>
		<li>Basic Knowledge of <span class="highlight">ASP.NET MVC</span> Framework</li>
		<li><span class="highlight">OOP PHP</span> : Object Oriented Programing</li>
    <li>Some Knowlege of <span class="highlight">Wordpress</span> the popular CMS system</li>
		<li>PHP integration with <span class="highlight">MySQL</span> / <span class="highlight">MySQLi</span> Database</li>
		<li>Very Good <span class="highlight">SQL</span> Knowledge</li>
		<li>Excellent understanding of OOP & dealing with it in multiple languages (PHP - javaScript - java - C#)</li>
		<li><span class="highlight">Smarty</span> : PHP Template Engine</li>
    <li><span class="highlight">Blade</span> : PHP Template Engine</li>
		<li>Some knowlege of <span class="highlight">Composer</span> : PHP Dependency Manager</li>
    <li>Good Experience in dealing with third party plugins & integrating them within my projects.</li>


	</div></div>
	</ul>

<div class="clearfix"></div>

	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec3' href='#tec3'>General Web Development Skills</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;min-height:1px'>
	<ul class='col-sm-12'>
		<li>Great knowledge of <span class="highlight">WordPress</span> CMS System & how to manipulate it to my benefits.</li>
		<li>Very Good Background in <span class="highlight">Ajax</span> Technology</li>
		<li>Very Good Background in <span class="highlight">JSON</span> Technology</li>
		<li>Very Good at manipulating different APIs & bending them to my benefits</li>
		<li>Very Good Background in manipulating <span class="highlight">Regex</span> : Regular expression</li>
    <li>Excepert in Content ripping from other websites & populating the database with these data.</li>
    <li>Can Deal with & manipulate different APIs.</li>  
  </ul>
	</div>
  </div>

<div class="clearfix"></div>


  <div class='panel panel-default'>
  <a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='dev-skills' href='#tec3'>Development Skills</a>
  <div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;min-height:1px'>
  <ul class='col-sm-12'>
    <li>Good <span class="highlight">Java</span> Programing Language knowledge.</li>
    <li>Good <span class="highlight">android</span> SDK Programing knowledge. (currently learning)</li>
    <li>Basic <span class="highlight">C#</span> knowledge. (still working on it)</li>
    <li>Basic <span class="highlight">ASP.NET</span> knowledge. (still working on it)</li>
  </ul>
  </div>
  </div>

  <div class='clearfix'></div>


	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec4' href='#tec4'>Other Skills</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
	<ul class='col-sm-6'>
		<li>Cisco <span class="highlight">CCNA</span> Certified</li>
		<li>Cisco <span class="highlight">CCNP</span> Certified</li>
		<li>Very Good understanding of <span class="highlight">Networks</span> & how to manage them.</li>
    <li>Very good background in Adobe <span class="highlight">PhotoShop</span></li>
		<li>good background in Adobe <span class="highlight">DreamWeaver</span></li>

    <li>Great Background in: </li>
        <ul>
          <li>Office Word</li>
          <li>Office Excel</li>
          <li>Office PowerPoint</li>
        </ul>

		<li>Love to Read Technology-related Books</li>
	</ul>
	<ul class='col-sm-6'>	
		<li>Very Good Knowledge of General Computer Technologies</li>
		<li>A keen approach to learning.</li>
		<li>Ability to learn new technologies (fast)</li>
		<li>A keen approach to learning.</li>
		<li>Good Typing Skills</li>
		<li>Strong physics and math background</li>
		<li>Time Management Skills</li>
	</ul>
	</div></div>

<div class="clearfix"></div>


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

	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec6' href='#tec6'>Programing Languages Used</a>
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
echo "<div class='col-xs-6 col-sm-3 col-md-2'><a href='$site'><img src='".get_thumb("cv/$img.jpg")."' class='img-responsive img-thumbnail img-force'></a></div>";
// if($i==5 || $i==11 || $i==17) echo "</div><br><div class='row'>";
$i++;
    }
?>
</div>
</div>

              
              	<hr>


                <h3 id="sec11">Currently Working On learning</h3>
<ul>
  <li>Java GUI Programing</li>
  <li>Android Programing</li>
  <li>More about SEO</li>
  <li>More about Website Analysis</li>
  <li>More about C#</li>
  <li>More about ASP.NET</li>
</ul>

<hr>



              	<h3 id="sec3">Courses</h3>
<ul>
	<li>PhotoShop : Hi-Q - Tanta</li>
  <li>Java : New Horizon - Mansoura</li>
	<li>Android Development : New Horizon - Mansoura</li>
	<li>ICDL : Axon</li>
	<li>English : Pioneer - Tanta</li>
</ul>


<hr>
          	<h3 id="sec8">Certifications</h3>
<ul>
    <li>PhotoShop Course Completion from HI-Q Academy</li>
    <li>Java Course Completion from New Horizon</li>
    <li>English Course Completion from Poinear</li>
    <li>Cisco ICND1 Exam 640-822</li>
    <li>Cisco ICND2 Exam 640-816</li>
    <li>Cisco CCNP Exam 642-902 ROUTE</li>
    <li>Cisco CCNP Exam 642-813 SWITCH</li>
    <li>Cisco CCNP Exam 642-832 TSHOOT</li>
    <li>Acquired CCNA Certification</li>
    <li>Acquired CCNP Certification</li>
</ul>   


<hr>

<?php if(!$fake){ ?>
          	<h3 id="sec9">Previous Work</h3>
<ul id='previous-work' class='text-center list-unstyled'>
	<li><a href="http://ahmed-badawy.com" target='_blank'>Ahmed-Badawy.com</a></li>
	<li><a href="http://spidro.com" target='_blank'>Spidro.com</a>: not online at the moment</li>
  <li><a href="{!! url('blog') !!}" target='_blank'>Personal wordpress blog</a></li>

  <li><a href="http://alnourfemtolasercenter.com" target='_blank'>مركز النور لعمليات للفيمتو ليزيك و الفيمتو سميل</a></li>
  <li><a href="http://www.al-shia.org" target='_blank'>موقع مركز آل البيت العالمى للمعلومات</a></li>

	<li><a href="{!! route('projects') !!}" target='_blank'>See My Projects Page</a></li>
	<ul class='list-unstyled' style='border:2px solid white;padding:7px;border-radius:10px'>
    <h4>My Projects</h4>
		@foreach(sr::projects() as $project)
		<li class='col-sm-4'><a href='{!! $project["link"] !!}' target='_blank'><small>{!! $project['page_title'] !!}</small></a></li>
		@endforeach
    <div class="clearfix"></div>
	</ul>
</ul> 

<div class="clearfix"></div>  
<hr>

<!--             <h3 id="sec10">Work History</h3>
<p> Have Not Worked As a Professional yet.</p>
<hr>            
 -->

<?php } ?>


<?php if(!$fake){ ?>
              	<h3 id="sec1">Education</h3>
<p>
2010   =>  2014   : 
Bachelor Degree IN Computer Scince.
<!-- - Misr Academy for Engineering and Technology in Mansoura city. -->
<!-- <br> -->
<!-- معادلة موثقة لبكليريوس الحاسبات و المعلومات -->
</p>
<!-- <br> -->

               	<div class="row">
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
              	</div> 

 <hr>
<?php } ?>


              	<h3 id="sec6">Languages</h3>
<ul>
	 <li>Arabic: Native</li>
	 <li>English : V.Good, Read-Write-listen</li>
</ul>   

              	<hr>

<div class="row">
	<div class='col-sm-6'>
	<h3 id='sec5'>Contact Me</h3>
<ul class='list-group '>
      <li class="col-sm-12 list-group-item">{!! fa2("at") !!} admin@ahmed-badawy.com</li>
      <li class="col-sm-12 list-group-item">{!! fa2("mobile") !!} 01028999810 -OR- 0111988246</li>
      <li class="col-sm-12 list-group-item">{!! fa2("desktop") !!} <a href='{!! url("/") !!}'>www.Ahmed-Badawy.com</a></li>
</ul>
	</div>

<div class="col-sm-6">
	<h3 id='sec7'>Send ME A Message</h3>
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
        