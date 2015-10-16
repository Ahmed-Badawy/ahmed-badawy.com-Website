{!! get_angular("dynamic_text") !!}
@section('head_add')
	{!! get_it("plugins/sweetAlert/sweet-alert.min.css") !!}
	{!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}
@overwrite



<!-- Main -->
<div class="container" ng-app="myApp">
<div class="row">




	<div class="well" id="project_desc">
		<div>
			<img class="img-thumbnail img-responsive" src='{!! imgs_dir.$page_img !!}'>
		</div>
		<h3> {!!fa2($logo)!!} Book Sharing System !</h3>
		<div>
			<p>Read books online. Aslo you can download them.</p>
			<p class='arabic' dir='rtl' >ﻫﻮ ﻋﺒﺎﺭﺓ ﻋﻦ ﻧﻈﺎﻡ ﻟﻤﺸﺎﺭﻛﺔ اﻟﻜﺘﺐ ﻭ اﻟﻮﺛﺎﺋﻖ. ﻭ ﻳﻤﻜﻨﻚ ﻗﺮاءﺓ اﻟﻜﺘﺐ ﻭ اﻟﻮﺛﺎﺋﻖ ﻣﺒﺎﺷﺮﺓ ﻋﻠﻰ اﻷﻧﺘﺮﻧﺖ ﺃﻭ ﺗﻨﺰﻳﻠﻬﺎ ﻋﻠﻰ ﺟﻬﺎﺯﻙ.</p>

			<button class="btn btn-primary" data-toggle="modal" data-target="#short_info">
				{!! fa2('question-circle') !!} <b>What is This App ?</b>
			</button>

		</div>
		<div class="clearfix"></div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="short_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h3 class="modal-title" id="myModalLabel">What Does This APP Do ?</h3>
				</div>
				<div class="modal-body">
					<h3 class="bold">Book Sharing System!</h3>
					<p>It's a system to share books & documents. you can read or download the books & documents & share books with other people. or you can ban/report/delete/categorize books.</p>
					<hr>
					<p class='arabic' dir='rtl'>ﻫﻮ ﻋﺒﺎﺭﺓ ﻋﻦ ﻧﻈﺎﻡ ﻟﻤﺸﺎﺭﻛﺔ اﻟﻜﺘﺐ ﻭ اﻟﻮﺛﺎﺋﻖ اﻟﻬﺎﻣﺔ. ﻭ ﻳﻤﻜﻨﻚ ﻗﺮاءﺓ اﻟﻜﺘﺐ ﻭ اﻟﻮﺛﺎﺋﻖ ﻣﺒﺎﺷﺮﺓ ﻋﻠﻰ اﻷﻧﺘﺮﻧﺖ ﺃﻭ ﺗﻨﺰﻳﻠﻬﺎ ﻋﻠﻰ ﺟﻬﺎﺯﻙ. ﻫﺬا اﻟﻨﻈﺎﻡ ﻳﺴﺎﻋﺪﻙ ﻋﻠﻰ ﻣﺸﺎﺭﻛﺔ اﻟﻜﺘﺐ ﻭ اﻟﻮﺛﺎﺋﻖ ﻭ ﺗﺼﻨﻴﻔﻬﺎ ﺗﺒﻌﺎ ﻟﻠﻤﺤﺘﻮﻯ. ﻭ ﻳﻤﻜﻨﻚ ﻋﻤﻞ ( ﺣﻈﺮ \ ﺣﺬﻑ \ ﺇﺑﻼﻍ \ ﺗﺼﻨﻴﻒ ) ﻟﻠﻮﺛﺎﺋﻖ ﻭ اﻟﻜﺘﺐ اﻟﻤﺨﺘﻠﻔﺔ.</p>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>




<ng-view></ng-view>


</div>
</div>
<!-- /Main -->


