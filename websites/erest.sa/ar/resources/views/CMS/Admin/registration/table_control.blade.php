@section('head_add')
    <style>
        tr:hover{
            cursor:pointer;
        }
    </style>
@overwrite

<div class='row' id='content-wrapper' ng-app="myApp">
    <div class='col-xs-12' ng-controller="registratoin_controller">


        <script type="text/javascript">
            var angular_users = {!! $angular_users !!};
        </script>


        <div class='row'>
            <div class='col-sm-12'>
                <div class='page-header'>
                    <h1 class='pull-left'>
                        <i class='fa fa-send'></i>
                        <span>Registered Users Management System</span>
                    </h1>
                </div>
            </div>
        </div>


        <label>Search For A User:</label>
        <input type='search' class='form-control widthfix' ng-model='q'>

        {{br(1)}}


        <div aria-label="...">

        </div>


        <div class='clearfix'></div>
        {{br(1)}}



        <div class='row panel panel-body'>
            <div class='col-sm-12'>
                <div class='clearfix'></div>



                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Id</th>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>is_confirmed</th>
                        <th>is_locked</th>
                        <th>is_deleted</th>
                        <th>is_admin</th>
                        <th>Last Seen</th>
                        <th>Last Login</th>
                        <th>Created At</th>
                        <th>Operations</th>
                    </tr>

                    <tr ng-repeat="n in registed_users | filter:q">
                        <td>@{{ n.id }}</td>
                        <td>@{{ n.username }}</td>
                        <td>@{{ n.email }}</td>
                        <td>@{{ n.is_confirmed | boolean }}</td>
                        <td>@{{ n.is_locked | boolean }}</td>
                        <td>@{{ n.is_deleted | boolean }}</td>
                        <td>@{{ n.is_admin | boolean }}</td>
                        <td>@{{ n.last_seen }}</td>
                        <td>@{{ n.last_login }}</td>
                        <td>@{{ n.created_at }}</td>
                        <td>
                            <a class='btn btn-xs' ng-click="set_selected(n)" data-toggle='modal' href='#edit_client' role='button'>{!! fa2('edit') !!}</a>
                            <a class='btn btn-xs btn-danger' ng-click="delete_it('{{url('cms-auth/delete/user')}}/'+n.id)">{!! fa2('trash') !!}</a>
                        </td>
                    </tr>
                </table>



    <div class='modal fade' id='edit_client' tabindex='-1'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h4 class='modal-title' id='myModalLabel'>Edit User</h4>
                </div>
                <div class='modal-body'>
                    <form class="form" style="margin-bottom: 0;" method="post" action="{{url('cms-auth/update-user')}}" accept-charset="UTF-8">
                        <input type="hidden" name="id" ng-model="Edited_item.id" value="@{{ Edited_item.id }}">
                        <div class='form-group'>
                            <label for='inputText1'>Username</label>
                            <input class='form-control' id='inputText1' placeholder='username' name='username' type='text' ng-model='Edited_item.username'>
                        </div>
                        <div class='form-group'>
                            <label for='client_phone'>Email</label>
                            <input class='form-control' id='client_phone' placeholder='Email' name='email' type='email' ng-model='Edited_item.email'>
                        </div>

                        <div class='form-group'>
                            <label for='client_phone'>is_confirmed</label>
                            <select ng-model="Edited_item.is_confirmed" name='is_confirmed' class="form-control">
                                <option value="1">true</option>
                                <option value="0">false</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='client_phone'>is_locked</label>
                            <select ng-model="Edited_item.is_locked" name='is_locked' class="form-control">
                                <option value="1">true</option>
                                <option value="0">false</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='client_phone'>is_deleted</label>
                            <select ng-model="Edited_item.is_deleted" name="is_deleted" class="form-control">
                                <option value="1">true</option>
                                <option value="0">false</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='client_phone'>is_admin</label>
                            <select ng-model="Edited_item.is_admin" name='is_admin' class="form-control">
                                <option value="1">true</option>
                                <option value="0">false</option>
                            </select>
                        </div>

                        <div class="clearfix"></div>
                        <div class='modal-footer'>
                            <button class='btn btn-default' data-dismiss='modal' type='button'>Close</button>
                            <button class='btn btn-primary' type='submit'>Submit Updates</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>



            </div>
        </div>
    </div>


