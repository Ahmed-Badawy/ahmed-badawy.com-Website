@extends("views.-layout")


@section("content")
    <!-- Contact -->
   
   
    <div id="map_wrapper">
    <iframe src="{!! $google_maps_embed_api_link !!}" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
   
   <section class="contact">
        <div class="row">
            <div class="col-sm-8">
                <h3>أتصل بنا</h3>
                <div id="sendstatus"></div>
                
                <div id="contactform">              
                <form action='{{url("send-email")}}' method='post'>
                
                            <p><label for="name">الاسم : *</label> <input type="text" class="form-control" name="name" id="name" tabindex="1"></p>
                            <p><label for="email">الايميل : *</label> <input type="text" class="form-control" name="email" id="email" tabindex="2"></p>
                            <p><label for="message">أكتب رسالتك : *</label> <textarea class="form-control" name="message" id="message" cols="12" rows="6" tabindex="3"></textarea></p>
                            <p><input type="button" name="submit" id="submit" class="button radius medium" value="Submit"></p>
                
                </form>
                </div>
            </div>

            <div class="col-sm-4">
            <h4 class="badge">البريد الالكتروني</h4>
            <p><a href=""> {{$email_1->desc}}</a></p>
            <h4 class="badge">الجوال</h4>
            <p>{{$phone_num_1->desc}}</p>
            <h4 class="badge">التواصل الاجتماعي</h4>
            <ul>
            <li><a href="{{$facebook_link->desc}}">صفحتنا على الفيس بوك</a></li>
            <li><a href="{{$twitter_link->desc}}">صفحتنا على تويتر</a></li>
            <li><a href="{{$instagram_link->desc}}">انستجرام</a></li>
            <li><a href="{{$google_plus_link->desc}}">جوجل بلس</a></li>
            </ul>
            </div>
        </div>
    </section>
   
   <!-- End of Contact  -->
@endsection