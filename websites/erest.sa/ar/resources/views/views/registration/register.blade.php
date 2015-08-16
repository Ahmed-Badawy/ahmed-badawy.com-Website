@extends("views.-layout")

@section('errors_section')
    @if( $errors->any() ||  session('custom_errors'))
        <div class="alert alert-danger text-left">
            <ul>
                @if( isset($errors) )
                    <?php $errors_all = $errors->all(); ?>
                    @if(!empty($errors_all))
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    @endif
                @endif

                @if( session('custom_errors') )
                    @foreach(session('custom_errors') as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif
            </ul>
        </div>
    @endif
@stop


@section("content")


    <!-- Login -->
    <section class="login">

        <div class="row spacing-40">
            <div class="col-sm-12">
                <div class="login-form-panel">
                    <h3 class="badge">تسجيل جديد</h3>


                    <div class="row">
                        <div class="col-sm-12 center-block">
                            <div class="login-form pfields">


                                @yield('errors_section')


                                <form method="post" action="{{url("cms-auth/do-register")}}">
                                    
                                    <div class="col-sm-6">
                                        <label>
                                            <i class="fa fa-user"></i>
                                            <input type="text" name="last_name" size="50" placeholder="الاسم الاخير" required />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <label>
                                            <i class="fa fa-user"></i>
                                            <input type="text" name="first_name" size="50" placeholder="الاسم الاول" required />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <label>
                                            <i class="fa fa-suitcase"></i>
                                            <input type="password" name="password" size="50" placeholder="كلمة المرور" required />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <label>
                                            <i class="fa fa-suitcase"></i>
                                            <input type="password" name="password_confirmation" size="50" placeholder="تأكيد كلمة المرور " required />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <label>
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" name="email" size="50" placeholder="البريد الالكتروني " required />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <label>
                                            <i class="fa fa-globe"></i>
                                            <input type="text" name="website" size="50" placeholder="أسم الموقع او الجهة " />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <label>
                                            <i class="fa fa-map-marker"></i>
                                            <input type="text" name="address1" size="50" placeholder="العنوان 1 " />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <label>
                                            <i class="fa fa-map-marker"></i>
                                            <input type="text" name="address2" size="50" placeholder="العنوان 2 " />
                                        </label>
                                    </div>
                                    
                                    
                                    <div class="col-sm-3">
                                        <label>
                                            <i class="fa fa-paper-plane-o"></i>
                                            <input type="text" name="zip_code" size="50" placeholder="الرمز البريدي " />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <label>
                                            <i class="fa fa-map-marker"></i>
                                            <input type="text" name="city" size="50" placeholder="المدينة " />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <label>
                                            <i class="fa fa-map-marker"></i>
                                            <input type="text" name="country" size="50" placeholder="البلد " />
                                        </label>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <label>
                                            <i class="fa fa-phone"></i>
                                            <input type="tel" name="phone" size="50" placeholder="الجوال " />
                                        </label>
                                    </div>
                                    
                                    
                                    <div class="col-sm-3 center-block">
                                    <input type="submit" value="تسجيل" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End of Login -->

@endsection


