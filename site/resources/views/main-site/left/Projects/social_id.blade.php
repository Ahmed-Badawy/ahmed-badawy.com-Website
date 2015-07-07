
{!! get_angular("social") !!}



<div class="container" style='margin-top:1%'>
  <div class="col-md-8 col-sm-offset-2 col-sm-12">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h2 class='text-center'>تحليل الرقم القومى</h2>
  </div>
  <div class="panel-body">
    <h5>

<label for="">أكتب رقم البطاقة</label>
<div class="input-group">    
  <span class="input-group-addon">رقم البطاقة</span>
  <input type="number" ng-model="id_num" autofocus="autofocus" placeholder="Enter Number" class="form-control" dir='rtl'>
</div>

<div class="clearfix"></div><br>
<p></p>
<h4 class="alert alert-info" ng-show='!data.id' dir='rtl'>من فضلك أكتب الرقم القومى المراد تحليله.
وهو رقم البطاقة المكون من 14 أسفل الصورة الشخصية فى البطاقة. <br> مثلا للرقم القومى: <small>29007111600035-----26407081601748</small></h4>



<table class='table table-bordered table-hover table-striped' ng-show='data.id'>
  <tr class='text-center'>
      <td>@{{data.id}}</td>
      <th class='text-center'>رقم الكود</th>
  </tr>
  <tr class='text-center'>
      <td>@{{data.state}}</td>
      <th class='text-center'>محافظة</th>
  </tr>
  <tr class='text-center'>
      <td>@{{data.birth_date}}</td>
      <th class='text-center'>تاريخ الميلاد</th>
  </tr>
  <tr class='text-center'>
      <td>@{{data.type}}</td>
      <th class='text-center'>الجنس</th>
  </tr>   
  <tr class='text-center'>
      <td dir='rtl'>@{{data.age}} سنة</td>
      <th class='text-center'>العمر الحالى</th>
  </tr>          
</table>



<div class="clearfix"></div>





<hr>
<h3 class='text-center'>Logic</h3>
<div class="well">
  <table border="1" class="wikitable" dir='rtl'>
<tbody><tr>
<th>مثال</th>
<td>7</td>
<td>9</td>
<td>5</td>
<td>4</td>
<td>0</td>
<td>3</td>
<td>1</td>
<td>5</td>
<td>1</td>
<td>8</td>
<td>0</td>
<td>2</td>
<td>8</td>
<td>2</td>
</tr>
<tr bgcolor="#EFEFEF">
<th>الكود</th>
<td>C1</td>
<td>Z1</td>
<td>Z</td>
<td>Z</td>
<td>Z</td>
<td>X</td>
<td>X</td>
<td>D</td>
<td>D</td>
<td>M</td>
<td>M</td>
<td>Y</td>
<td>Y</td>
<td>C</td>
</tr>
<tr>
<th rowspan="2">الوصف</th>
<td align="center" rowspan="2">رقم رقابي للتحقق من صحة الرقم القومي (check digit)</td>
<td align="center" colspan="4">مسلسل تسجيل المولود على الحاسب الألي في يوم ميلاده على مستوى محافظة الميلاد حسب نوع المولود وهذا المسلسل عشوائي طبقا لترتيب تسجيل المولـود ويقوم الحاسب بتكوينه.<br>
<b>وهذا مسلسل ليس له علاقة برقم القيد في الدفاتر الورقية</b></td>
<td align="center" colspan="2" rowspan="2">للدلالة على كود المحافظة</td>
<td align="center" colspan="6">تاريخ الميلاد</td>
<td>للدلالة على <a class="mw-redirect" title="القرن" href="/wiki/%D8%A7%D9%84%D9%82%D8%B1%D9%86">القرن</a> (القرن مائة عام)<br>
من عام <a class="mw-redirect" title="1900" href="/wiki/1900">1900</a> حتى عام <a class="mw-redirect" title="1999" href="/wiki/1999">1999</a>&nbsp;: C= 2<br>
من عام <a class="mw-redirect" title="2000" href="/wiki/2000">2000</a> حتى عام <a title="2099 (الصفحة غير موجودة)" class="new" href="/w/index.php?title=2099&amp;action=edit&amp;redlink=1">2099</a> C= 3</td>
</tr>
<tr>
<td>إذا كان الرقم فردي يكون المولود (<a class="mw-redirect" title="ذكر" href="/wiki/%D8%B0%D9%83%D8%B1">ذكر</a>)<br>
إذا كان الرقم زوجي يكون المولود (<a title="أنثى" href="/wiki/%D8%A3%D9%86%D8%AB%D9%89">أنثى</a>)</td>
<td colspan="3"></td>
<td colspan="2">يوم</td>
<td colspan="2">شهر</td>
<td colspan="2">سنة</td>
</tr>
</tbody></table>

<div class="clearfix"></div>
</div>








<br><hr>
<a href="{{url('projects')}}" class='btn btn-primary btn-lg btn-block'>Back To Projects</a>

    </h5>
  </div>


  </div>
</div>  

