@section('head_add')
    <style>
    tr:hover{
        cursor:pointer;
    }
    </style>
@overwrite

<div class='row' id='content-wrapper' ng-app="myApp">
    <div class='col-xs-12' ng-controller="client_manager">


        <script type="text/javascript">
            var angular_clients = {!! $clients !!};
        </script>

        
        <div class='row'>
            <div class='col-sm-12'>
                <div class='page-header'>
                    <h1 class='pull-left'>
                        <i class='fa fa-send'></i>
                        <span>Email Management System</span>
                    </h1>
                </div>
            </div>
        </div>


<label>Search For A Client:</label>
<input type='search' class='form-control widthfix' ng-model='q'>

{{br(1)}}


<div aria-label="...">

</div>


<div class='clearfix'></div>
{{br(1)}}



        <div class='row panel panel-body'>
            <div class='col-sm-12'>
                <div class='clearfix'></div>


        <a class="btn btn-inverse btn-sm" ng-click="select_all()">Select All</a>
        <a class="btn btn-inverse btn-sm" ng-click="unselect_all()">UnSelect All</a>

        <span> {{sp(4)}} Cates: </span>
  <a class="btn btn-default btn-sm btn-info" ng-click='q=""'>All</a>
    @foreach($email_groups as $group)
  <a class="btn btn-default btn-sm btn-primary" ng-click='q="{{$group}}"'>{{$group}}</a>
    @endforeach



                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>

                    <tr ng-repeat="n in clients | filter:q" ng-click="highlight_email(n)" ng-class='{success:n.color}'>
                        <td>@{{n.name}}</td>
                        <td>@{{n.phone}}</td>
                        <td>@{{n.email}}</td>
                    </tr>
                </table>







                <a class="btn btn-default col-sm-6" ng-click="show_what='email-manager'">Email Manager</a>
                <a class="btn btn-default col-sm-6" ng-click="show_what='sms-manager'">SMS Manager</a>
                <div class="clearfix"></div>{{br(2)}}








            <div class='box' ng-show="show_what=='email-manager'">
                <form action="{{url('cms-admin/email-manager-send-msgs')}}" method="post">
                    <div class='box-header dark-background'>
                        <div class='title'>Email Manager</div>
                    </div>
                    <div class='box-content'>
                    <label for="">Send To:</label>

<div class="well well-sm" style="background-color:#ccc">@{{ highlighted_emails | json}}</div>
                    <div class="clearfix"></div><br>
                    <textarea class="form-control hidden" name="send_to_emails" readonly>
                        @{{ highlighted_emails | json}}
                    </textarea>

                    <label for="">Email Subject</label>
                    <input type="text" class="form-control" name="subject"> <br>
                    <label for="">Email Message</label>
                    <textarea id="" cols="30" rows="10" class="form-control" name="message"></textarea>
                        <div class="clearfix"></div>
                        <br>
                        <button type='submit' class="btn btn-inverse pull-right">Send Messages</button>
                        <button type='reset' class="btn btn-danger pull-right">Reset Form</button>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

        </div>





            <div class='box' ng-show="show_what=='sms-manager'">
                <form action="{{url('cms-admin/email-manager-send-msgs')}}" method="post">
                    <div class='box-header dark-background'>
                        <div class='title'>SMS Manager</div>
                    </div>
                    <div class='box-content'>
                       <h2 class='arabic text-center'>هذه الخدمة لم يتم تفعيلها بعد</h2>
                    </div>
                </form>
            </div>

        </div>






    </div>
</div>





