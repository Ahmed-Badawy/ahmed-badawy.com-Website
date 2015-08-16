<div class="top">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo">
                    <a href="#"><img src="{{asset( get_dirs('views').'images/logo.png')}}" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-sm-9">
                
                <div class="col-sm-12">
                    <ul class="cart">
                        <li><a href="{{url('/')}}"> <i class="fa fa-home"></i> الرئيسية</a></li>


                        @if(!Session::has("user_data"))
                        <li><a href="{{url('cms-auth/custom-login')}}"> <i class="fa fa-user"></i> دخول</a></li>
                        <li><a href="{{url('cms-auth/custom-register')}}"> <i class="fa fa-user-plus"></i> تسجيل جديد</a></li>
                        <li><a href="{{url('cms-auth/login')}}" class='btn btn-warning'> <i class="fa fa-cogs"></i>لوحة التحكم</a></li>
                        @else
                            <li><a href="{{url('cms-admin/dashboard')}}"> <i class="fa fa-cog"></i> لوحة التحكم</a></li>
                            <li><a href="{{url('cms-auth/logout')}}" class="btn btn-danger"> <i class="fa fa-sign-out"></i> تسجيل الخروج</a></li>
                        @endif

                    </ul>
                </div>  

                <nav id="desktop-menu">
                    <ul class="sf-menu" id="navigation">
                        <li class="current"><a href="{{url('/')}}">الرئيسية</a></li>
                        
                        <li><a href="{{url('about')}}">من نحن</a></li>
                        
                        <li><a href="{{url('services')}}">الخدمات</a>
                            {{--<ul>--}}
                                {{--<li><a href="#">تصميم</a></li>--}}
                                {{--<li><a href="#">برمجة</a></li>--}}
                                {{--<li><a href="#">تسويق الكتروني</a></li>--}}
                                {{--<li><a href="#">رسائل اس ام اس</a></li>--}}
                                {{--<li><a href="#">برمجة التطبيقات</a></li>--}}
                                {{--<li><a href="#">مطبوعات</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        
                        <li><a href="{{url('domain')}}">أحجز دومينك</a></li>
                        <li><a href="{{url('projects')}}">الاعمال</a></li>
                        <li><a href="{{url('contact')}}">أتصل بنا</a></li>
                        <li><a href="{{url('cms-auth/custom-login')}}">خدمة العملاء</a></li>
                        
                        
                        
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>





{{--<div id="live-chat">--}}
    {{--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">--}}
        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading" role="tab" id="headingOne">--}}
                {{--<h4 class="panel-title">--}}
                    {{--<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
                        {{--الدعم الفني--}}
                    {{--</a>--}}
                {{--</h4>--}}
            {{--</div>--}}
            {{--<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">--}}
                {{--<div class="panel-body">--}}
                    {{--<div class="chat">--}}
                        {{--<div class="chat-history">--}}
                            {{--<div class="chat-message clearfix">--}}
                                {{--<img src="enjaz.jpg" alt="" width="32" height="32">--}}
                                {{--<div class="chat-message-content clearfix">--}}
                                    {{--<span class="chat-time">13:35</span>--}}
                                    {{--<h5>إنجاز لتقنية المعلومات</h5>--}}
                                    {{--<p>السلام عليكم ورحمة الله وبركاتة انجاز لتقنية المعلومات ترحب بجميع عملائها</p>--}}
                                {{--</div> <!-- end chat-message-content -->--}}
                            {{--</div> <!-- end chat-message -->--}}
                            {{--<hr>--}}

                            {{--<div class="chat-message clearfix">--}}
                                {{--<img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32">--}}
                                {{--<div class="chat-message-content clearfix">--}}
                                    {{--<span class="chat-time">13:37</span>--}}
                                    {{--<h5>Marco Biedermann</h5>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nulla accusamus magni vel debitis numquam qui tempora rem voluptatem delectus!</p>--}}
                                {{--</div> <!-- end chat-message-content -->--}}
                            {{--</div> <!-- end chat-message -->--}}
                            {{--<hr>--}}
                        {{--</div> <!-- end chat-history -->--}}

                        {{--<p class="chat-feedback">Your partner is typing…</p>--}}

                        {{--<form action="#" method="post">--}}
                            {{--<fieldset>--}}
                                {{--<input type="text" placeholder="Type your message…" autofocus>--}}
                                {{--<input type="hidden">--}}
                            {{--</fieldset>--}}
                        {{--</form>--}}


                    {{--</div> <!-- end chat -->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}


    {{--</div>--}}
{{--</div>--}}

{{--<script>--}}
    {{--(function() {--}}
        {{--$('#live-chat header').on('click', function() {--}}
            {{--$('.chat').slideToggle(300, 'swing');--}}
            {{--$('.chat-message-counter').fadeToggle(300, 'swing');--}}
        {{--});--}}
        {{--$('.chat-close').on('click', function(e) {--}}
            {{--e.preventDefault();--}}
            {{--$('#live-chat').fadeOut(300);--}}
        {{--});--}}
    {{--}) ();--}}
{{--</script>--}}
