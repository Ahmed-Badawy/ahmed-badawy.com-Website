<div class='row' id='content-wrapper' ng-app="myApp">
    <div class='col-xs-12' ng-controller="chat_controller">




        <div class='row'>
            <div class='col-sm-12'>
                <div class='page-header'>
                    <h1 class='pull-left'>
                        <i class='fa fa-send'></i>
                        <span>Chatting System</span>
                    </h1>
                </div>
            </div>
        </div>



        <div class="clearfix"></div>



        <div class='row panel panel-body col-sm-8 col-sm-offset-2'>

            <div class='col-sm-12'>
                {{--<h4 class="well" style="background-color:#f4e9e0"></h4>--}}
                <table class="table table-bordered table-hover table-striped">
                    <tr class='bg-primary'>
                        <th class='h3 text-center'><span style="color:mediumvioletred">{{user_data('email')}}</span> is talking to Administration </th>
                    </tr>
                    <tr ng-repeat='n in chat.msgs'>
                        <th ng-class="define_class( n.sender_email,'{{user_data('email')}}' )">
                            <span> &nbsp; <span class="label label-success">@{{n.sender_email}}</span> -> @{{n.msg}}  &nbsp; </span>
                            <span class='label label-sm label-default pull-right'>@{{n.created_at}}</span>
                        </th>
                    </tr>
                </table>
            </div>

        <form ng-submit='send_msg()' dir='rtl'>
            <input type="hidden" ng-model='client_email' ng-init="client_email = '{{Session::get('user_data')->email}}'" value="{{Session::get('user_data')->email}}">
            <textarea rows="5" placeholder='أدخل رسالتك' class='form-control text-right arabic' ng-model='msg'></textarea>
            <button type='submit' class="btn btn-inverse" style="width:70%"> Send Email {!! fa2('send') !!} </button>
        </form>



        </div>

    </div>
</div>





