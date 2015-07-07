@section("breadcrumbs")
@overwrite







<div id='center-box' class='text-center' dir='rtl'>
    <h1 class="text-center bright bright-background">Welcome To Spidro.com</h1>
    <img src="{{$user_data['avatar']}}" width='200' class='img-responsive img-thumbnail img-circle'>
    <br><br>

    <h4 class='box-elm'>الأسم: <span class='en'>{{u($user_data['name'])}}</span></h4>
    <h4 class='box-elm'>تم التسجيل بـ: <span class='en'>{{u($user_data['site_type'])}}</span></h4>
    <h4 class='box-elm'>الـرقم التعريفى: <span class='en'>{{$user_data['site_id']}}</span></h4>
    <h4 class='box-elm'>الإيميل: <span class='en'> {{$user_data['email']}} </span></h4>

<br><br>

   	<h1><a href="{{route('ask')}}" style='font-size:200%' class='btn btn-primary btn-block btn-lg bright bright-background'>
   	بداية الطريق
   	</a></h1>
</div>

@section("media")
@stop
@section("footer")
@overwrite