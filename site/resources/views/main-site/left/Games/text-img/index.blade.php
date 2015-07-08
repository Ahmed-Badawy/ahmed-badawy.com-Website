

    @section('head_add')
        {!! get_it('plugins/bootstrap-social/bootstrap-social.css') !!}
        {!! get_it("plugins/sweetAlert/sweet-alert-arabic.min.css") !!}
        {!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}
    @overwrite

@section('breadcrumbs')
@stop
@section('footer')
@stop

@section("css_add")
    body{
        background: url('{{imgs_dir}}site/covers/cover_1.jpg') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #img{
        visibility: hidden;
        display: none;
    }
    #myCanvas{
        border:2px dashed #333;
        margin:0 auto;
    }
    .img{
        width:600px;
        height:315px;
        border:2px dashed white;
    }
@overwrite

@section('media')
@overwrite


<script type="text/javascript">
    var layout = "{{$layout}}";
</script>
{!! get_angular("text-image","games") !!}



        {{-- @include( get_location("Games.text-img.layouts.".$layout ) ) --}}


<h4 class="bright bright-background arabic" dir='rtl'>
    لعمل برنامج مثل هذا بشعار موقعك أو شعار شركتك وعرضه على الأنترنت لعملائك - 300 جنيه بس - أتصل على 01111988246
</h4>


<div class="text-center container" ng-controller="text_image">

<div ng-show='show_status=="main"'>  
	<img id="img" ng-src="{{get_it('site-imgs/games/text-images/base-images/'.$layout.'.jpg')}}">

    <h3 class='arabic' ng-hide="canvas_show">من فضلك! أضغط على زر <span class='btn btn-primary' ng-click="draw()">توليد الصورة</span> عندما ينتهى متصفحك من تحميل الصفحة بالكامل.</h3>
    <br>

	<canvas id="myCanvas" width="600" height="315" ng-show='canvas_show' class='img-responsive'>
	Your browser does not support the HTML5 canvas tag.
	</canvas>


<!--     <form method="POST" dir='rtl' class='text-center'
           enctype="multipart/form-data"> -->

        <table class="table " dir='rtl' class='text-center'>
            <tr>
                <td class="arabic">النص الاساسى</td>
                <td><input type="text" ng-model="text2" name="text2" class="form-control widthfix arabic" /></td>              
                <td class="arabic">النص الفرعى</td>
                <td><input type="text" ng-model="text1" name="text1" class="form-control widthfix arabic" /></td>
            </tr>

            <tr>
                <td class="arabic">حجم النص الأساسى</td>
                <td><input type="number" ng-model="font_size2" name="font_size2" class="form-control widthfix arabic" /></td>              
                <td class="arabic">حجم النص الفرعى</td>
                <td><input type="number" ng-model="font_size1" name="font_size1" class="form-control widthfix arabic" /></td>
            </tr>

            <tr>
                <td class="arabic">خط النص الأساسى</td>
                <td>
                <select ng-model="font2" class="form-control widthfix arabic">
                    <option value="andalus">Andalus</option>
                    <option value="Aldhabi">Aldhabi</option>
                    <option value="Arabic Typesetting">Arabic Typesetting</option>
                    <option value="Microsoft Uighur">Microsoft Uighur</option>
                    <option value="Myriad Arabic">Myriad Arabic</option>
                    <option value="Adobe Naskh">Adobe Naskh</option>
                    <option value="Simplified Arabic">Simplified Arabic</option>
                    <option value="Traditional Arabic">Traditional Arabic</option>
                    <option value="Urdu Typesetting">Urdu Typesetting</option>
                    <option value="adobe arabic">Adobe Arabic</option>
                </select>
                </td>              
                <td class="arabic">خط النص الفرعى</td>
                <td>
                <select ng-model="font1" class="form-control widthfix arabic">
                	<option value="andalus">Andalus</option>
                	<option value="Aldhabi">Aldhabi</option>
                	<option value="Arabic Typesetting">Arabic Typesetting</option>
                	<option value="Microsoft Uighur">Microsoft Uighur</option>
                	<option value="Myriad Arabic">Myriad Arabic</option>
                	<option value="Adobe Naskh">Adobe Naskh</option>
                	<option value="Simplified Arabic">Simplified Arabic</option>
                	<option value="Traditional Arabic">Traditional Arabic</option>
                	<option value="Urdu Typesetting">Urdu Typesetting</option>
                	<option value="adobe arabic">Adobe Arabic</option>
                </select>
                </td>
            </tr>


        </table>


        <hr/>

        <a href="{{URL::current()}}" class="btn btn-default arabic btn-lg btn-social">أسترجع الإعدادات الأساسية {!!fa2('trash',0)!!}</a>
        <a ng-click="draw()" class="btn btn-default arabic btn-lg btn-social">تحديث الصورة {!!fa2('refresh',0)!!}</a>
{{br(2)}}

        <a ng-click="prepare_img()" class="btn btn-primary btn-lg arabic pull-right">الخطوة التالية {!!fa2('sign-out')!!}</a>
    <!-- </form> -->

</div>




{!! render_loader() !!}
<h1 ng-show="loader" dir='rtl' class='arabic'>قد تستمر هذه المعملية لبضعة دقائق. نرجو الإنتظار.</h1>


<div ng-show='show_status=="final"'>  

    <img class='img' src="{{imgs_dir.'games/text-images/saved-images/'}}@{{saved_img_name}}">

<div class='clearfix'></div>

<!-- ******************************************************************** -->
<div class="btn-group-vertical col-sm-4" role="group">

<h3 class='bright bright-background'>{!!fa2('download',0)!!} Download</h3>
<a class="btn btn-default arabic col-sm-4 btn-lg btn-social" href='@{{share_links.download_link}}'>{!!fa2('download')!!} أحفظ الصورة على جهازك</a>
<a class='btn btn-default arabic col-sm-4 btn-lg btn-social' href="" onClick="window.print();return false">{!!fa2('print')!!} أطبع الصورة</a>
</div>
<!-- ******************************************************************** -->


<!-- *******************************Send************************************* -->
<div class="btn-group-vertical col-sm-4" role="group">

<h3 class='bright bright-background'>{!!fa2('send',0)!!} Send To</h3>
<a class="english btn btn-default btn-lg btn-social" href="@{{share_links.whatsapp}}">{!! fa2('whatsapp') !!} WhatsApp</a>
<a class="english btn btn-default btn-lg btn-social" href="@{{share_links.email}}">{!! fa2('send') !!} Email</a>

</div>
<!-- ******************************************************************** -->


<!-- *******************************Share************************************* -->
<div class="btn-group-vertical col-sm-4" role="group">
  
<h3 class='bright bright-background'>{!!fa2('share',0)!!} Share With</h3>
<a class="english btn btn-social btn-lg btn-facebook" target="_blank" href="@{{share_links.facebook}}" ng-click="share_with('facebook')">{!! fa2('facebook-square') !!} Facebook</a>
<a class='english btn btn-social btn-lg btn-twitter' target="_blank" href="@{{share_links.twitter}}" ng-click="share_with('twitter')">{!! fa2('twitter-square') !!} Twitter</a>

<a class='english btn btn-social btn-lg btn-google-plus' target="_blank" href="@{{share_links.google_plus}}" ng-click="share_with('google-plus')">{!! fa2('google-plus-square') !!} Google+</a>

<a class='english btn btn-social btn-lg btn-linkedin' target="_blank" href="@{{share_links.linkedin}}" ng-click="share_with('linkedin')">{!! fa2('linkedin-square') !!} Linked-In</a>
<a class='english btn btn-social btn-lg btn-pinterest' target="_blank" href="@{{share_links.pinterest}}" ng-click="share_with('pinterest')">{!! fa2('pinterest-square') !!} Pinterest</a>
<a class='english btn btn-social btn-lg btn-warning' target="_blank" href="@{{share_links.stumbleupon}}" ng-click="share_with('stumbleupon')">{!! fa2('stumbleupon',0) !!} stumbleUpon</a>
</div>
<!-- *******************************End Share************************************* -->






</div>



<div class="clearfix"></div>

<hr>


<div>
    <h3 class='arabic'>تصميمات آخرى</h3>
    <a href="{{url('games/text-image/ramadan')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/ramadan.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/facebook')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/facebook.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/pepsi')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/pepsi.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/cocacola')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/cocacola.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/cocacola-2')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/cocacola-2.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/cocacola-3')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/cocacola-3.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/viper')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/viper.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/whatsapp')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/whatsapp.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/messenger')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/messenger.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/microsoft')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/microsoft.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/cisco')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/cisco.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/oracle')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/oracle.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/crysis')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/crysis.jpg',200,105)}}"  class='thumbnail' /></a>
    <a href="{{url('games/text-image/game-of-thrones')}}"><img class="col-sm-2 col-xs-6" src="{{th('games/text-images/base-images/game-of-thrones.jpg',200,105)}}"  class='thumbnail' /></a>        
</div>



{{br(15)}}



</div>



