

<div class="divider section">
	<div class="bg-holder" style="background-image:url({{get_it("site-files/Asol/img/about-us.png")}})">
		<div class="container">
			<div class="hero">
				
<p></p>
			</div>
		</div>
	</div>
</div>


 	<div id="primary" class="section">
		<div class="container">
				

<div class="hero">
	<h1>منتجاتنا</h1>
	<p>تعرف على جميع منتجات أصول للدواجن</p>
</div>
<div class="entry-content">
	
					
<div class="portfolio">
						
						<ul class="isotope clearfix">
							
							@foreach($products as $con)
							<li class="item block-pro">
							     <img src="{{get_it("site-imgs/asol/products/".$con->img)}}" class="attachment-brick_thumb wp-post-image" alt="" />							
							     <div class="hover">
								      <img src="{{get_it("site-files/Asol/img/ico_search.png")}}" alt="">
								      <h4>{{$con->name}}</h4>
								      
								 </div>
							</li>
							@endforeach
							
						</ul>
						
					</div>
					

</div><!-- .entry-content -->

		</div><!-- #content -->
	</div><!-- #primary -->
    
