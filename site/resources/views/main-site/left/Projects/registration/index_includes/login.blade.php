

<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class=" white-it">{!! fa2('sign-in') !!} Sign In</h4>
  </div>
  <div class="panel-body white-it">


{!!  Form::open([ 
                "url"=>'login_post',
                'method'=>'post'
                ])
 !!}


    <div class="form-group">

<div class="input-group">    
      <span class="input-group-addon">{!! fa2('at',['inverse']) !!}</span>
      {!!  Form::email('email', null , ['class'=>'form-control','placeholder'=>"Email" , 'required','autofocus' ])  !!}
</div>
<div class="input-group">    
      <span class="input-group-addon">{!! fa2('key',['inverse']) !!}</span>
      {!!  Form::password('password' , ['class'=>'form-control','placeholder'=>"Password" , 'required' ])  !!}
</div>

    </div>           
  


    <label class='iCheck'>
      <input type="checkbox" class='iCheck' name='remember_me' checked> &nbsp; <b> Remeber Me</b>
    </label>  


{!!  br(2)  !!}

      <button class="btn btn-primary col-md-6" type="submit">{!! fa2('sign-in') !!} Sign In</button> 
      <button class="btn btn-default col-md-6" type="reset">{!! fa2('times-circle') !!} Reset</button> 

{!!  Form::close()  !!}


  </div>
  <div class="panel-footer">

<a href="{!! url('registration/forgot') !!}" class="btn btn-default btn-sm">{!! fa2('exclamation-triangle') !!} Forgot Your Password ?</a>

  </div>
</div>


