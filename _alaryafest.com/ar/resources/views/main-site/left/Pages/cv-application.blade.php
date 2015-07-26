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
      font-size:110%;
      margin-top:3%;
      margin-bottom:800px;
  }
  .english{
    font-family: "Open Sans","tahoma";
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
    font-family: "tahoma","arial";
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



  #ContactModalButton{
    display:none;
  }


@stop




<div id="masthead">  
  <div class="container text-center">
          <h1 id='page_header text-center'>أحمد بدوى
            <p class="lead">مبرمج و مطور خبرة 3 سنوات</p>
          </h1>
  </div><!-- /cont -->
</div>


<!-- Begin Body -->
<div class="container">




<!-- *******************************C.V Brief************************************* -->
<h3 id="brief" class='text-center' dir='rtl'>ملخص الـ C.V</h3>

                <div class="btn-group">

  <button type="button" class="btn btn-default dropdown-toggle pull-left" dir='rtl' data-toggle="dropdown" aria-expanded="false">
    {!! fa2('download') !!} تحميل و مشاركة الـ C.V &nbsp;&nbsp;<span class="caret"></span>
  </button>


  <ul class="dropdown-menu" role="menu">
<li role="presentation" class="dropdown-header english">Download</li>
    <li><a href="{!! url('cv/download/jpg') !!}" class="deny english">{!! fa2('image') !!} CV -- jpg</a></li>
    <li><a href="{!! url('cv/download/pdf') !!}" class="deny english">{!! fa2('file-pdf-o') !!} CV -- pdf</a></li>
    <li><a href="{!! url('cv/download/rar') !!}" class="deny english">{!! fa2('external-link-square') !!} CV -- win shortcut</a></li>
    <li class="divider"></li>

    <?php
      $share_data = [
          "url" => "http://ahmed-badawy.com/site/cv-brief",
          "title" => "Ahmed-Badawy's C.V (Please Read Me)",
          "text" => " -!--Ahmed Badawy - أحمد بدوى--!- Hello! This is My C.V : http://ahmed-badawy.com/site/cv", 
          "img" => "http://ahmed-badawy.com/site/public/site-imgs/site/logo.jpg",        
      ];

      $js_popup = "centeredPopup(this.href,'myWindow','700','300','yes');return false";
    ?>
<li role="presentation" class="dropdown-header english">Share With</li>

<li><a class="english" target="_blank" href="{!! get_share_link(1,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('facebook-square') !!} Facebook</a></li>
<li><a class='english' target="_blank" href="{!! get_share_link(2,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('twitter-square') !!} Twitter</a></li>
<li><a class='english' target="_blank" href="{!! get_share_link(3,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('google-plus-square') !!} Google+</a></li>

<li><a class='english' target="_blank" href="{!! get_share_link(4,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('linkedin-square') !!} Linked-In</a></li>
<li><a class='english' target="_blank" href="{!! get_share_link(5,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('pinterest-square') !!} Pinterest</a></li>
<li><a class='english' target="_blank" href="{!! get_share_link(6,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('stumbleupon',0) !!} stumbleUpon</a></li>

    <li class="divider"></li>
<li role="presentation" class="dropdown-header english">Send To</li>
<li><a target="_blank" class="english" href="{!! get_share_link('whatsapp',$share_data) !!}">{!! fa2('whatsapp') !!} WhatsApp</a></li>
<li><a target="_blank" class="english" href="{!! get_share_link('email',$share_data) !!}">{!! fa2('send') !!} Email</a></li>

    <li class="divider"></li>
<li><a href="#" class="deny english" data-toggle="modal" data-target=".send-cv-modal">{!! fa2('envelope',0) !!} Send C.V to an Email</a></li>
  </ul>


<div class="modal fade send-cv-modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <h1>Sending C.V To Email</h1>

  <form class="form-inline" method='post' action='{!!url("cv/send")!!}' style='padding:20px'>
  <div class="form-group">
    <label for="exampleInputEmail2" class='bright'><h4>Please Enter The Send-to Email</h4></label>
    <input type="email" name='email' class="form-control" style='width:100%' placeholder="Enter Your Email">
  </div>
  {{br(2)}}
  <button type="submit" class="btn btn-primary">Send C.V</button>
  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </form>

  <div class='clearfix'></div>

</div>
</div>
             
                </div>
              </div>



<ul dir='rtl'>
<li>أحمد بدوى السيد -  مطور و مبرمج</li>
<li>25 سنة  -  غير مدخن  -  أقود و حامل لرخصة قيادة</li>
<li>خبرة 3 سنوات فى - تطوير المواقع بالـ    PHP , javascript</li>
<li>مبرمج و مطور - خبرة فى تنفيذ الأفكار الجديدة و أيجاد الحلول المستحدثة.</li>

<br>
<li>خبرات العمل:  </li>
<ul>
    <li> HTML - CSS - JavaScript - jQuery - AngularJS </li>
    <li> PHP - Wordpress </li>
    <li> CodeIgniter FrameWork => Zend FrameWork => Laravel FrameWork</li>
    <li> Gulp - Grunt - SASS - LESS - Bower </li>
    <li> Git Technology - familiar with cpanel & WHM Resellers panel </li>
</ul>
<br>

<li>القدرة على تنفيذ البرامج الخدمية مثل ( نظم البيع و الشراء - نظم إدارة الصيدليات - نظم إدارة المقاولات - نظم البيع للمطاعم )</li>
<li>خبرة فى تأسيس أنظمة للإستضافة للشركات و المواقع المختلفة عن طريق خدمة الـ Reseller.</li>
<li>معرفة جيدة برفع و تأسيس و تشغيل مواقع الويب و إستمرار تطويرها ضمن فريق عمل متكامل.</li>
<li>خلفية جيدة للتعامل مع الأكواد الخاصة بخدمات الـ API و الـ SDK -- مثل:  Facebook SDK , twitter , dropbox , paypal , stripe ,mailgun</li>
    <li>خلفية ممتازة فى تقنيات الـ SEO و معرفة بكيفية الإعلان على المنصات المختلفة مثل الفيسبوك و جوجل - يمكننى وضع موقعك فى أولى صفحات البحث بجوجل (بشرط توفير الموارد المطلوبة)</li>
    <li>لدى خلفية بسيطة فى برمجة تطبيقات الأندرويد و أستطيع أنجاز البرامج البسيطة عليه. (أعمل على إجادته حاليا) </li>
<li>لدى خلفية بسيطة للتعامل مع لغة الجافا و أستطيع إنجاز البرامج التى تعتمد على الإرتباط بالـ database فيه.</li>
<li>حصلت على شهادتى الـ CCNA - CCNP منذ أربع سنوات. مما أعطانى فهم جيد جدا للشبكات و طريقة عملها و كيفية التعامل معها.</li>
<li>أعمل دوما لتطوير مستوى خبرتى و أتابع كل ما هو جديد لتطوير عملى و مستوايا.</li>

<br>
  <ul>
    <li style='font-weight:bold'>الـ C.V الرابط :  {{sp(12)}}  <a target='_blank' class='english btn btn-xs btn-default ' href="http://ahmed-badawy.com/site/cv">http://ahmed-badawy.com/site/cv</a></li>
    <li style='font-weight:bold'>أعمال سابقة :  {{sp(12)}} <a target='_blank' class='english btn btn-xs btn-default ' href="#prev-work">http://ahmed-badawy.com/site/cv#prev-work</a></li>
    <li style='font-weight:bold'>أفكار قمت بتنفيذها :  {{sp(2)}} <a target='_blank' class='english btn btn-xs btn-default ' href="http://ahmed-badawy.com/site/projects">http://ahmed-badawy.com/site/projects</a></li>
    <li style='font-weight:bold'>الموقع الشخصي : {{sp(6)}} <a target='_blank' class='english btn btn-xs btn-default ' href="http://ahmed-badawy.com">http://ahmed-badawy.com</a></li>
    <li style='font-weight:bold'>المدونة الشخصية : {{sp(6)}} <a target='_blank' class='english btn btn-xs btn-default ' href="http://ahmed-badawy.com/blog">http://ahmed-badawy.com/blog</a></li>
  </ul> 
</br>

<b class='arabic' style='font-size:1.5em'>تواصل معى: 
 &nbsp; -- &nbsp;
{!!fa2('phone-square',0)!!}01028999810
 &nbsp; -- &nbsp;
{!!fa2('send',0)!!}admin@site.ahmed-badawy.com
</b>

</ul>
<div class="clearfix"></div>

<hr>
<!-- ******************************************************************** -->





   

  <script language="javascript">
  //to use this function just call it on click: onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false"
    var popupWindow = null;
    function centeredPopup(url,winName,w,h,scroll){
      LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
      TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
      settings =
      'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
      popupWindow = window.open(url,winName,settings);
    }

  </script>


@section('share')
@overwrite
@section('comments')
@overwrite

