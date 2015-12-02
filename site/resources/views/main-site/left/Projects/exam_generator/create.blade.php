{!! get_angular("exam-generator") !!}



<div ng-app='myApp'>
    <div class="container-fluid" ng-controller="creatorController">

        <div class="col-xs-12">

            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title"></h1><h2 class='text-center'>Exams Generator - <span class="arabic">مولد الإمتحانات</span></h2>
                    </div>
                    <div class="panel-body">
                        <h5>

<h3 class="page-header">Exam Elements Control - <spane class="arabic">التحكم فى العناصر</spane></h3>
                            <a href="" class="btn btn-primary btn-lg" ng-click="show_type='question'" data-toggle="modal" data-target=".add_element_modal">Add Question - <span class="arabic">أضف سؤال</span></a>
                            <a href="" class="btn btn-default btn-lg" ng-click="show_type='seperator'" data-toggle="modal" data-target=".add_element_modal">Add Seperator - <span class="arabic">أضف خط فاصل</span></a>
                            <a href="" class="btn btn-default btn-lg" ng-click="show_type='question-header'" data-toggle="modal" data-target=".add_element_modal">Add Question Header - <span class="arabic">أضف رأس سؤال</span></a>
                            <a href="" class="btn btn-default btn-lg" ng-click="show_type='title'" data-toggle="modal" data-target=".add_element_modal">Add Title - <span class="arabic">أضف عنوان</span></a>


                            <div class="modal fade add_element_modal" tabindex="-1" role="dialog" aria-labelledby="AddNewElementModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">


<div ng-show="show_type=='seperator'">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Are you sure ? <span class="arabic">أضف الفاصل</span></h3>
    </div>
    <div class="modal-body">
        <a class="btn btn-primary btn-lg col-xs-6" ng-click="add_element('seperator')">{!! fa2('thumbs-up') !!} Add Seperator</a>
        <a class="btn btn-danger btn-lg col-xs-6" data-dismiss="modal" aria-label="Close">{!! fa2('remove') !!} No</a>
        <div class="clearfix"></div>
    </div>
</div>

<div ng-show="show_type=='question-header'">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add Question Header ? <span class="arabic">أضف رأس للأسئلة</span></h3>
    </div>
    <div class="modal-body">
        <label for="question-header-text">Question Header: </label>
        <textarea rows="4" class="form-control widthfix" ng-model="question_header_title"></textarea>
        <br>
        <a class="btn btn-primary btn-lg col-xs-6" ng-click="add_element('question-header',question_header_title)">{!! fa2('thumbs-up') !!} Add Question Header</a>
        <a class="btn btn-danger btn-lg col-xs-6" data-dismiss="modal" aria-label="Close">{!! fa2('remove') !!} No</a>
        <div class="clearfix"></div>
    </div>
</div>

<div ng-show="show_type=='title'">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add A Title ? <span class="arabic">أضف عنوان</span></h3>
    </div>
    <div class="modal-body">
        <label for="question-header-text">Title: </label>
        <textarea rows="4" class="form-control widthfix" ng-model="title_text"></textarea>
        <br>
        <a class="btn btn-primary btn-lg col-xs-6" ng-click="add_element('title',title_text)">{!! fa2('thumbs-up') !!} Add Title</a>
        <a class="btn btn-danger btn-lg col-xs-6" data-dismiss="modal" aria-label="Close">{!! fa2('remove') !!} No</a>
        <div class="clearfix"></div>
    </div>
</div>

<div ng-show="show_type=='question'">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Add A Question ! - <span class="arabic"> أضف سؤال </span></h3>
    </div>
    <div class="modal-body">

        <label for="">Choose Question Type</label>
        <select class="form-control widthfix" ng-model="question_type"
                ng-init="question_type='rw'"
                >
            <option value="tf">True Or False Question</option>
            <option value="choose">Choose from Choices</option>
            <option value="attach">Attach Two Phrases</option>
        </select>

        <div ng-show="question_type=='tf'" class="box">
            <h4 class="text-center">True Or False Question</h4>
            <label for="">Question Text:</label>
            <input type="text" ng-model="tf.text" class="form-control widthfix">
            <br>
            <label for="">The Answer:</label>
            <label for="">True @{{fa2('check-circle-o')}}</label> <input type="radio" class="form-control" ng-model="tf.ans" value="true">
            <label for="">False @{{fa2('remove-circle-o')}}</label> <input type="radio" class="form-control" ng-model="tf.ans" value="false">
        </div>

        <br>
        <a class="btn btn-primary btn-lg col-xs-6" ng-click="add_element('question')">{!! fa2('thumbs-up') !!} Add Seperator</a>
        <a class="btn btn-danger btn-lg col-xs-6" data-dismiss="modal" aria-label="Close">{!! fa2('remove') !!} No</a>
        <div class="clearfix"></div>
    </div>
</div>


                                    </div>
                                </div>
                            </div>


<h3 class="page-header"> The Exam - <spane class="arabic">المنظر البدائى للإمتحان</spane></h3>


                        </h5>
                    </div>
                </div>
            </div><!--/row-->

        </div>


    </div><!--/row-->
</div>

