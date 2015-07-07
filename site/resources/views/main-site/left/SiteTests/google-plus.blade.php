@section('js_add')
<script>
function main_func(){
	// This sample assumes a client object has been created.
	// To learn more about creating a client, check out the starter:
	//  https://developers.google.com/+/quickstart/javascript
	gapi.client.load('plus','v1', function(){
	 var request = gapi.client.plus.people.list({
	   'userId': 'me',
	   'collection': 'visible'
	 });
	 request.execute(function(resp) {
	   console.log('Num people visible:' + resp.totalItems);
	 });
	});

	// This sample assumes a client object has been created.
	// To learn more about creating a client, check out the starter:
	//  https://developers.google.com/+/quickstart/javascript
	gapi.client.load('plus','v1', function(){
	 var request = gapi.client.plus.people.get({
	   'userId': 'me'
	 });
	 request.execute(function(resp) {
	   console.log('Retrieved profile for:' + resp.displayName);
	 });
	});
}
window.onload(main_func());
</script>
@stop


    <div class="jumbotron page_head">
        <h1>Google Plus Interactions !</h1>
<p>Check your connection to the Google+ SDK</p>
      </div>
    </div>


<div class="row">

<div class="col-md-6 col-md-offset-3 bordered-box">






<h2>Google+ +1 Button</h2>
<a href="https://developers.google.com/+/web/+1button/" class="btn btn-primary">Link to +1 docs</a>
<br><br>
<div class="g-plusone" data-href='http://ahmed-badawy.com/site/cv' data-size="tall"></div>
<hr>


<h2>Google+ Share Link</h2>
<a href="https://developers.google.com/+/web/share/" class="btn btn-primary">Link to share docs</a>
<br><br>
<div class="g-plus" data-action="share" data-annotation="bubble" data-height="60" data-href='http://ahmed-badawy.com/site/cv'></div>
<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60" data-href='http://ahmed-badawy.com/site/cv' data-lang='en'></div>
<hr>

<hr>


</div>
</div>


<script type="text/javascript" src="https://apis.google.com/js/platform.js">
  {lang: 'ar'}
</script>