@section("css_add")
	label{
		color:#333;
		margin-top:5px;
	}	
	h1{
		margin-top:60px;
	}
@overwrite
@section("media")
@overwrite


	<h1 class='text-center bright'>Contact Me</h1>

<div class="col-sm-6 col-sm-offset-3 form-group">

<form action="{{url('contact')}}" method='post'>
<br>
	<label>Your (Reply-to) Email:</label>
	<input type="email" name='email' class='form-control' style="width:100%" placeholder='Your Email' required autofocus='true'>
	<label>Message:</label>
	<textarea name="msg" class='form-control' rows='4' style="width:100%"  placeholder='Message' required></textarea>
	<hr>
	<button type='submit' class='btn btn-primary btn-block'><b>Send Message</b></button>
</form>

</div>	