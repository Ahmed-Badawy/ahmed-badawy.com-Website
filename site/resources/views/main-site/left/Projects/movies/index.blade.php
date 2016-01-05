{!! get_angular("movies") !!}

@section("head_add")
    {!! get_it('custom_css/movies.css') !!}
    {!! get_it('custom/css/custom.css') !!}
@stop


<div class="box container" id="project_desc">
    <div>
        <img class="img-thumbnail img-responsive" src='{!! imgs_dir.$page_img !!}'>
    </div>
    <h3> {!!fa2($logo)!!} Movie Indexer !</h3>
    <div>
        <p>This is A movies information viewer application. it will view Movies & it's actors, producers, writers, directors, composers, also will view lots & losts of info on the selected movie.</p>
        <p class='arabic' dir='rtl' >هو برنامج يستخدم لعرض الأفلام و ترتيبها فى البوكس أوفيس. و يعرض أيضا الممثلون و جميع القائمون على الفيلم. يمكن إستخدامه لعرض جميع أفلام ممثل ما أو جميع الأفلام من فئات معينة (مثل الرعب أو الدراما إلخ ). و يكنك ترتيب و فلترة هذه الأفلام المعروضة.</p>

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
                <h3  class="modal-title" id="myModalLabel"> {!!fa2($logo)!!} Movie Indexer !</h3>
            </div>
            <div class="modal-body">
                <p>This is A movies information viewer application. it will view Movies & it's actors, producers, writers, directors, composers, also will view lots & losts of info on the selected movie.</p>
                <hr>
                <p class='arabic' dir='rtl' >هو برنامج يستخدم لعرض الأفلام و ترتيبها فى البوكس أوفيس. و يعرض أيضا الممثلون و جميع القائمون على الفيلم. يمكن إستخدامه لعرض جميع أفلام ممثل ما أو جميع الأفلام من فئات معينة (مثل الرعب أو الدراما إلخ ). و يكنك ترتيب و فلترة هذه الأفلام المعروضة.</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Main -->
<div class="container-fluid" ng-app="myApp">
<div class="row" ng-controller='main_controller'>

    @include( get_location("Projects.movies.partials.left-col" ) )


<div class="col-sm-10">
<h1 class='text-center bright'>Movies Indexer</h1>
      <ng-view></ng-view>
</div><!--/col-span-9-->


</div>
</div>
<!-- /Main -->


