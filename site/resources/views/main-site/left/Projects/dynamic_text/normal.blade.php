



<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title h1"><h1>Dynamic Text - التحكم النصى للمواقع</h1></h1>
	</div>
	<div class="panel-body">
	
	<h4 class='arabic' dir='rtl'>
	<ul>
	<li>إمكانية تعديل محتويات الصفحة دون الحاجة لـ صنع GUI خاص بالتعديل.</li>
	<li>الفكرة أنك تستطيع التحكم فى الموقع أو الصفحة و التعديل بها دون الحاجة إلى الـ GUI مثل(Wordpress) أو وسيط آخر. </li>
	<li>يمكن للمستخدم الغير تقنى التحكم فى الموقع و نص موقعه بسرعة شديدة.</li>
	<li>هذه الطريقة تسهل مهمة المبرمج كثيرا لأنها سهلة الإستخدام و يمكن تطبيقها فى ثوان. ولا تعتمد على الـ Database ولكنها تعتمد بالكامل على الـ Cashing للموقع.</li>
	</ul>
	</h4>

<hr>

<h3 class='text-center' dir='rtl'><span class='label label-danger'>غير النص ثم أضغط زر SAVE </span></h3>
<br>

<div class='col-sm-6'>
<label> {!! fa2('edit') !!} Is Content Editable ? </label>
<label class="radio-inline">
 &nbsp; &nbsp; &nbsp;
  <input type="radio" name='editable' ng-model="editable" value='true'> Yes
</label>
<label class="radio-inline">
  <input type="radio" name='editable' ng-model="editable" value="false"> No
</label>
</div>


<div class='col-sm-6'>
<label> {!! fa2('underline') !!} Is Content SpellChecked ? </label>
<label class="radio-inline">
 &nbsp; &nbsp; &nbsp;
  <input type="radio" name='spellcheck' ng-model="spellcheck" value='true'> Yes
</label>
<label class="radio-inline">
  <input type="radio" name='spellcheck' ng-model="spellcheck" value="false"> No
</label>
</div>


<div class="clearfix"></div>
<hr>

<h4 dir='rtl' class='text-center'>الحالة الحالية: &nbsp; <span ng-show='editable=="false"'>لا </span>يمكن تعديل النص &nbsp; ||| &nbsp;  <span ng-show='spellcheck=="false"'>بدون </span>فحص صحة النص</h4>


<div id='dynamic_content'>

{!! $dynamic_text !!}

</div>

	</div>
	<div class="panel-footer">
		<a href="" class='btn btn-primary' ng-click='save()'>Save Changes</a>
		<a href="" class='btn btn-danger' ng-click='undo()'>Undo Changes</a>
		<a href="" class='btn btn-success' ng-click='reset()'>Reset To Normal</a>
	</div>
</div>




