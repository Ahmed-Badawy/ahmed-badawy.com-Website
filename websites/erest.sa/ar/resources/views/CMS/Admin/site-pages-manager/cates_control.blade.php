
@section("wysiwyg")
    @include("CMS.-Layouts.flatty.wysiwygJS_config")
@show






@section('angular_area')
    {!! get_angular("main","_CMS") !!}
@overwrite

<script>
    var cates = {!!$cates!!};
    var elms = {!!$elements!!};
</script>


    <div class="col-sm-12" ng-app="myApp">
        <div class="panel panel-default" ng-controller="cates_control">


            <div class="panel-heading">
                <h1 class="panel-title"></h1><h2 class='text-center'>لوحة تحكم الأقسام</h2>
            </div>
            <div class="panel-body">
                <div class="input-group col-sm-12 arabic" dir="rtl">


                <div class="btn-group btn-group-justified arabic">
                    <a class="btn btn-primary" ng-click="q.cate_name=''">كل المجموعات</a>
                    <a ng-repeat="n in gene_data.cates" class="btn btn-inverse" ng-click="q.cate_name=n.cate_name">@{{ n.cate_name }}</a>
                </div>
<div class="clearfix"></div>
                    <br>


                    <input type="text" ng-model="q.cate_name" class="form-control" placeholder="أبحث عن عنصر">
                    <br>

                    <div ng-repeat="elm in gene_data.elements | filter:q" dir="rtl">
                        <hr>
                            <form method='post' action="@{{ 'site-management-modify-elm/'+elm.elm_id }}" enctype="multipart/form-data">

                                <div class="col-sm-10" ng-show="edited_elm.elm_id!=elm.elm_id">
                                    <b>@{{ elm.elm_id + "- " +elm.elm_name}}</b>
                                    <p ng-bind="elm.elm_desc"></p>

                                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">{!! fa2('plus-square') !!}</button>
                                    <a ng-click="edited_elm=elm" class="btn btn-primary btn-sm">{!! fa2('edit') !!}</a>
                                    <a ng-click="activate_delete_confirmation('element',elm.elm_id)" class='btn btn-sm btn-danger'>{!! fa2('trash') !!}</a>
                                    <span class="label label-default">@{{ elm.cate_name }}</span>
                                </div>

                                <div class="col-sm-10" ng-show="edited_elm.elm_id==elm.elm_id">
                                    <input type='text' class='form-control widthfix' name="elm_name" value="@{{elm.elm_name}}" placeholder="أسم العنصر">
                                    <textarea rows='4' class='form-control widthfix' name='elm_desc' placeholder="نص العنصر" id="editor1">@{{elm.elm_desc}}</textarea>

                                    <div class="fileUpload btn btn-primary btn-sm">
                                        <span>تغيير الصورة</span>
                                        <input  type="file" class="upload uploadBtn" name="upload_img"/>
                                        <input class="uploadFile" placeholder="أختر صورة جديدة" disabled="disabled" style="color:black"/>
                                    </div>

                                    <div class="btn btn-primary btn-sm">
                                        <span>أولوية العرض</span>
                                        <input type="number" style="color:black" placeholder="حدد أولوية العرض" value="@{{elm.priority}}" name="elm_priority">
                                    </div>

                                    <button type='submit' class='btn btn-primary col-sm-6'>{!! fa2('save') !!} أحفظ التغيرات</button>

                                    <div class="col-sm-6">
                                    <select name="cate_name" id="" class="form-control" ng-model="elm.cate_name">
                                        @foreach($cates as $cate)
                                            <option value="{{$cate->cate_name}}">{{$cate->cate_name}}</option>
                                        @endforeach
                                    </select>
                                    </div>


                                </div>
                                <img ng-src="{{imgs_dir."_CMS/elements/"}}@{{ elm.img }}" alt="@{{ elm.name }}" class="img img-rounded col-sm-2">
                                <div class="clearfix"></div>
                            </form>
                        </div>


                            {{--<div class="element_box">--}}
                                {{--<div class="col-sm-10">--}}
                                    {{--<h4 class=""><b>@{{ $index+1 }}- </b> @{{ elm.elm_name }}</h4>--}}
                                    {{--<p>@{{ elm.elm_desc }}</p>--}}
                                    {{--<span class="label label-sm label-default">@{{ elm.cate_name }}</span>--}}
                                    {{--<a class="btn btn-danger btn-xs" href="{{ url('admin/delete-item/element') }}/@{{elm.elm_id}}">{!! fa2('trash') !!}</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-2">--}}
                                    {{--<img ng-src="{{imgs_dir."_CMS/elements/"}}@{{ elm.img }}" alt="@{{ elm.name }}" class="img img-rounded" style="border:1px solid #ccc;max-height:200px;">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}


<div class="clearfix"></div>

                    <hr>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#myModal">أضف عنصر جديد</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    @include('CMS.admin.site-pages-manager.modals.new_item')
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>






        </div>
</div>




<script type="text/javascript">
    $(".delete_button").on('click',function(e){
        console.log("hello");
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
