
@section("wysiwyg")
    @include("CMS.-Layouts.flatty.wysiwygJS_config")
@show


<div class="col-sm-12">
    <div class='col-sm-12'>
        <div class="panel panel-default arabic" dir='rtl'>



            <div class="panel-heading">
                <h1 class="panel-title"></h1><h2 class='text-center arabic'>الصفحة الرئيسية</h2>
            </div>
            <div class="panel-body">


                        <div class="input-group col-sm-12" dir="rtl">


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post">
                                    <label>نص الخدمات</label>
                                    <input type="hidden" name="name" value="main_text_1">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_1->desc }}
                                    </textarea>
                                    <br>
                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post">
                                    <label>نص الدومين</label>
                                    <input type="hidden" name="name" value="main_text_4">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_4->desc }}
                                    </textarea>
                                    <br>
                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post">
                                    <label>نص الأسعار</label>
                                    <input type="hidden" name="name" value="main_text_2">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_2->desc }}
                                    </textarea>
                                    <br>
                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>

                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post">
                                    <label>نص الإحصائيات</label>
                                    <input type="hidden" name="name" value="main_text_3">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_3->desc }}
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