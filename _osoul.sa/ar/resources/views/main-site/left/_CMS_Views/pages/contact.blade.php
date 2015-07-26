
@section('body')
	<body class="page page-id-213 page-template-default" data-spy="scroll" data-target=".navbar">
@overwrite



 	<div id="primary" class="section">
		<div class="container">
				

<div class="hero">
	<h1>اتصل بنا </h1>

{!! $contact_txt_1 !!}

</div>
<div class="entry-content">
	
	<p><div class="row-fluid"><div class="span6">
<div>
<h3>معلومات الاتصال</h3>

{!! $contact_txt_2 !!}

</div>
<p></p></div><div class="span6">
<h3> راسلنا</h3>
<p>
	
	
	<form class="comment_form" id="commentform" method="post" action="http://abcli.edu.sa/wp-admin/admin-ajax.php?action=contact">
						<div class="row-fluid">
							<div class="span6">
								<input type="email" placeholder="البريد الالكتروني" required name="email" id="email"/>
							</div>
							<div class="span6">
								<input type="text" placeholder="الاسم" required name="name" id="name"/>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span8">
								<textarea rows="10" cols="30" placeholder="الرسالة" name="message"></textarea>
							</div>
							<div class="span4">
								<button type="submit" class="btn "><i class="li_paperplane"></i>ارسال </button>
							</div>
						</div>
					</form> </p></div></div> <div class="sc-map"><div class="wrap">

</div></div>
</p>




<iframe src="{{$google_maps_embed_api_link}}" width="100%" height="350" frameborder="0" style="border:0"></iframe>



</div><!-- .entry-content -->

		</div><!-- #content -->
	</div><!-- #primary -->
    
<div class="divider section">
	<div class="bg-holder" style="">
		<div class="container">
			<div class="hero">
				<p></p>
			</div>
		</div>
	</div>
</div>

 
