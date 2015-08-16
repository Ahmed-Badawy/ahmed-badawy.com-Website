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
                    <h3 class="badge">تسجيل الدخول</h3>
                    
                    <div class="row">
                        <div class="col-sm-5 center-block">
                            <div class="login-form">

                                @yield('errors_section')

                                <form method="post" action="{{url('cms-auth/do-login')}}">

                                    <input type="email" name="usernameOrEmail" size="50" placeholder="الأيميل"  required/>
                                    <input type="password" name="password" size="20" placeholder="كلمة السر" required />

                                    <a href="{{url('cms-auth/forgot-password')}}" class='btn btn-priamry col-sm-6'>نسيت كلمة المرور ؟ </a>
                                    <a href="{{url('cms-auth/custom-register')}}" class='btn btn-priamry col-sm-6'>تسجيل عضو جديد</a>
                                    <div class="clearfix"></div>
                                    <br>

                                    <input type="submit" value="دخول" />
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


