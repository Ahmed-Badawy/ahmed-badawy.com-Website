<div class='row' id='content-wrapper' ng-app="myApp">
    <div class='col-xs-12' ng-controller="client_manager">




        
        <div class='row'>
            <div class='col-sm-12'>
                <div class='page-header'>
                    <h1 class='pull-left'>
                        <i class='fa fa-users'></i>
                        <span>Email-Groups Management System</span>
                    </h1>
                </div>
            </div>
        </div>



        <div class='row panel panel-body'>
            <div class='col-sm-12 box'>
                <div class='box-header dark-background'>
                    <div class='title'>Email-Groups Manager</div>
                </div>
                <div class='box-content'>


<table class="table table-striped table-hover table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Operations</th>
    </tr>
    @foreach($email_groups as $group)
    <tr>
        <form action="{{url('cms-admin/update-email-group/'.$group->group_id)}}" method="post">
        <td>{{$group->group_id}}</td>
        <td><input type="text" class='form-control' name="group_name" value="{{$group->group_name}}"></td>
        <td>
            <button type="submit" class="btn btn-xs btn-inverse">{!! fa2('save') !!}</button>
            <a href="{{url('cms-admin/delete/email-group/'.$group->group_id)}}" class="btn btn-xs btn-danger">{!! fa2('trash') !!}</a>
        </td>
        </form>
    </tr>
    @endforeach
    <tr>
        <form action="{{url('cms-admin/add-email-group')}}" method="post">
            <td class='arabic'>أضف جروب جديد</td>
            <td><input type="text" name="new_cate" class="form-control"></td>
            <td><button type="submit" class="btn btn-inverse">Add New Group</button></td>
        </form>
    </tr>
</table>


        </div>




            </div>
        </div>


    </div>
</div>







`