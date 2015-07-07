
<div class="row">
	<div class="col-sm-6">


<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title white-it"><h2>{!! fa2('send') !!} Reset Your Password</h2></h1>
  </div>
  <div class="panel-body white-it">
    <h5>

{!!  Form::open([ 
                "url"=>'login_post',
                'method'=>'post',
                'autocomplete'=>'off',
                'id'=>'login-form'])
 !!}

    <div class="form-group">

<div class="input-group">    
      <span class="input-group-addon">{!! fa2('envelope') !!}</span>
      {!!  Form::email('email', null , ['class'=>'form-control','placeholder'=>"Enter Your Email" , 'required','autofocus' ])  !!}      
</div>

    </div>           
 
      <button class="btn btn-primary col-md-6" type="submit">{!! fa2('send') !!} Send Reset Link</button> 
      <button class="btn btn-default col-md-6" type="reset">{!! fa2('times-circle') !!} Reset</button> 

{!!  Form::close()  !!}

    </h5>
  </div>
</div>


	</div>
	<div class="col-sm-6">


<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title white-it"><h2>{!! fa2('key') !!} Change Password</h2></h1>
  </div>
  <div class="panel-body white-it">
    <h5>

{!!  Form::open([ 
                "url"=>'login_post',
                'method'=>'post',
                'autocomplete'=>'off',
                'id'=>'login-form'])
 !!}

    <div class="form-group">

<div class="input-group">    
      <span class="input-group-addon">{!! fa2('code') !!}</span>
      {!!  Form::text('code', null , ['class'=>'form-control','placeholder'=>"Enter The Hashed Code" , 'required','autofocus' ])  !!}
</div>
<p class="help-block">we sent this code to your email. If it Doesn't Exist Please copy it from there.</p>


    </div>           
 
      <button class="btn btn-primary col-md-6" type="submit">{!! fa2('thumbs-o-up') !!} Change Password</button> 
      <button class="btn btn-default col-md-6" type="reset">{!! fa2('times-circle') !!} Reset</button> 

{!!  Form::close()  !!}

    </h5>
  </div>
</div>


	</div>
</div>

