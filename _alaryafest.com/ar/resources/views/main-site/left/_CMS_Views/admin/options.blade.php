
@section('wysiwygJS')
@overwrite


<div class="col-sm-9">
    <div class='col-sm-12'>
            <div dir="rtl">


                <br>

<form method="post" action="{{url("admin/update-options-values")}}" >


                    <h2 class="english bright bright-background">Media Links</h2>

    <table class="widthfix table">
        <tr>
            <td>رابط الفيديو التوضيحى</td>
            <td><input type="text" class="form-control input-sm widthfix english" dir="ltr" value="{{$demo_video->desc}}" name="myoptions[demo_video]"></td>
        </tr>
    </table>

    <hr>


    <h2 class="bright bright-background">إعدادات التواصل الإجتماعى</h2>
    <div class="clearfix"></div>

    <table class="widthfix table">
        <tr>
            <td>رابط الـ  facebook</td>
            <td><input type="text" class="form-control input-sm widthfix english" dir="ltr" value="{{$facebook_link->desc}}" name="myoptions[facebook_link]"></td>
        </tr>
        <tr>
            <td>رابط الـ google+</td>
            <td><input type="text" class="form-control input-sm widthfix english" dir="ltr" value="{{$google_plus_link->desc}}" name="myoptions[google_plus_link]"></td>

        </tr>
        <tr>
            <td>رابط الـ twitter</td>
            <td><input type="text" class="form-control input-sm widthfix english" dir="ltr" value="{{$twitter_link->desc}}" name="myoptions[twitter_link]"></td>
        </tr>
        <tr>
            <td>رابط الـ youtube</td>
            <td><input type="text" class="form-control input-sm widthfix english" dir="ltr" value="{{$youtube_link->desc}}" name="myoptions[youtube_link]"></td>
        </tr>
    </table>

    <hr>


     <h2 class="bright bright-background" > إعدادات الخريطة</h2>
                    <div class="clearfix"></div>

                        <table class="widthfix table">
                            <tr>
                                <td>الإحداثيات على الخريطة</td>
                                <td><input type="text" class="form-control input-sm widthfix english" dir="ltr" value="{{$google_maps_embed_api_coordinates->desc}}" name="myoptions[google_maps_embed_api_coordinates]"></td>
                            </tr>
                            <tr>
                                <td>درجة التركيز على الخريطة</td>
                                <td>
                                    <select name="myoptions[google_maps_embed_api_zoom]" class="form-control input-sm widthfix english" dir="ltr">
                                        @for($i=0;$i<=21;$i++)
                                            <option value="{{$i}}" <?php if($google_maps_embed_api_zoom->desc==$i)echo "selected"; ?> >{{$i}}</option>
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>نوع الخريطة</td>
                                <td>
                                    <select name="myoptions[google_maps_embed_api_maptype]" class="form-control input-sm widthfix english" dir="ltr">
                                        <option value="roadmap" <?php if($google_maps_embed_api_maptype->desc=="roadmap")echo "selected"; ?> >Roadmap</option>
                                        <option value="satellite" <?php if($google_maps_embed_api_maptype->desc=="satellite")echo "selected"; ?>>Satellite</option>
                                    </select>
                                </td>
                            </tr>
                        </table>


                    <button type="submit" class="btn btn-lg btn-block">أحفظ التغيرات</button>
                    <div class="clearfix"></div>
</form>
                <br>



</div>




    </div>
</div>



<script type="text/javascript">
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
</script>