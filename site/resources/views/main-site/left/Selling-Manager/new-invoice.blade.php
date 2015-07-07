

        <div ng-controller="view_products">


            <div class="col-sm-6">
                <div class='panel'>
                <div class="panel-body">

                <legend class='text-right arabic'>الفاتورة الحالية</legend>

                <form ng-submit="save_invoice()" class='text-right'>

<div class="row">
<div class="col-sm-6">
    <label class='arabic' dir='rtl' >رقم الهاتف:</label>
    <input type='text' tabindex="2" class='form-control input-sm widthfix arabic' dir='rtl' ng-model="invoice.customer_phone">
</div>

<div class="col-sm-6">
    <label class='arabic' dir='rtl' >الفاتورة بأسم:</label>
    <input type='text' tabindex="1" class='form-control input-sm widthfix arabic' dir='rtl' ng-model="invoice.customer_name" title="يجب أن تضيف أسم العميل">
</div>
</div>

                <hr>

                <table class="table table-hover table-bordered table-condensed" ng-show='!loader' dir='rtl'>
                <tr class="warning arabic">
                    <th class='text-center'></th>
                    <th class='text-center'>الأسم</th>
                    <th class='text-center'>العدد</th>
                    <th class='text-center'>السعر</th>
                    <th class='text-center'>السعر الإجبارى</th>
                </tr>

                <tr ng-repeat="n in invoice.products" >
                    <td class='text-center'>
                        <div class="btn-group" role="group" aria-label="...">
                            <a class='btn btn-default btn-xs' ng-click='adjust_order_number(n,"minus")'>{!!fa2('minus',['size'=>0])!!}</a>
                            <a class='btn btn-danger btn-xs' ng-click='delete_from_invoice(n)'>{!!fa2('remove',['size'=>0])!!}</a>
                            <a class='btn btn-default btn-xs' ng-click='adjust_order_number(n,"plus")'>{!!fa2('plus',['size'=>0])!!}</a>
                        </div>
                    </td>
                    <td class='text-center'>@{{ n.product_name }} </td>
                    <td class='text-center'>
                        <input type='number' class='form-control input-sm' style='width:100px;display:inline' ng-model="n.order_number" ng-change="refresh_invoice_cost()">
                        <span dir="lrt">&nbsp;  @{{n.sell_cost}} x</span>
                    </td>


                    <td class='text-center' dir='ltr'>@{{n.sell_cost*n.order_number}}</td>
                    <td class='text-center' dir='ltr'><input type='number' class='form form-control input-sm' ng-model="n.forced_price" ng-init='n.forced_price=0' ng-change="refresh_invoice_cost()"></td>

                </tr>
            </table>


                    <table class="table table-hover table-bordered table-condensed" dir='rtl'>
                        <tr class="warning arabic">
                            <th class='text-center'><a class="btn btn-success btn-xs">{!! fa2('plus') !!}</a></th>
                            <th class='text-center'>الأسم</th>
                            <th class='text-center'>السعر</th>
                        </tr>
                        <tr>
                            <th class='text-center'><a class="btn btn-success btn-xs">{!! fa2('plus') !!}</a></th>
                            <td class="text-center"><input type="text" ng-model="free_product.name" class="form-control" /></td>
                            <td class="text-center"><input type='number' ng-model="free_product.cost" class="form-control" /></td>
                        </tr>
                    </table>



            <table class="table table-hover table-bordered table-condensed" dir='rtl'>
                <tr class="warning arabic">
                    <th class='text-center'>التكلفة</th>
                    <th class='text-center'>حساب العميل</th>
                    <th class='text-center'>المكسب</th>
                    <th class='text-center'> الأقصى للخصم</th>
                    <th class='text-center'>الخصم</th>
                    <th class='text-center'>النهائى</th>
                </tr>

                <tr class='success'>
                    <th class='text-center'> @{{invoice.minimal_over_all_cost}} </th>
                    <th class='text-center'> @{{invoice.over_all_cost}} </th>
                    <th class='text-center'> @{{invoice.final_over_all_cost - invoice.minimal_over_all_cost}} </th>
                    <th class='text-center'> @{{invoice.over_all_cost - invoice.minimal_over_all_cost}} </th>
                    <th class='text-center'>
                        <input type='text' tabindex="3" ng-model='invoice.discount' ng-init="invoice.discount=0" ng-change="refresh_invoice_cost()" style='width:80px' class='form-control input-sm'>
                    </th>
                    <th class='text-center'> @{{invoice.final_over_all_cost}} </th>
                </tr>




            </table>
                <label class='arabic' dir='rtl' >أضف تفصيل أو ملحوظة على الفاتورة : </label>

                <textarea ng-model='invoice.desc' class='form-control widthfix arabic' dir='rtl' placeholder="أضف تفاصيل أو ملحوظة على الفاتورة ؟" rows="3"></textarea>
                <br>
                <button type="submit" class='btn btn-lg btn-danger btn-block arabic' tabindex="4">{!! fa2('save') !!} تم الإنتهاء - أحفظ الفاتورة</button>
            </form>


</div>
            </div>
        </div>







            <div class="col-sm-6">
                <div class="panel">
                <div class="panel-body">

                    <form>
                    <legend class='text-right arabic'>المنتجات</legend>

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
                    <div class="col-sm-2 pointer_row thumbnail text-center" style='height:120px' ng-repeat="n in products_data | filter:filter_data.q | orderBy:'sort_order'" ng-click="add_to_invoice(n)">
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
                    <th class='text-center'>رقم</th>
                    <th class='text-center'>أسم المنتج</th>
                    <th class='text-center'>العدد</th>
                    <th class='text-center'>سعر الشراء</th>
                    <th class='text-center'>سعر البيع</th>
                    <th class='text-center'>المجموعة</th>
                </tr>



                <tr class='pointer_row' ng-repeat="n in products_data | filter:filter_data.q | orderBy:'sort_order' " ng-click="add_to_invoice(n)">
                    <td class='text-center'>@{{ n.id }}</td>
                    <td class='text-center'><b> @{{ n.product_name }} </b></td>
                    <td class='text-center'>@{{ n.count }}</td>
                    <td class='text-center'>@{{ n.buy_cost }}</td>
                    <td class='text-center'>@{{ n.sell_cost }}</td>
                    <td class='text-center'>@{{ n.cate }}</td>
                </tr>

                <tr>
                    <td colspan='6'><a data-toggle="modal" data-target=".bs-example-modal-lg" class='btn btn-primary btn-block arabic'><b>منتج جديد</b></a></td>
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

