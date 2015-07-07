
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="white-it">{!! fa2('users') !!} Sign Up</h4>
  </div>
  <div class="panel-body white-it">


{!!  Form::open([ 
                "url"=>'signup',
                'method'=>'post',
                ])
 !!}

    <div class="form-group">

<div class="input-group">    
      <span class="input-group-addon">{!! fa2('user',['inverse']) !!}</span>
      {!!  Form::text('user_name', null , ["ng-model"=>"new_user.user_name" ,'class'=>'form-control','placeholder'=>"User Name" , 'required' ])  !!}
</div>
<div class="input-group">    
      <span class="input-group-addon">{!! fa2('at',['inverse']) !!}</span>
      {!!  Form::text('email', null , ["ng-model"=>"new_user.email" ,'class'=>'form-control','placeholder'=>"Email" , 'required' ])  !!}
</div>
<div class='alert alert-danger hidden' id='email_errors'></div>

<div class="input-group">    
      <span class="input-group-addon">{!! fa2('key',['inverse']) !!}</span>
      {!!  Form::password('password' , ["ng-model"=>"new_user.password" ,'class'=>'form-control','placeholder'=>"Password" , 'required' ])  !!}
</div>
<div class="input-group">    
      <span class="input-group-addon">{!! fa2('key') !!}</span>
      {!!  Form::password('password_confirmation' , ["ng-model"=>"new_user.password_confirmation" ,'class'=>'form-control','placeholder'=>"Password Confirmation" , 'required' ])  !!}
</div>



<br>

<p style='line-height:1.8em' class='well'>
  {!! fa2('puzzle-piece') !!}  Please read our <a data-toggle="modal" href="#terms" class="btn btn-primary btn-xs">Terms Of Use</a> and our <a data-toggle="modal" href="#privacy-policy" class="btn btn-primary btn-xs">Privacy Policy</a> before you continue using our services. If you have any questions or suggestions please <a data-toggle="modal" href="#ContactModal" class="btn btn-primary btn-xs">Contact Us</a>.
</p>


        <label>
          <input type="checkbox" class='iCheck' ng-model="new_user.send" ng-init='new_user.send=true'> &nbsp; <b> Send News to my E-Mail.</b>
        </label><br>

        <label>
          <input type="checkbox" class='iCheck' ng-model="new_user.terms" ng-init='new_user.terms=true'>  &nbsp; <b> I Agree with terms of service.</b>
        </label><br>

        <label>
          <input type="checkbox" class='iCheck' ng-model="new_user.privacy" ng-init='new_user.privacy=true'>  &nbsp; <b> I Agree with Privacy Policy.</b>
        </label>

    </div>           

<script>
$(document).ready(function(){
  $('.iCheck').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
}); 
</script>   


      <a class="btn btn-primary col-sm-6" ng-click='submit_signup_form(new_user)'>{!! fa2('thumbs-o-up') !!} Create Account</a> 
      <button class="btn btn-default col-sm-6" type="reset">{!! fa2('times-circle') !!} Reset</button> 

{!!  Form::close()  !!}

  </div>

</div>
