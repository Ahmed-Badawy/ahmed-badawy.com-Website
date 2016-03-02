
<!-- ******************************************************************** -->


<div class="row english" style="color:white">
	<div class='col-sm-6'>
	<h3 class="english">Contact Me</h3>
	<ul class='list-group '>
	  <li class="col-sm-12 list-group-item">{!! fa2("at") !!} {{social('my_email_1')}}</li>
	  <li class="col-sm-12 list-group-item">{!! fa2("mobile") !!} {{social('my_phone_1')}}</li>
	  <li class="col-sm-12 list-group-item">{!! fa2("desktop") !!} <a href='{!! url("/") !!}'>www.Ahmed-Badawy.com</a></li>
	</ul>
	</div>

<div class="col-sm-6">
	<h3 id='sec7' dir='rtl'>Send Me A Message</h3>
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


<div class='clearfix'></div>


<!-- ******************************************************************** -->

