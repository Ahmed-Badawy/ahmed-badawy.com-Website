

        <div ng-controller="view_products">


            <div class="col-sm-6">
                <div class='panel'>
                <div class="panel-body">

                <legend class='text-right arabic'>الفاتورة الحالية</legend>

                <form ng-submit="save_invoice()" class='text-right'>

                    <input type="hidden" name="invoice_id" value="{{\Session::get("updated_invoice")}}"/>

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
                    {{-- <th class='text-center'>الوحدة</th> --}}
                    <th class='text-center'>السعر</th>
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
                        <input type='number' class='form-control input-sm pull-right' style='width:60%' ng-model="n.order_number" ng-change="refresh_invoice_cost()">
                        <span> x </span>
                        <span class='pull-left'> @{{n.sell_cost}} </span>
                    </td>
                    {{--<td class='text-center'>@{{ n.sell_cost }} </td> --}}
                    <td class='text-center' dir='ltr'> @{{n.sell_cost*n.order_number}}
                    {{-- =  @{{n.order_number}}x@{{n.sell_cost}} --}}
                    </td>
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
                <button type="submit" class='btn btn-lg btn-danger btn-block arabic' tabindex="4">تم الإنتهاء - أحفظ الفاتورة</button>
            </form>


</div>
            </div>
        </div>







            <div class="col-sm-6">
                <div class="panel">
                <div class="panel-body">

                    <form>
                    <legend class='text-right arabic'>المنتجات</legend>

            <div class="col-sm-3">
                <select name='cate_filter' class='form-control text-center' ng-model="filter_data.cate" ng-change='filter_data.q=filter_data.cate'>
                        <option value="" selected>All</option>
                        <option ng-repeat='c in cates' value="@{{c}}" >@{{c}}</option>
                </select>
            </div>

            <div class="col-sm-5">
                <input type="text" ng-model="filter_data.q" class="form-control widthfix" placeholder=""/>
            </div>

            <div class="btn-group" role="group" aria-label="...">
                <a class='btn btn-default' ng-class="{active:show_status_is_table}" ng-click='show_status_is_table=true'>{!!fa2('align-justify',['size'=>0])!!}</a>
                <a class='btn btn-default' ng-class="{active:!show_status_is_table}" ng-click='show_status_is_table=false'>{!!fa2('th-large',['size'=>0])!!}</a>
            </div>




                    </form>

                    <div class="clearfix"></div>

                    <hr/>


                <div class='row' ng-show='!show_status_is_table'>
                    <div class="col-sm-3 pointer_row thumbnail text-center" ng-repeat="n in products_data | filter:filter_data.q | orderBy:'order_by'" ng-click="add_to_invoice(n)">
                        <img src="<?php echo imgs_dir."selling-manager/{{n.product_img}}"; ?>" style='height:90px' />
                        <b class='arabic'>@{{n.product_name}}</b>
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



                <tr class='pointer_row' ng-repeat="n in products_data | filter:filter_data.q | orderBy:'order_by' " ng-click="add_to_invoice(n)">
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




