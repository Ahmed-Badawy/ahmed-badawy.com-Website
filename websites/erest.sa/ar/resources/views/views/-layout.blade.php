<!DOCTYPE html>
<html lang="ar">

<head>
    <title>إنجاز لتقنية المعلومات</title>
    @section("head_add")
    @show
    @include('views.inc.links')
</head>
<body>

    @include('views.inc.menu')

    @if(isset($breadcrumbs))
        @include('views.inc.breadcrumbs')
    @endif


    @yield('content')




    @include('views.inc.footer')
</body>
</html>