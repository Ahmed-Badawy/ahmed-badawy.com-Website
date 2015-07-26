
@section('clients_cursor')
<div class="container">
    <div class="client">
        <div class="row">
            <div class="col-md-12">


                <div id="newsticker-demo">
                    <div class="newsticker-jcarousellite">
                        <ul>
                            @foreach($clients as $con)
                            <li><div class="thumbnail"><img src="{!! get_it('site-imgs/_CMS/clients/'.$con->img) !!}"></div></li>
                            @endforeach
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@show





<footer>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-offset-1">
                <div class="photo-gallry-footer">

                    <h3>معرض الصور</h3>

                    @for($i=0;$i<6;$i++)
                    <div class='demonstrations'>
                        @if(isset($photos[$i]))
                        <a href='{!! get_it('site-imgs/_CMS/photo-gallary/'.$photos[$i]->img) !!}' class='lightview' data-lightview-group='example' data-lightview-title="" data-lightview-caption="">
                            <img src='{!! get_it('site-imgs/_CMS/photo-gallary/'.$photos[$i]->img) !!}' alt=''/>
                        </a>
                        @endif
                    </div>
                    @endfor


                </div>
            </div>


            <div class="col-md-3 col-xs-offset-1">
                <div class="ser-footer">
                    <h3>القائمة</h3>
                    <ul>
                        <li><a href="{{url("/")}}"> الرئيسية</a></li>
                        <li><a href="{{url('about-us')}}">من نحن </a></li>
                        <li><a href="{{url('projects')}}">مشاريعنا</a></li>
                        <li><a href="{{url('clients')}}">عملائنا </a></li>
                        <li><a href="{{url('photo-gallary')}}">معرض الصور </a></li>
                        <li><a href="{{url('contact')}}">أتصل بنا </a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="about-footer">
                    <h3>من نحن </h3>

                    {!! $main_text_4->desc !!}
                </div>

            </div>


        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">

                    <div class="social-footer">
                        <a href="{{$facebook_link->desc}}" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="Facebook"><img src="{!! get_it("site-files/_CMS/images/facebook.png") !!}" /></a>
                        <a href="{{$google_plus_link->desc}}" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="Google+"><img src="{!! get_it("site-files/_CMS/images/google-plus.png") !!}" /></a>
                        <a href="{{$twitter_link->desc}}" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="twitter"><img src="{!! get_it("site-files/_CMS/images/twitter.png") !!}" /></a>
                        <a href="{{$youtube_link->desc}}" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="youtube"><img src="{!! get_it("site-files/_CMS/images/youtube.png") !!}" /></a>
                    </div>

                    <div class="copy">
                        تصميم  وتطوير شركة <a href="http://erest.sa/" target="_blank">إنجاز لتقنية المعلومات</a> - <a
                                href="{{url('admin/login')}}">لوحة التحكم</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</footer>





</body>
</html>