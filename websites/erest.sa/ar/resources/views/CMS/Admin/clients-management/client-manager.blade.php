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
                        <span>Clients Management System</span>
                    </h1>
                </div>
            </div>
        </div>


<label>Search For A Client:</label>
<input type='search' class='form-control widthfix' ng-model='q'>

{{br(1)}}



        <div class='row panel panel-body'>
            <div class='col-sm-12'>


<div class='clearfix'></div>



<button type="button" class="btn btn-default btn-info btn-sm" ng-click='q=""'>All</button>
@foreach($email_groups as $group)
    <button type="button" class="btn btn-default btn-primary btn-sm" ng-click='q="{{$group}}"'>{{$group}}</button>
@endforeach


                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Website - Company</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Operations</th>
                    </tr>

                    <tr ng-repeat="n in clients | filter:q">
                        <td>@{{n.name}}</td>
                        <td>@{{n.phone}}</td>
                        <td>@{{n.email}}</td>
                        <td>@{{n.website}}</td>
                        <td>@{{n.address1}}</td>
                        <td>@{{n.city}}</td>
                        <td>@{{n.country}}</td>
                        <td>
                            <a class='btn btn-xs' data-toggle='modal' href='#new_client' role='button'>{!! fa2('plus-square') !!}</a>
                            <a class='btn btn-xs' data-toggle='modal' href='#edit_client' role='button' ng-click="set_selected(n)">{!! fa2('edit') !!}</a>
                            <a class='btn btn-xs btn-danger' ng-click="delete_it('{{url('cms-admin/delete/client')}}/'+n.id)">{!! fa2('trash') !!}</a>
                        </td>
                    </tr>

                </table>








                <a class='btn btn-lg col-sm-6' href='{{url('cms-admin/groups-manager')}}' role='button'>{!! fa2("cogs") !!} Control Groups</a>







                <a class='btn col-sm-6 btn-lg' data-toggle='modal' href='#new_client' role='button'>{!! fa2("plus-square") !!} Add new client</a>

                <div class='modal fade' id='new_client' tabindex='-1'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h4 class='modal-title' id='myModalLabel'>Add New Client</h4>
                            </div>
                            <div class='modal-body'>
                                <form class="form" style="margin-bottom: 0;" method="post" action="{{url('cms-admin/add-client')}}" accept-charset="UTF-8">
                                    <div class='form-group'>
                                        <label for='inputText1'>Name</label>
                                        <input class='form-control' id='inputText1' name='name' placeholder='Name' type='text'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='client_phone'>Phone</label>
                                        <input class='form-control' id='client_phone' name='phone' placeholder='Phone' type='text'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='client_phone'>Email</label>
                                        <input class='form-control' id='client_phone' name='email' placeholder='Email' type='email'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='inputTextArea1'>Other Info</label>
                                        <textarea class='form-control' id='inputTextArea1' name='other' placeholder='Textarea' rows='3'></textarea>
                                    </div>

                                    <tr>
                                        <label for='inputTextArea1'>Choose an Email Group</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a class='btn btn-default widthfix arabic' ng-click="new_cate_show=true" ng-show="!new_cate_show">Add A new Group</a>
                                                    <a class='btn btn-default widthfix arabic' ng-click="new_cate_show=false;product.new_cate=''"  ng-show="new_cate_show">Choose from existing groups</a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control col-sm-6 arabic" ng-model="product.new_cate" name='new_cate' ng-show="new_cate_show" placeholder="New Group Name"/>
                                                    <select ng-model="product.cate" name='cate' ng-init="product.cate='All'" class="form-control col-sm-6 arabic" ng-hide="new_cate_show">
                                                        @foreach($email_groups as $group)
                                                            <option value="{{$group}}">{{$group}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                    </tr>

                                    <div class='modal-footer'>
                                        <button class='btn btn-default' data-dismiss='modal' type='button'>Close</button>
                                        <button class='btn btn-primary' type='submit'>Add New Client</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>









                <div class='modal fade' id='edit_client' tabindex='-1'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h4 class='modal-title' id='myModalLabel'>Edit Client</h4>
                            </div>
                            <div class='modal-body'>
                                <form class="form" style="margin-bottom: 0;" method="post" action="{{url('cms-admin/update-client')}}" accept-charset="UTF-8">
                                    <input type="hidden" name="id" ng-model="Edited_item.id" value="@{{ Edited_item.id }}">
                                    <div class='form-group'>
                                        <label for='inputText1'>Name</label>
                                        <input class='form-control' id='inputText1' placeholder='Name' name='name' type='text' ng-model='Edited_item.name'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='client_phone'>Phone</label>
                                        <input class='form-control' id='client_phone' placeholder='Phone' name='phone' type='text' ng-model='Edited_item.phone'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='client_phone'>Email</label>
                                        <input class='form-control' id='client_phone' placeholder='Email' name='email' type='email' ng-model='Edited_item.email'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='inputTextArea1'>Other Info</label>
                                        <textarea class='form-control' id='inputTextArea1' placeholder='Textarea' name='other' rows='3' ng-model='Edited_item.other'></textarea>
                                    </div>

                                    <tr>
                                        <label for='inputTextArea1'>Choose a Group</label>
                                                <select ng-model="Edited_item.group_name" name='cate' class="form-control col-sm-6 arabic" >
                                                    @foreach($email_groups as $group)
                                                        <option value="{{$group}}">{{$group}}</option>
                                                    @endforeach
                                                </select>
                                    </tr>
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
</div>





