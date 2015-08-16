@extends("views.-layout")

@section('head_add')
    <script src="{{__design_files}}angular/angular.min.js"></script>
    <script src="{{__design_files}}angular/angular-resource.min.js"></script>
    <script src="{{__design_files}}angular/angular-route.min.js"></script>
    <script src="{{__design_files}}angular/script.js"></script>
@overwrite

@section("content")
<div ng-app="my_app">
    <section ng-controller="admin_chat_controller">
        <h2  class='text-center'>لوحة التحكم لرئيس الموقع</h2   >

        <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class="active"><a href="{{url('admin/dashboard')}}">Chat Management</a></li>
            <li role="presentation"><a href="{{url('admin/dashboard-users')}}">Email Management</a></li>
        </ul>


<div class='col-sm-9'>
    <table class='table table-bordered' ng-show='current_client'>
        <tr class='bg-primary'>
            <th class='h3 text-center'>@{{ chat_sys.chat_client.email }} - @{{ chat_sys.chat_client.website }}</th>
        </tr>
        <tr ng-repeat='n in chat_sys.chat'>
            <th ng-class="define_class(n,chat_sys.chat_client.email)">
                <span> &nbsp; @{{n.msg}}  &nbsp; </span>
                <span class='label label-sm label-default pull-right'>@{{n.created_at}}</span>
            </th>
        </tr>
    </table>

    <form ng-submit='send_msg()' dir='rtl' ng-show='current_client'>
        <input type="hidden" ng-model='client_email' ng-init="client_email = '{{Session::get('user_data')->email}}'" value="{{Session::get('user_data')->email}}">
        <textarea placeholder='أكتب الرسالة' class='form-control text-right' ng-model='msg'></textarea>
        <button type='submit'>Send</button>
    </form>
</div>


<div class='col-sm-3'>
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" ng-repeat='n in chat_sys.clients' ng-click='set_current_client(n)'><a href="#">@{{n}}</a></li>
    </ul>
</div>


<br>
<div class="clearfix"></div>
<br><br>

    </section>
</div>



@endsection
