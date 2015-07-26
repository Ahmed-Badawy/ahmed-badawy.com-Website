
@section('wysiwygJS')
@overwrite


<div class="col-sm-9">
    <div class='col-sm-12'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"></h1><h2 class='text-center'>الإعدادات</h2>
            </div>
            <div class="panel-body" dir="rtl">




                <form method="post" action="{{url("admin/update-options-value")}}" style="border:2px solid #ccc;padding:10px;border-radius:15px">
                    <h3 >تغيير فيديو الأنترو</h3>
                    <div class="clearfix"></div>

                    <button type="submit" class="form-control col-sm-2">أحفظ الرابط الجديد</button>
                    <div class="col-sm-10">
                        <input type="hidden" name="name" value="intro_video">
                        <input type="text" class="form-control widthfix" value="{{$intro_video}}" name="desc">
                    </div>

                    <div class="clearfix"></div>
                </form>

                <br>


                <form method="post" action="{{url("admin/update-options-value")}}" style="border:2px solid #ccc;padding:10px;border-radius:15px">
                    <h3 >تغيير الفيديو التوضيحى</h3>
                    <div class="clearfix"></div>

                    <button type="submit" class="form-control col-sm-2">أحفظ الرابط الجديد</button>
                    <div class="col-sm-10">
                        <input type="hidden" name="name" value="demo_video">
                        <input type="text" class="form-control widthfix" value="{{$demo_video}}" name="desc">
                    </div>

                    <div class="clearfix"></div>
                </form>

                <br>



                <form method="post" action="{{url("admin/update-map")}}" style="border:2px solid #ccc;padding:10px;border-radius:15px">
                    <h3 >تغيير إعدادات الخريطة</h3>
                    <div class="clearfix"></div>


                        <table class="widthfix table">
                            <tr>
                                <td>الإحداثيات على الخريطة</td>
                                <td><input type="text" class="form-control input-sm widthfix" value="{{$google_maps_embed_api_coordinates}}" name="google_maps_embed_api_coordinates"></td>
                            </tr>
                            <tr>
                                <td>درجة التركيز على الخريطة</td>
                                <td>
                                    <select name="google_maps_embed_api_zoom" class="form-control input-sm widthfix">
                                        @for($i=0;$i<=21;$i++)
                                            <option value="{{$i}}" <?php if($google_maps_embed_api_zoom==$i)echo "selected"; ?> >{{$i}}</option>
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>نوع الخريطة</td>
                                <td>
                                    <select name="google_maps_embed_api_maptype" class="form-control input-sm widthfix">
                                        <option value="roadmap" <?php if($google_maps_embed_api_maptype=="roadmap")echo "selected"; ?> >Roadmap</option>
                                        <option value="satellite" <?php if($google_maps_embed_api_maptype=="satellite")echo "selected"; ?>>Satellite</option>
                                    </select>
                                </td>
                            </tr>
                        </table>


                    <button type="submit" class="form-control col-sm-2">أحفظ التغيرات</button>



                    <div class="clearfix"></div>
                </form>

                <br>





        </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
</script>