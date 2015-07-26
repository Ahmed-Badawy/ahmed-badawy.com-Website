

<div class="divider section">
	<div class="bg-holder" style="background-image:url({{get_it("site-files/_CMS/img/about-us.png")}})">
		<div class="container">
			<div class="hero">
				
<p></p>
			</div>
		</div>
	</div>
</div>


 	<div id="primary" class="section">
		<div class="container">
				

<div class="contributor">

					<div class="hero">
						<h1> المساهمون </h1>
						
					</div>

@foreach($contributors as $con)
	<div class="contr">
		<img src="{{get_it("site-imgs/_CMS/contributors/".$con->img)}}" />
		<h4 class='text-center'>{{$con->name}}</h4>
		<p>{{$con->desc}}</p>
	</div>
@endforeach


</div>


		</div><!-- #content -->
	</div><!-- #primary -->
     
