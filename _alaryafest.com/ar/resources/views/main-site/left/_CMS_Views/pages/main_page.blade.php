<div class="container">
	<div class="body-content">
		<div class="row">
			<div class="col-md-12">
				<div class="about-home">

					{!! $main_text_1->desc !!}


				</div>
			</div>

			<div class="col-md-12">
				<div class="projects">
					<div class="col-md-12">
						<h3 class="tit-pro">
							مشاريعنا
						</h3>
					</div>

					@foreach($projects as $project)
						<div class="col-md-4">
							<div class="holder smooth">
								<img src="{!! get_it('site-imgs/_CMS/projects/'.$project->img) !!}" alt="Web Tutorial Plus - Demo" />
								<div class="go-left">
									{{$project->name}}
								</div>
							</div>
						</div>
					@endforeach


				</div>
			</div>

		</div>
	</div>




</div>
