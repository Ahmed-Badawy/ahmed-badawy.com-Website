

<div ng-controller="update_products">


    <div class="col-sm-6">
        <div class='panel' ng-show="selected_product.id">
            <div class="panel-body">

                <div>
                    <a class="btn btn-danger col-sm-4 arabic" ng-click="update='delete'">أحذف المنتج</a>
                    <a class="btn btn-default col-sm-4 arabic" ng-click="update='update_place'">تعديل  مكان المنتج</a>
                    <a class="btn btn-default col-sm-4 arabic" ng-click="update='update_info'">تعديل بيانات المنتج</a>
                </div>

                <br/>
                <br/>
                <br/>


                <div ng-show="update=='delete'">
                    <legend class='text-right arabic'>حذف المنتج</legend>
                    <h4 class="text-center arabic">@{{ selected_product.product_name }}</h4>
                    <button type='reset' class="btn btn-danger btn-lg btn-block arabic" ng-click="delete_product(selected_product)">أحذف هذا المنتج من قاعدة البيانات</button>
                </div>



                <div ng-show="update=='update_place'" class="row col-sm-12">
                <legend class='text-right arabic'>تعديل  مكان المنتج</legend>
                    <div class="col-sm-12 text-center">
                        <h3 class="arabic">أسم المنتج : @{{ selected_product.product_name }}</h3>
                    </div>
                    <div class="arabic well col-sm-10">
                        <b>غير ترتيب منتجك عبر تحريكه لأعلى الترتيب أو أسفله </b>
                    </div>
                    <div class="btn-group-vertical col-sm-2" role="group" aria-label="...">
                        <a class="btn btn-default btn-success btn-block" ng-click="move_product('up')">{!! fa2('arrow-up') !!}</a>
                        <a class="btn btn-default btn-danger btn-block" ng-click="move_product('down')">{!! fa2('arrow-down') !!}</a>
                    </div>
                    <div class="col-sm-12">
                        <a class="btn btn-danger col-sm-6 arabic" href="{{URL::current()}}">{!! fa2('remove') !!} تراجع عن التغييرات</a>
                        <a class="btn btn-primary col-sm-6 arabic" ng-click="move_product('save')">{!! fa2('save') !!} أحفظ تغييرات الأماكن</a>
                    </div>
                </div>




                <div ng-show="update=='update_info'">
                <legend class='text-right arabic'>تعديل بيانات المنتج</legend>

                <form method="POST" action="<?php echo url("selling-manager/update-product"); ?>" enctype="multipart/form-data">

                    <input type="hidden" name='id' value="@{{ selected_product.id }}"/>

                    <table class="table">
                        <tr>
                            <td class="arabic">أسم المنتج</td>
                            <td><input type="text" ng-model="selected_product.product_name" name="product_name" class="form-control widthfix" placeholder=""/></td>
                        </tr>
                        <tr>
                            <td class="arabic">تغيير صورة المنتج</td>
                            <td>
                                <input type="file" ng-model="selected_product.img" name="product_img" class="form-control widthfix" />
                            </td>
                        </tr>
                        <tr>
                            <td class="arabic">العدد المتواجد</td>
                            <td><input type="text" ng-model="selected_product.count" name="count" class="form-control widthfix" placeholder=""/></td>
                        </tr>
                        <tr>
                            <td class="arabic">سعر الشراء</td>
                            <td><input type="text" ng-model="selected_product.buy_cost" name="buy_cost" class="form-control widthfix" placeholder=""/></td>
                        </tr>
                        <tr>
                            <td class="arabic">سعر البيع</td>
                            <td><input type="text" ng-model="selected_product.sell_cost" name="sell_cost" class="form-control widthfix" placeholder=""/></td>
                        </tr>
                        <tr>
                            <td class="arabic">المجموعة</td>
                            <td><input type="text" ng-model="selected_product.cate" name="cate" class="form-control widthfix" placeholder="ينتمى للمجموعة"/></td>
                        </tr>
                        <tr>
                            <td class="arabic">بيانات إضافية</td>
                            <td><textarea ng-model="selected_product.desc" name="desc" class="form-control widthfix"></textarea></td>
                        </tr>
                    </table>


                    <hr/>

                    {{--<button type='reset' class="btn btn-danger arabic col-sm-6">أفرغ الحقول</button>--}}
                    <button type='submit' class="btn btn-primary arabic col-sm-12"> تعديل المنتج</button>

                </form>
                </div>

                <div class="clearfix"></div>



            </div>
        </div>
    </div>







    <div class="col-sm-6">
        <div class="panel">
            <div class="panel-body">

                <form>
                    <legend class='text-right arabic'>أختر المنتج المراد تعديله</legend>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="col-sm-5">
                                <select name='cate_filter' class='form-control text-center' ng-model="filter_data.cate" ng-change='filter_data.q=filter_data.cate'>
                                    <option value="" selected>All</option>
                                    <option ng-repeat='c in cates' value="@{{c}}" >@{{c}}</option>
                                </select>
                            </div>

                            <div class="col-sm-5">
                                <input type="text" ng-model="filter_data.q" class="form-control widthfix" placeholder=""/>
                            </div>

                            <a class='btn btn-default col-sm-2' ng-click='filter_data.q="";filter_data.cate=""'>{!!fa2('align-justify')!!}</a>
                        </div>

                        <div class="col-sm-4">
                            <div class="btn-group" role="group" aria-label="...">
                                <a class='btn btn-default' ng-class="{active:show_status_is_table}" ng-click='show_status_is_table=true'>{!!fa2('align-justify')!!}</a>
                                <a class='btn btn-default' ng-class="{active:!show_status_is_table}" ng-click='show_status_is_table=false'>{!!fa2('th-large')!!}</a>
                            </div>

                            <div class="btn-group" role="group" aria-label="...">
                                <a class='btn btn-default' href="{{url('selling-manager/update-product')}}">{!!fa2('edit')!!}</a>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">{!! fa2("plus") !!}</button>
                            </div>
                        </div>

                    </div>




                </form>

                <div class="clearfix"></div>

                <hr/>


                <div class='row' ng-show='!show_status_is_table' dir="rtl">
                    <div class="col-sm-2 pointer_row thumbnail text-center" style='height:120px' ng-repeat="n in products_data | filter:filter_data.q | orderBy:'sort_order'" ng-click="select_product(n)">
                        <img src="<?php echo imgs_dir."selling-manager/{{n.product_img}}"; ?>" style='max-height:90px'/>
                        <b class='arabic'>@{{n.product_name}}</b>
                    </div>
                    <div class="col-sm-2 pointer_row thumbnail text-center">
                        <a class="text-center" data-toggle="modal" data-target=".bs-example-modal-lg" style="display:block">
                            <img src="<?php echo imgs_dir."selling-manager/icon-imgs/new-product.jpg"; ?>" style='height:90px' />
                        </a>
                        <b class='arabic'>أضف منتج </b>
                    </div>
                    <br class='clearfix'>
                </div>



                <table class="table table-hover table-bordered table-condensed" dir='rtl' ng-show='show_status_is_table'>
                    <tr class="warning arabic">
                        <th class='text-center'>أسم المنتج</th>
                        <th class='text-center'>رقم التعريف</th>
                        <th class='text-center'>العدد</th>
                        <th class='text-center'>سعر الشراء</th>
                        <th class='text-center'>سعر البيع</th>
                        <th class='text-center'>المجموعة</th>
                    </tr>



                    <tr class='pointer_row' ng-repeat="n in products_data | filter:filter_data.q | orderBy:'sort_order' " ng-click="select_product(n)">
                        <td class='text-center'><b> @{{ n.product_name }} </b></td>
                        <td class='text-center'>@{{ n.id }}</td>
                        <td class='text-center'>@{{ n.count }}</td>
                        <td class='text-center'>@{{ n.buy_cost }}</td>
                        <td class='text-center'>@{{ n.sell_cost }}</td>
                        <td class='text-center'>@{{ n.cate }}</td>
                    </tr>



                </table>


                <div class="clearfix"></div>

            </div>
        </div>
    </div>


</div>




<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content row" style="padding:15px">
            @include( get_location("Selling-Manager.includes.new-product-include") )
        </div>
    </div>
</div>
