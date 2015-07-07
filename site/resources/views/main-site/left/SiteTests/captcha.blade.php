@section('css_add')
  #page{
    border:2px solid #2a9fd6;
    border-radius:20px;
    margin-top:30px;
    padding:10px;
  }
@stop

{{ get_lib('recaptchalib'); }}


<div class="row">
  <div class="col-md-6 col-md-offset-3" id='page'>
  

<h2>You Can get to the admin panel from here</h2>
<a href="https://www.google.com/recaptcha/admin#list" class='btn btn-success'>Captcha Admin Panal</a>

<hr><br>




<script type="text/javascript">
var RecaptchaOptions = {
   lang : 'ar',
   //four themes ('red','blackglass','white','clean')
   theme:'clean',  
};
</script>

<?php


// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6LeoXP4SAAAAALt6PvzghFv8OgVmh9m05IHcxGiG ";
$privatekey = "6LeoXP4SAAAAAIlJSYfECt6moNmYYskiwfP2kHQ7";
?>

<?php 
if (!empty($_POST) && $_POST["recaptcha_response_field"]) {

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                echo "You got it!";
                err($_POST);
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
                echo "<h1>The Captcha Was Wrong.</h1>";
        }
}else{
 ?>

<h1>Google Recaptcha</h1>
    <form action="#" method="post">
  <legend>Just Another Form</legend>

  <label for="">User Name</label>
  <input type="text" class='form-control' name='user_name' >
  <br>
  <label for="">Password</label>
  <input type="text" class='form-control' name='password' >
  <br>
  <label for="">ReCaptcha</label>
  <?php echo recaptcha_get_html($publickey); ?>
  <br>
  <button type="submit" class='form-control btn btn-success'><b>Submit The Form</b></button>
    </form>

<?php } ?>


    <hr>



<h2>Google MailHide<br><small>There are two ways</small></h2>
<a href="https://www.google.com/recaptcha/admin#mailhide" class='btn btn-success btn-sm'>Go to MailHide</a>
<br><br>
<a class='btn btn-info btn-lg col-md-6' href="http://www.google.com/recaptcha/mailhide/d?k=01df2NiYU3heI-LnCgomyIVg==&c=2_uAaI59Q1lqejnN-3-j9r1nBwbvYDSYW23s59kU0G0=">See My Email</a>

  </div>
</div>

