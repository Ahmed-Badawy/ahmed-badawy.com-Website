
@section("wysiwyg")
    @include("CMS.-Layouts.flatty.wysiwygJS_config")
@show


<div class="col-sm-12">
    <div class='col-sm-12'>
        <div class="panel panel-default arabic" dir='rtl'>



            <div class="panel-heading">
                <h1 class="panel-title"></h1><h2 class='text-center arabic'>صفحة من نحن</h2>
            </div>
            <div class="panel-body">


                        <div class="input-group col-sm-12" dir="rtl">


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post">
                                    <label>نص من نحن</label>
                                    <input type="hidden" name="name" value="main_text_5">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_5->desc }}
                                    </textarea>
                                    <br>
                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post">
                                    <label>نص العروض</label>
                                    <input type="hidden" name="name" value="main_text_6">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_6->desc }}
                                    </textarea>
                                    <br>
                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>




                        </div>

                        <br>



            </div>




        </div>
    </div>
</div>