
<script>


var fb_var = {};
fb_var.status = false;

  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      window.fb_var.status = 'connected';
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      // document.getElementById('status').innerHTML = 'Please log ' +
      //   'into this app.';
      window.fb_var.status = 'not_authorized';

    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      // document.getElementById('status').innerHTML = 'Please log ' +
      //   'into Facebook.';
      window.fb_var.status = 'not_connected';

    }
  }


  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '715112605276746',
//    appId      : '843216262437818',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.1' // use version 2.1
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    // console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
    	window.fb_var.me = response;
      console.log('Successful login for: ' + response.name);
      // document.getElementById('status').innerHTML =
      //   'Thanks for logging in, ' + response.name + '!';
    });
  }



// function fb_login(){
//     FB.login(function(response) {

//         if (response.authResponse) {
//             console.log('Welcome!  Fetching your information.... ');
//             //console.log(response); // dump complete info
//             access_token = response.authResponse.accessToken; //get access token
//             user_id = response.authResponse.userID; //get FB UID

//             FB.api('/me', function(response) {
//             	console.log(response);
//             	console.log("fuck you man");
//                 user_email = response.email; //get user email
//           // you can store this data into your database             
//             });

//         } else {
//             //user hit cancel button
//             console.log('User cancelled login or did not fully authorize.');

//         }
//     }, {
//         scope: 'publish_stream,email'
//     });
// }
</script>









<div class="container" ng-app='myApp'>
  
<div class="jumbotron page_head">
  <h1>FaceBook Login Test !</h1>
  <p>Check your connection to the facebook SDK, & it's Logining System.</p>
</div>


<div class="col-md-10 col-md-offset-1 bordered-box" ng-controller='main_controller'>


<a href="#" ng-click="get_status()" class='btn btn-primary'>Get User Info</a>
<div class="fb-login-button" data-size="medium" data-show-faces="false" data-auto-logout-link="true"></div>


</div>





{!! get_angular() !!}
<script>
var myApp = angular.module('myApp',[]);

	myApp.controller('main_controller',function($scope){

		$scope.get_status = function(){
			console.log(fb_var);
			// var status = checkLoginState();
			// console.log(status);		
			var str = '';
			if(fb_var.status=='connected'){
				for(key in fb_var.me){
					str += key+" : "+fb_var.me[key]+"\n";
				}
				alert(str);
			}
		}
	});
</script>