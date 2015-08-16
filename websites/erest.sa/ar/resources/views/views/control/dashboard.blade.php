@extends("views.-layout")

@section('head_add')
    <script src="{{__design_files}}angular/angular.min.js"></script>
    <script src="{{__design_files}}angular/angular-resource.min.js"></script>
    <script src="{{__design_files}}angular/angular-route.min.js"></script>
    <script src="{{__design_files}}angular/script.js"></script>
@overwrite

@section("content")
<div ng-app="my_app">
    <section ng-controller="chat_controller">
        <h2  class='text-center'>لوحة التحكم للأعضاء و العملاء</h2   >

<div class='col-sm-6 col-sm-offset-3'>

<table class='table table-bordered'>
    <tr class='bg-primary'>
        <th class='h3 text-center'>{{Session::get('user_data')->email}} - {{Session::get('user_data')->website}}</th>
    </tr>
    <tr ng-repeat='n in msgs_array'>
        <th ng-class="define_class(n,client_email)">
            <span> &nbsp; @{{n.msg}}  &nbsp; </span>
            <span class='label label-sm label-default pull-right'>@{{n.created_at}}</span>
        </th>
    </tr>
</table>

<script type="text/javascript">
    var client_email = '{{Session::get('user_data')->email}}';
</script>
<form ng-submit='send_msg()' dir='rtl'>
    <input type="hidden" ng-model='client_email' ng-init="client_email = '{{Session::get('user_data')->email}}'" value="{{Session::get('user_data')->email}}">
<textarea placeholder='أكتب الرسالة' class='form-control text-right' ng-model='msg'></textarea>
<button type='submit'>Send</button>
</form>


</div>

<br>
<div class="clearfix"></div>
<br><br>

    </section>
</div>



@endsection
