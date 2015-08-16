<div class='row' id='content-wrapper' ng-app="myApp">
    <div class='col-sm-12 panel' ng-controller="admin_chat_controller">




        <div class='row'>
            <div class='col-sm-12'>
                <div class='page-header'>
                    <h1 class='pull-left'>
                        <i class='fa fa-send'></i>
                        <span>Administration Chatting System</span>
                    </h1>
                </div>
            </div>
        </div>



        <div class="clearfix"></div>



        <div class='col-sm-9'>
             <table class='table table-bordered' ng-show='current_client'>
                <tr class='bg-primary'>
                    <th class='h3 text-center'>@{{ current_client }}</th>
                </tr>

                    <tr ng-repeat='n in chat.msgs'>
                        <th ng-class="define_class( n.sender_email,'{{user_data('email')}}' )">
                            <span> &nbsp; <span class="label label-success">@{{n.sender_email}}</span> -> @{{n.msg}}  &nbsp; </span>
                            <span class='label label-sm label-default pull-right'>@{{n.created_at}}</span>
                        </th>
                    </tr>

            </table>

            <form ng-submit='send_msg()' dir='rtl'>
                <input type="hidden" ng-model='client_email' ng-init="client_email = '{{Session::get('user_data')->email}}'" value="{{Session::get('user_data')->email}}">
                <textarea rows="5" placeholder='أدخل رسالتك' class='form-control text-right arabic' ng-model='msg'></textarea>
                <button type='submit' class="btn btn-inverse" style="width:70%"> Send Email {!! fa2('send') !!} </button>
            </form>

        </div>


        <div class='col-sm-3'>
            <ul class="nav nav-pills nav-stacked">
                @foreach($client_emails as $email)
                    <li role="presentation" ng-click='set_current_client("{{$email}}")' class='btn-info'><a href="#">{{$email}}</a></li>
                @endforeach
            </ul>
        </div>


        <div class="clearfix"></div>
        {{br(2)}}

    </div>
</div>





