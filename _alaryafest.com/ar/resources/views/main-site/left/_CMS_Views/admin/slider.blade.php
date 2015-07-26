@section('wysiwygJS')
@overwrite


<div class="col-sm-9">
    <div class='col-sm-12'>
        <div class="panel panel-default">



            <div class="panel-heading">
                <h1 class="panel-title"></h1><h2 class='text-center english'>Slider Images</h2>
            </div>



            <div class="panel-body">

                <h4 class="text-center">لا تنسى الضغط على زر حفظ التغيرات على كل عنصر يتم تغيره</h4>
                <hr>


                @foreach($slider_imgs as $con)
                    <div class="contr">

                        <div class="col-sm-10">
                            <form method='post' action="{{url('admin/modify-id/slider/'.$con->id)}}" enctype="multipart/form-data">
                                <input type='text' class='form-control widthfix' name="item_name" value="{{$con->name}}">
                                <textarea rows='4' class='form-control widthfix hidden' name='item_desc'>{{$con->desc}}</textarea>



                                <a id='slider_createModalButton' class='btn btn-default' href="#slider_create" data-toggle='modal' role='button'>{!! fa2('plus-square') !!}</a>

                                <div class="fileUpload btn btn-primary btn-sm">
                                    <span>تغيير الصورة</span>
                                    <input id="uploadBtn" type="file" class="upload" name="upload_img"/>
                                    <input id="uploadFile" placeholder="أختر صورة جديدة" disabled="disabled" style="color:black"/>
                                </div>

                                <div class="btn btn-primary btn-sm">
                                    <span>أختر أولوية العرض</span>
                                    <input type="number" style="color:black" placeholder="حدد أولوية العرض" value="{{$con->priority}}" name="item_priority">
                                </div>


                                <button type='submit' class='btn btn-sm btn-primary'>{!! fa2('save') !!} أحفظ التغيرات</button>

                                {{--<a id='contributers_createModalButton' class='btn btn-default btn-sm' href="#contributers_create" data-toggle='modal' role='button'>{!! fa2('plus-square',['size'=>0]) !!} أضف مساهم جديد</a>--}}
                                {{--<a id='contributers_priorityModalButton' class='btn btn-default btn-sm' href="#contributers_priority" data-toggle='modal' role='button'>{!! fa2('arrow-up',['size'=>0]) !!} تعديل ترتيب العرض</a>--}}

                                <a myhref="{{url('admin/delete-id/slider/'.$con->id)}}" class='btn btn-sm btn-danger delete_button'>{!! fa2('remove') !!} أحذف</a>


                            </form>
                        </div>
                        <img src="{{get_it("site-imgs/_CMS/slider-imgs/".$con->img)}}" class='col-sm-2' />

                    </div>
                    <div class="clearfix"></div>

                    <hr>
                @endforeach

                <div class="clearfix"></div>


                <hr>

                {{--@include(get_location('Osoul.admin.modals.contributor_priority_modal'))--}}
                @include(get_location('_CMS_Views.admin.modals.slider_create_modal'))


            </div>

        </div>
    </div>
</div>



<script type="text/javascript">
    $(".delete_button").on('click',function(e){
        var href = this.getAttribute("myhref");
        swal({
                    title: "هل تريد حذف هذا العنصر ؟",
                    text: "هل توكد عملية الإلغاء!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "نعم أحذفها!",
                    cancelButtonText: "لا تحذف شىء",
                    closeOnConfirm: false
                },
                function(){
                    swal("تم الحذف!", "تم الإنتاء من حذف المنتج بقاعدة البيانات.", "success");
                    setTimeout(function(){
                        window.location.assign(href)
                    }, 1000);
                });
        return false;
    });
</script>

<script type="text/javascript">
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
</script>
