
@section("wysiwyg")
    @include("CMS.-Layouts.flatty.wysiwygJS_config")
@show


<div class="col-sm-12">
    <div class='col-sm-12'>
        <div class="panel panel-default arabic" dir='rtl'>



            <div class="panel-heading">
                <h1 class="panel-title"></h1><h2 class='text-center arabic'>صفحات الخدمات</h2>
            </div>
            <div class="panel-body">


                        <div class="input-group col-sm-12" dir="rtl">


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post" enctype="multipart/form-data">
                                    <label>التصميم</label>
                                    <input type="hidden" name="name" value="main_text_8">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_8->desc }}
                                    </textarea>
                                    <br>

                                    <img src="{{Uploaded_imgs}}options/{{$main_text_8->img}}" alt="" width="70" height="50">
                                    <div class="fileUpload btn btn-primary btn-sm">
                                        <span>تغيير الصورة</span>
                                        <input  type="file" class="upload uploadBtn" name="upload_img"/>
                                        <input class="uploadFile" placeholder="أختر صورة جديدة" disabled="disabled" style="color:black"/>
                                    </div>


                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post" enctype="multipart/form-data">
                                    <label>البرمجة</label>
                                    <input type="hidden" name="name" value="main_text_9">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_9->desc }}
                                    </textarea>
                                    <br>

                                    <img src="{{Uploaded_imgs}}options/{{$main_text_9->img}}" alt="" width="70" height="50">
                                    <div class="fileUpload btn btn-primary btn-sm">
                                        <span>تغيير الصورة</span>
                                        <input  type="file" class="upload uploadBtn" name="upload_img"/>
                                        <input class="uploadFile" placeholder="أختر صورة جديدة" disabled="disabled" style="color:black"/>
                                    </div>


                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post" enctype="multipart/form-data">
                                    <label>تسويق إلكترونى</label>
                                    <input type="hidden" name="name" value="main_text_10">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_10->desc }}
                                    </textarea>
                                    <br>

                                    <img src="{{Uploaded_imgs}}options/{{$main_text_10->img}}" alt="" width="70" height="50">
                                    <div class="fileUpload btn btn-primary btn-sm">
                                        <span>تغيير الصورة</span>
                                        <input  type="file" class="upload uploadBtn" name="upload_img"/>
                                        <input class="uploadFile" placeholder="أختر صورة جديدة" disabled="disabled" style="color:black"/>
                                    </div>


                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post" enctype="multipart/form-data">
                                    <label>رسائل SMS</label>
                                    <input type="hidden" name="name" value="main_text_11">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_11->desc }}
                                    </textarea>
                                    <br>

                                    <img src="{{Uploaded_imgs}}options/{{$main_text_11->img}}" alt="" width="70" height="50">
                                    <div class="fileUpload btn btn-primary btn-sm">
                                        <span>تغيير الصورة</span>
                                        <input  type="file" class="upload uploadBtn" name="upload_img"/>
                                        <input class="uploadFile" placeholder="أختر صورة جديدة" disabled="disabled" style="color:black"/>
                                    </div>


                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post" enctype="multipart/form-data">
                                    <label>تطبيقات الجوال</label>
                                    <input type="hidden" name="name" value="main_text_12">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_12->desc }}
                                    </textarea>
                                    <br>

                                    <img src="{{Uploaded_imgs}}options/{{$main_text_12->img}}" alt="" width="70" height="50">
                                    <div class="fileUpload btn btn-primary btn-sm">
                                        <span>تغيير الصورة</span>
                                        <input  type="file" class="upload uploadBtn" name="upload_img"/>
                                        <input class="uploadFile" placeholder="أختر صورة جديدة" disabled="disabled" style="color:black"/>
                                    </div>


                                    <button class="btn btn-default">أحفظ التعديلات</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <br>


                            <div class="options_box">
                                <form action="{{url("cms-admin/update-options-value")}}" method="post" enctype="multipart/form-data">
                                    <label>جميع أعمال الطباعة</label>
                                    <input type="hidden" name="name" value="main_text_13">
                                    <textarea id="editor1" name="desc" rows="8" class='widthfix form-control'>
                                        {{ $main_text_13->desc }}
                                    </textarea>
                                    <br>

                                    <img src="{{Uploaded_imgs}}options/{{$main_text_13->img}}" alt="" width="70" height="50">
                                    <div class="fileUpload btn btn-primary btn-sm">
                                        <span>تغيير الصورة</span>
                                        <input  type="file" class="upload uploadBtn" name="upload_img"/>
                                        <input class="uploadFile" placeholder="أختر صورة جديدة" disabled="disabled" style="color:black"/>
                                    </div>


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