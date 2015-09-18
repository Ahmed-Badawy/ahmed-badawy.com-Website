


<?php

$previous_projects = [
        "websites"  =>  [

                "ahmed-badawy.com"  =>  [
                        "title"  =>  "Ahmed-Badawy.com",
                        "link"   =>  "ahmmed-badawy.com",
                        "short_desc"  =>  "موقعى و معرض أعمالى",
                        "name"  =>  "ahmed-badawy",
                        "skill" =>  "html,css,php,js,jquery,angular",
                        "date"  =>  "july 2012",
                        "client"    =>  "none",
                        "desc"  =>  "Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy",
                ],
                "spidro.com"  =>  [
                        "title"  =>  "Spidro",
                        "link"   =>  "spidro.com",
                        "short_desc"  =>  "شركة إستضافة و برمجيات",
                        "name"  =>  "spidro.com",
                        "skill" =>  "html,css,js,jquery",
                        "date"  =>  "december 2014",
                        "client"    =>  "spidro",
                        "desc"  =>  "",
                ],

        ],
];


?>




<!-- ******************************************************************** -->
<h3 id="previous_work" class='acc_header' dir='rtl'>أعمال سابقة</h3>

<div id="previous_work_accordion" class='custom_accordion'>


<ul class='text-center list-unstyled'>
  <li><a href="{{ url('selling-manager') }}" target='_blank'>أتممت الكثير من البرامج الخدمية معظمها برامج مطاعم و محلات بيع وحدات مثل الموبيلات</a></li>

  <li><a href="http://ahmed-badawy.com" target='_blank' class='english'>Ahmed-Badawy.com</a></li>
  <li><a href="http://spidro.com" target='_blank' class='english'>Spidro.com</a></li>
  <li><a href="{!! url('blog') !!}" target='_blank' class='english'>Personal wordpress blog</a></li>

  <li><a href="http://www.alaryafest.com" target='_blank'>موقع الأرياف للمظلات بالسعودية</a></li>
  <li><a href="http://www.osoul.sa" target='_blank'>موقع شركة أصول للدواجن و اللحوم بالسعودية</a></li>
  <li><a href="http://www.ahmed-badawy.com/websites/alabdaa-almaky.com/" target='_blank'>موقع الإبداع المكى للعقارات بالسعودية</a></li>
  <li><a href="http://erest.sa/demo/enjaz/" target='_blank'>موقع شركة إنجاز للتطوير و البرمجيات بالسعودية</a></li>

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

<ul class='list-unstyled text-center'>
  <li><a href="{!! route('projects') !!}" target='_blank' class='arabic'>العديد من الأفكار و المشاريع نفذتها بشكل مبدئى فى أوقات الفراغ</a></li>
  <li><a href="{!! route('games') !!}" target='_blank' class='arabic'>ألعاب بسيطة نفذتها</a></li>
  <li><a href="{!! route('apis') !!}" target='_blank' class='arabic'>خدمات للمواقع الخارجية</a></li>
  <li><a href="{!! url('blog') !!}" target='_blank' class='arabic'>البلوج التقنية الخاصة بى</a></li>
</ul>


<div class='clearfix'></div>

</div>
<!-- ******************************************************************** -->

