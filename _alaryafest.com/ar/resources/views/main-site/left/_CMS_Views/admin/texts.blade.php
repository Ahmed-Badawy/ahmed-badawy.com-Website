
<div class="col-sm-9">
    <div class='col-sm-12'>
        <div class="panel panel-default">




            <div class="panel-heading">
                <h1 class="panel-title"></h1><h2 class='text-center'>تغيير النصوص بالموقع</h2>
            </div>
            <div class="panel-body">




                <div class="modal-body">


                        <div class="input-group widthfix" dir="rtl">


                            <div class="options_box">
                                <form action="{{url("admin/update-options-value")}}" method="post">
                                    <label>نص الرئيسية</label>
                                    <input type="hidden" name="name" value="main_text_1">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_1->desc }}
                                    </textarea>
                                    <br>
                                    <button class="btn btn-default pull-left">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>

                            <div class="options_box">
                                <form action="{{url("admin/update-options-value")}}" method="post">
                                    <label>نص من نحن</label>
                                    <input type="hidden" name="name" value="main_text_2">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_2->desc }}
                                    </textarea>
                                    <br>
                                    <button class="btn btn-default pull-left">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>

                            <div class="options_box">
                                <form action="{{url("admin/update-options-value")}}" method="post">
                                    <label>نص أتصل بنا</label>
                                    <input type="hidden" name="name" value="main_text_3">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_3->desc }}
                                    </textarea>
                                    <br>
                                    <button class="btn btn-default pull-left">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>

                            <div class="options_box">
                                <form action="{{url("admin/update-options-value")}}" method="post">
                                    <label>ملخص نص من نحن</label>
                                    <input type="hidden" name="name" value="main_text_4">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_4->desc }}
                                    </textarea>
                                    <br>
                                    <button class="btn btn-default pull-left">أحفظ التعديلات</button>
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
</div>