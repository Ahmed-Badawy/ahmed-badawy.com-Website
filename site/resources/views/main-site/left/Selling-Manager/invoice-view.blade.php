
        <div ng-controller="invoice_view">


            <div class="col-sm-5">
                <div class='panel' ng-show="selected_invoice.id">
                    <div class="panel-body">

                        <legend class='text-right arabic'>عرض الفاتورة المحددة</legend>

                        <form ng-submit="save_invoice()" class='text-right'>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label class='arabic' dir='rtl' >رقم الهاتف:</label>
                                    <input type='text' class='form-control input-sm widthfix arabic' disabled required dir='rtl' ng-model="selected_invoice.customer_phone" title="يجب أن تضيف أسم العميل">
                                </div>

                                <div class="col-sm-6">
                                    <label class='arabic' dir='rtl' >الفاتورة بأسم:</label>
                                    <input type='text' class='form-control input-sm widthfix arabic' disabled dir='rtl' ng-model="selected_invoice.customer_name">
                                </div>
                            </div>

                            <hr>

                            <table class="table table-hover table-bordered table-condensed" ng-show='!loader' dir='rtl'>
                                <tr class="warning arabic">
                                    <th class='text-center' colspan="3">الأسم</th>
                                    <th class='text-center'>العدد</th>
                                    <th class='text-center'>الوحدة</th>
                                    <th class='text-center'>السعر</th>
                                </tr>

                                <tr ng-repeat="n in selected_invoice.products" >
                                    <td class='text-center' colspan="3">@{{ n.product_name }} </td>
                                    <td class='text-center'>
                                        <input type='text' class='form-control input-sm' style='width:80px' ng-model="n.order_number" disabled>
                                    </td>
                                    <td class='text-center'>@{{ n.sell_cost }} </td>
                                    <td class='text-center' dir='ltr'> @{{n.sell_cost*n.order_number}}
                                        {{-- =  @{{n.order_number}}x@{{n.sell_cost}} --}}
                                    </td>
                                </tr>
                            </table>

                            <table class="table table-hover table-bordered table-condensed" dir='rtl'>
                                <tr class="warning arabic">
                                    <th class='text-center'>حساب العميل</th>
                                    <th class='text-center'>الخصم</th>
                                    <th class='text-center'>النهائى</th>
                                </tr>

                                <tr class='success'>
                                    <th class='text-center'> @{{selected_invoice.over_all_cost}} </th>
                                    <th class='text-center'> @{{selected_invoice.discount}} </th>
                                    <th class='text-center'> @{{selected_invoice.final_over_all_cost}} </th>
                                </tr>


                            </table>
                            <textarea ng-model='selected_invoice.desc' class='form-control widthfix arabic' disabled dir='rtl' rows="3"></textarea>
                            <br>
                        </form>


                    </div>
                </div>
            </div>





            <div class="col-sm-7">
                <div class="panel">
                <div class="panel-body">

                    <form>
                    <legend class='text-right arabic'>المنتجات</legend>


<div class="row">
    <div class="col-sm-8">
        <input type="text" ng-model="search_filters.q" class="form-control widthfix arabic" placeholder="أبحث عن"/>
    </div>
    <div class="col-sm-4">
        <a class="btn btn-default widthfix arabic" ng-click="search_filters.q=''">تفريغ  {!!fa2('trash')!!}</a>
    </div>
</div>





                    </form>

                    <div class="clearfix"></div>

                    <hr/>




                <table class="table table-hover table-bordered table-condensed" style='width:100%' ng-show='!loader' dir='rtl'>
                <tr class="warning arabic">
                    <th class='text-center'>أسم العميل</th>
                    <th class='text-center'>المبلغ المدفوع</th>
                    <th class='text-center'>الخصم</th>
                    <th class='text-center'>التوقيت</th>
                    <th class='text-center'>العمليات</th>
                </tr>


                    <tr ng-repeat="n in invoices_array | filter: search_filters.q">
                        <td class='text-center pointer_row' ng-click="search_filters.q=n.customer_name"> @{{ n.customer_name }} </td>
                        <td class='text-center'> @{{ n.final_over_all_cost }} </td>
                        <td class='text-center'> @{{ n.discount }} </td>
                        <td class='text-center' dir="ltr"> @{{ n.created_at }} </td>
                        <td class='text-center' dir="ltr">
                            <a class="btn btn-default btn-xs arabic" href="{{url('selling-manager/delete-invoice')."/"}}@{{ n.id }}">{!!fa2('trash')!!} حذف</a>
                            <a class="btn btn-default btn-xs arabic" href="{{url('selling-manager/update-invoice')."/"}}@{{ n.id }}">{!!fa2('edit')!!} تعديل</a>
                            <a class="btn btn-default btn-xs arabic" ng-click="select_invoice(n)">{!!fa2('eye')!!} عرض</a>
                        </td>
                    </tr>



            </table>


                    <div class="clearfix"></div>
                    
                </div>
                </div>
                </div>  


        </div>
