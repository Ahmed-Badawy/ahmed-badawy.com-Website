<!DOCTYPE html>
<html>
<head>
	<title>Registration/Login Control</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/earlyaccess/notokufiarabic.css' rel='stylesheet' type='text/css'>
    <style type="text/css">
		.arabic{
		    font-family: 'Noto Kufi Arabic', serif;
		    line-height: 1.5em;
		}
		.english{
			font-family: 'Open Sans','Lato', Helvetica, sans-serif;
		}
    </style>



	<style type="text/css">
@keyframes spotlightBG {
    0% {background-color: #808000;}
    10% {background-color: blue;}
    20% {background-color: #000;}
    30% {background-color: red;}
    40% {background-color: green;}
    50% {background-color: yellow;}
    60% {background-color: #ff0080;}
    70% {background-color: #D8CAB4;}
    80% {background-color: #ff00ff;}
    90% {background-color: #400080;}
    100% {background-color: #00ff00;}
}

body{

    font-family: 'Open Sans','Lato', Helvetica, sans-serif;
    color:#222;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;


    background: url('{{public_dir}}site-imgs/site/covers/transparent.png') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

    animation: spotlightBG 20s infinite alternate;
}






 .card {
    /*margin-top: 20px;*/
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}



#login_box{
	position:absolute;
	width:40%;
	margin: 2% 30%;
	padding:10px;
	color:#333;
}
	</style>




<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-pref .btn").click(function () {
		    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
		    $(this).removeClass("btn-default").addClass("btn-primary");   
		});
	});
</script>



</head>
<body>


@section('errors_section')
	@if( $errors->any() ||  session('custom_errors'))
		<div class="alert alert-danger text-left">
		<ul>
		    @if( isset($errors) )
		        <?php $errors_all = $errors->all(); ?>
		        @if(!empty($errors_all))
		            @foreach($errors->all() as $error)
		                <li>{{$error}}</li>
		            @endforeach
		        @endif
		    @endif

		    @if( session('custom_errors') )
				@foreach(session('custom_errors') as $error)
					<li>{{$error}}</li>
				@endforeach
		    @endif
		</ul>
		</div>
	@endif
@stop





<div style="width=100%">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="{{public_dir}}site-imgs/site/covers/transparent.png">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="{{get_it('site-imgs/site/logo.jpg')}}">
        </div>
        <div class="card-info"> <span class="card-title">Registration Control System</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="fa fa-user fa-fw fa-lg" aria-hidden="true"></span>
                <div class="hidden-xs">Login</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-plus-square fa-fw fa-lg" aria-hidden="true"></span>
                <div class="hidden-xs">Register</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-envelope fa-fw fa-lg" aria-hidden="true"></span>
                <div class="hidden-xs">Forgot Password</div>
            </button>
        </div>
    </div>






<?php

 $uri = Request::segment(2); 

?>


        <div class='panel panel-primary' id='login_box'>
      <div class="tab-content">
        <div class="tab-pane fade in <?php echo ($uri=="login")?"active":"" ?>" id="tab1">




<h2 class='text-center'>Login</h2>
@yield('errors_section')

<div class="clearfix"></div>
<form method='POST' action='{{url("cms-auth/do-login")}}'>
	<table class='table'>
		<tr>
			<td><label>Username Or Email</label></td>
			<td><input type='text' class='form-control' name='usernameOrEmail' placeholder='Enter Your User name OR Your Email' value="{{old('usernameOrEmail')}}" required></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type='password' class='form-control' name='password' placeholder='Enter Password' value="{{old('password')}}" required></td>
		</tr>
	</table>
	<!-- <div class="clearfix"></div> -->
		<button type='submit' class='btn btn-primary col-sm-6'> {!!fa2('sign-in')!!} Login</button>
		<button type='reset' class='btn btn-danger col-sm-6'> {!!fa2('close')!!} Reset Form</button>
</form>


        </div>
        <div class="tab-pane fade in <?php echo ($uri=="register")?"active":"" ?>" id="tab2">

<h2 class='text-center'>Register</h2>
@yield('errors_section')

<div class="clearfix"></div>
<form method='post' action='{{url("cms-auth/do-register")}}'>
	<table class='table'>
		<tr>
			<td><label>User Name</label></td>
			<td><input type='text' class='form-control' name='username' value="{{old('username')}}" placeholder='Enter User Name' required></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type='email' class='form-control' name='email' placeholder='Enter Your Email' value="{{old('email')}}" required></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type='password' class='form-control' name='password' placeholder='Enter Password' value="{{old('password')}}" required></td>
		</tr>				
		<tr>
			<td><label>Confirm Password</label></td>
			<td><input type='password' class='form-control' name='password_confirmation' placeholder='Enter Confirm Password' value="{{old('password_confirmation')}}" required></td>
		</tr>
	</table>
	<!-- <div class="clearfix"></div> -->
		<button type='submit' class='btn btn-primary col-sm-6'> {!!fa2('plus-square')!!} Sign Up</button>
		<button type='reset' class='btn btn-danger col-sm-6'> {!!fa2('close')!!} Reset Form</button>
</form>


        </div>
        <div class="tab-pane fade in <?php echo ($uri=="forgot")?"active":"" ?>" id="tab3">

<h2 class='text-center'>Forgot Password</h2>
@yield('errors_section')

<div class="clearfix"></div>
<form method='post' action='{{url("cms-auth/do-forgot-password")}}'>
	<table class='table'>
		<tr>
			<td><label>Email</label></td>
			<td>
				<input type='email' class='form-control' placeholder='Enter Your Email' value="{{old('email')}}" required>
				<p class='help-block'>We will send a recovery message to your email</p>
			</td>
		</tr>
	</table>
	<!-- <div class="clearfix"></div> -->
		<button type='submit' class='btn btn-primary col-sm-6'> {!!fa2('envelope')!!} Send Email</button>
		<button type='reset' class='btn btn-danger col-sm-6'> {!!fa2('close')!!} Reset Form</button>
</form>

        </div>
      </div>
    </div>
    
    </div>




</body>
</html>