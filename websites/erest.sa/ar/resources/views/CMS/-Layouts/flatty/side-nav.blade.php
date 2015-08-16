<nav id='main-nav'>
    <div class='navigation'>
        <ul class='nav nav-stacked'>

            <li class=''>
                <a href='{{url("cms-admin/dashboard")}}'>
                    <i class='icon-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>



@section('only_admin')
            <li class=''>
                <a class="dropdown-collapse" href="#"><i class='icon-user'></i>
                    <span>Client Management</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>
                <ul class='nav nav-stacked <?php if(isset($side_nav) && $side_nav== "email-manager") echo "in"; ?>'>
                    <li class=''>
                        <a href='{{url("cms-admin/client-manager")}}'>
                            <i class='icon-male'></i>
                            <span>Clients Manager</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='{{url("cms-admin/groups-manager")}}'>
                            <i class='icon-minus-sign-alt'></i>
                            <span>Groups Manager</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='{{url("cms-admin/messages-manager")}}'>
                            <i class='icon-reply'></i>
                            <span>Messages Manager</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class=''>
            <a class="dropdown-collapse" href="#"><i class='icon-edit'></i>
                    <span>Site Management</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>

                <ul class='nav nav-stacked <?php if(isset($side_nav) && $side_nav== "site-manager") echo "in"; ?>'>

                    <li>
                        <a class='dropdown-collapse' href='#'>
                            <i class='icon-edit'></i>
                            <span class='arabic'>نصوص الصفحات</span>
                            <i class='icon-angle-down angle-down'></i>
                        </a>
                        <ul class='nav nav-stacked'>
                            <li class='arabic'>

                                <li class='arabic'>
                                    <a href='{{url("cms-admin/site-management-texts/main-page")}}'>
                                        <i class='icon-caret-right'></i>
                                        <span>الصفحة الرئيسية</span>
                                    </a>
                                </li>
                                <li class='arabic'>
                                    <a href='{{url("cms-admin/site-management-texts/about-us")}}'>
                                        <i class='icon-caret-right'></i>
                                        <span>صفحة من نحن</span>
                                    </a>
                                </li>

                                <li class='arabic'>
                                    <a href='{{url("cms-admin/site-management-texts/services")}}'>
                                        <i class='icon-caret-right'></i>
                                        <span>صفحة الخدمات</span>
                                    </a>
                                </li>

                                <li class='arabic'>
                                    <a href='{{url("cms-admin/site-management-texts/services-pages")}}'>
                                        <i class='icon-caret-right'></i>
                                        <span>صفحات الخدمات</span>
                                    </a>
                                </li>
                                                                                                
                            </li>
                        </ul>
                    </li>

                    <li class=''>
                        <a href='{{url("cms-admin/site-management-elements-cates-control")}}'>
                            <i class='icon-sign-blank'></i>
                            <span>Site Elements Control</span>
                        </a>
                    </li>

                    <li class=''>
                        <a href='{{url("cms-admin/site-management-cates-control")}}'>
                            <i class='icon-sitemap'></i>
                            <span>Site Element-Cate Control</span>
                        </a>
                    </li>

                    <li class=''>
                        <a href='{{url("cms-admin/site-management-options")}}'>
                            <i class='icon-gear'></i>
                            <span>Site Options</span>
                        </a>
                    </li>

                    
                </ul>
            </li>


            <li>
                <a class='dropdown-collapse ' href='#'>
                    <i class='icon-tint'></i>
                    <span>Registration System</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>
                <ul class='nav nav-stacked'>
                    <li class=''>
                        <a href='{{url("cms-auth/login")}}'>
                            <i class='icon-signin'></i>
                            <span>Login</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='{{url("cms-auth/register")}}'>
                            <i class='icon-plus-sign'></i>
                            <span>Register</span>
                        </a>
                    </li>

                    <li class=''>
                        <a href='{{url("cms-auth/logout")}}'>
                            <i class='icon-signout'></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                    <li class=''>
                        <a href='{{url("cms-auth/registration-system-adminstration")}}'>
                            <i class='icon-gears'></i>
                            <span>Registration Adminstration</span>
                        </a>
                    </li>

                </ul>
            </li>



            <li>
                <a class='dropdown-collapse ' href='#'>
                    <i class='icon-tint'></i>
                    <span>Chatting System</span>
                    <i class='icon-angle-down angle-down'></i>
                </a>
                <ul class='nav nav-stacked'>
                    <li class=''>
                        <a href='{{url("cms-chat/administration")}}'>
                            <i class='icon-user'></i>
                            <span>Chatting Administration</span>
                        </a>
                    </li>
                    <li class=''>
                        <a href='{{url("cms-chat/chat-system")}}'>
                            <i class='icon-user'></i>
                            <span>Chatting System</span>
                        </a>
                    </li>                    
                </ul>
            </li>




            <li class=''>
                <a href='{{url("cms-admin/todo")}}'>
                    <i class='icon-check'></i>
                    <span>ToDo List Controller</span>
                </a>
            </li>

@stop


    @if(is_admin())
        @yield('only_admin')
    @endif



        </ul>
    </div>
</nav>