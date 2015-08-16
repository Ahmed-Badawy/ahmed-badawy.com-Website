@extends("views.-layout")

@section('head_add')
    {{--<script src="{{__design_files}}angular/angular.min.js"></script>--}}
    {{--<script src="{{__design_files}}angular/angular-resource.min.js"></script>--}}
    {{--<script src="{{__design_files}}angular/angular-route.min.js"></script>--}}
    {{--<script src="{{__design_files}}angular/script.js"></script>--}}
@overwrite

@section("content")
<div ng-app="my_app">
    <section ng-controller="chat_controller">
        <h2  class='text-center'>لوحة التحكم لرئيس الموقع</h2   >



<div class='col-sm-12'>

    <ul class="nav nav-tabs nav-justified">
        <li role="presentation"><a href="{{url('admin/dashboard')}}">Chat Management</a></li>
        <li role="presentation" class="active"><a href="{{url('admin/dashboard-users')}}">Email Management</a></li>
    </ul>

    <form method='post' action='{{url("admin/send-multiple-mail")}}' dir='rtl'>

<table class='table table-bordered col-sm-12' dir="rtl">
    <tr class='bg-primary' >
        <th class='h3 text-center' colspan="6">لوحة المستخدمين</th>
    </tr>
    <tr class="text-center">
        <th class="text-center"><input type="checkbox" id='over_all_key'></th>
        <th class="text-center">Id</th>
        <th class="text-center">Email</th>
        <th class="text-center">First Name</th>
        <th class="text-center">Last Name</th>
        <th class="text-center">Company</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td width="50px"><input class='mail_checkbox' type="checkbox" name='send_mail_to[ {{$user->email}} ]'></td>
        <td>{{$user->id}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->first_name}}</td>
        <td>{{$user->last_name}}</td>
        <td>{{$user->website}}</td>
    </tr>
    @endforeach
</table>

<div class="clearfix"></div>

        <input type="text" class="form-control" placeholder="أكتب عنوان الرسالة" name='subject'>
        <textarea placeholder='أكتب الرسالة' class='form-control text-right' name='msg'></textarea>
        <button type='submit'>أرسل الرسالة</button>
    </form>

    <script type="text/javascript">
        $("#over_all_key").change(function(){
            value = $(this).is(':checked');
            console.log(value);
            $(".mail_checkbox").attr("checked", value );
        });
    </script>

</div>

<br>
<div class="clearfix"></div>
<br><br>

    </section>
</div>



@endsection
