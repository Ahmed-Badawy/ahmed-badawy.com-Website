
<script>
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '715112605276746',
//    appId      : '261509464055095',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });

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

function post(){
    FB.ui({
      method: 'feed',
      link: 'https://developers.facebook.com/docs/',
      caption: 'An example caption',
    }, function(response){ console.log(response); });
}
</script>
    



    <div class="jumbotron page_head">
      <div class="container">
      <br>
<h1>FaceBook SDK Test !</h1>
<p>Check your connection to the facebook SDK</p>
      </div>
    </div>



<div class="row">
  <div class="col-md-10 col-md-offset-1 bordered-box">

<h1>Like Box</h1>
<a class='btn btn-danger' href="https://developers.facebook.com/docs/plugins/">Link to Like Box</a>
<h5>The Like Box is a special version of the Like Button designed only for Facebook Pages. It allows admins to promote their Pages and embed a simple feed of content from a Page into other sites.
<br>
in this case it likes the spidro.website facebook page.
</h5>
<div class="fb-like-box" data-href="https://www.facebook.com/spidro.website" data-width="400" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
<hr>



<h1>Like Button</h1>
<a class='btn btn-danger' href="https://developers.facebook.com/docs/plugins/">Link to Like Button</a>
<h5>The Like button is the quickest way for people to share content with their friends.
A single click on the Like button will 'like' pieces of content on the web and share them on Facebook. You can also display a Share button next to the Like button to let people add a personal message and customize who they share with.
<br> you can disable & enable the share button. <br>
for shares there is a tester to see what gets shared:  <a href="https://developers.facebook.com/tools/debug/og/object" class="btn btn-danger btn-xs">Test what gets shared</a>
</h5>
<div class="fb-like" data-href="http://ahmed-badawy.com/site/cv" data-width="300" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<hr>



<h1>Share Button</h1>
<a class='btn btn-danger' href="https://developers.facebook.com/docs/plugins/">Link to Share Button</a>
<h5>
The Share button lets people add a personalized message to links before sharing on their timeline, in groups, or to their friends via a Facebook Message.
</h5>
<div class="fb-share-button" data-href="http://ahmed-badawy.com/site/cv" data-type="button_count"></div>
<hr>



<h1>Embedded Posts</h1>
<a class='btn btn-danger' href="https://developers.facebook.com/docs/plugins/">Link to Embedded Posts</a>
<h5>Embedded Posts are a simple way to put public posts - by a Page or a person on Facebook - into the content of your web site or web page. Only public posts from Facebook Pages and profiles can be embedded.
</h5>

<div class="fb-post" data-href="https://www.facebook.com/Ahmed.Badawy.Elsaid/posts/633373503421933" data-width="500"></div>
<hr>


<h1>Comments</h1>
<a class='btn btn-danger' href="http://ahmed-badawy.com/site/cv">Link to Comments</a>
<h5>
  The Comments box lets people comment on content on your site using their Facebook profile and shows this activity to their friends in news feed. It also contains built-in moderation tools and special social relevance ranking.
</h5>
<div class="fb-comments" data-href="http://badawika.com/cv" data-numposts="5" data-colorscheme="dark"></div>
<hr>


<h1>Follow</h1>
<a class='btn btn-danger' href="https://developers.facebook.com/docs/plugins/">Link to Follow</a>
<h5>
  The Follow button lets people subscribe to the public updates of others on Facebook.
</h5>
<div class="fb-follow" data-href="https://www.facebook.com/spidro.website" data-colorscheme="dark" data-layout="standard" data-show-faces="true"></div>
<hr>


<h1>Facepile</h1>
<a class='btn btn-danger' href="https://developers.facebook.com/docs/plugins/">Link to Facepile</a>
<h5>The Facepile plugin displays the Facebook profile photos of people who have connected with your Facebook page or app.
</h5>
<div class="fb-facepile" data-app-id="261509464055095" data-href="https://www.facebook.com/spidro.website" data-action="like" data-max-rows="2" data-colorscheme="dark" data-size="large" data-show-count="true"></div>
<hr>


<h1>Send</h1>
<a class='btn btn-danger' href="https://developers.facebook.com/docs/plugins/">Link to Send</a>
<h5>The Send button lets people privately send content on your site to one or more friends in a Facebook message, to an email address, or share it with a Facebook group.
</h5>
<div class="fb-send" data-href="http://ahmed-badawy.com/site/cv" data-colorscheme="dark"></div>




	</div>
</div>
