
{!! get_angular("consumption") !!}


<div class="container" style='margin-top:1%' dir="rtl">
    <div class="col-md-8 col-sm-offset-2 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"></h1><h2 class='text-center arabic'>حاسبة إستهلاك الكهرباء - Electricity Consumption</h2>
            </div>
            <div class="panel-body" ng-controller='electricity'>
                <h5>


<select name="" id="" ng-model='type' class='form-control widthfix arabic'>
            <option value="normal" class='h4'>الإستهلاك منزلى</option>
            <option value="commercial" class='h4'>الإستهلاك التجارى</option>
</select>

<hr>

                    <p dir="rtl" class="arabic">هذا الحقل غير إجبارى وهو يحسب لك الفرق بين قرائتين للعداد. ويحسب لك كم الكيلوات المسحوبة من الكهرباء</p>

                    <br/>

<div class="input-group col-sm-12">
  <span class="input-group-addon">قراءة الفاتورة السابقة - قراءة العداد السابقة</span>
  <input type="number" ng-model="ec1" autofocus="autofocus" placeholder="Enter Number" class="form-control">
    <a class="btn btn-primary btn-xs widthfix">?</a>
</div>

<br>
<div class="input-group col-sm-12">
  <span class="input-group-addon">قراءة الفاتورة الحالية - قراءة العداد الحالية</span>
  <input type="number" ng-model="ec2" placeholder="Enter Number" class="form-control">
    <a class="btn btn-primary btn-xs widthfix">?</a>
</div>
                    <br/>

                    <a href="" class="btn btn-primary btn-block arabic" ng-click="ec=ec2-ec1;calc()">أحسب كم الإستهلاك</a>
<hr>

<p dir="rtl" class="arabic">عن طريق هذا الحقل يتم تحديد شريحة الكهرباء و تكلفتها.</p>

<div class="input-group">
  <span class="input-group-addon">كمية الكهرباء المستهلكة بالكيلو وات</span>
  <input type="number" ng-model="ec" placeholder="Enter Number" class="form-control">
</div>

                    <a class="btn btn-primary col-sm-4 widthfix arabic" ng-click="calc()">أحسب تكلفة الإستهلاك</a>


                    <hr>

                    <div class="col-sm-12" ng-show="show_ans">
                        <table class='table' dir='rtl'>
                            <tr>
                                <th>الإستهلاك بالكيلو وات فى الساعة</th>
                                <td class='text-left'>@{{ec}} &nbsp; ك.و\س</td>
                            </tr>
                            <tr>
                                <th>تندرج تحت الشريحة</th>
                                <td class='text-left'>الشريحة @{{consumption_stac_layer_data.layer}} - حدود الإستهلاك بين: (@{{consumption_stac_layer_data.min}} حتى @{{consumption_stac_layer_data.max}}) كيلو وات فى الساعة</td>
                            </tr>
                            <tr>
                                <th>حدود إستهلاك الشريحة @{{i}}</th>
                                <td class='text-left'>@{{consumption_stac_layer_data.min}} حتى @{{consumption_stac_layer_data.max}} كيلو وات فى الساعة</td>
                            </tr>                                                      
                            <tr>
                                <th>تكلفة الكيلو وات الواحد فى الشريحة @{{i}}</th>
                                <td class='text-left'>@{{consumption_stac_layer_data.cost}} قرشا</td>
                            </tr>    
                        </table>

                        <div class="well well-sm text-center">
                            <h2>تفصيل المصاريف</h2>
                            <ul class="list-unstyled text-right">
                                <li>عدد @{{consumption_stac_layer_data.consumption}} كيلو وات فى الشريحة (@{{consumption_stac_layer_data.min}} حتى  @{{consumption_stac_layer_data.max}} الكيلو بـ  @{{consumption_stac_layer_data.cost}} قرشا) بتكلفة كلية : @{{consumption_stac_layer_data.cost * consumption_stac_layer_data.consumption / 100}} جنيها</li>
                                <li ng-repeat="n in lower_levels_consumptions">
                                    عدد @{{n.consumption}} كيلو وات فى الشريحة
                                    (@{{n.min}} حتى  @{{n.max}} الكيلو بـ  @{{n.cost}} قرشا)
                                    بتكلفة كلية : @{{n.cost * n.consumption / 100}} جنيها
                                </li>
                                <li>
                                    قيمة مضافة على إستهلاك الشريحة و قدرها: @{{consumption_stac_layer_data.additional}} جنيها
                                </li>
                            </ul>
                            <hr/>
                        <h2>    تكلفة الإستهلاك الكلية:
                            @{{total_money}} جنيها</h2>
                            <h6>البرنامج يحسب تكلفة الإستهلاك فقط - هناك بعض التكاليف الإضافية على الفاتورة وهى الضريبة و 
                            القمامة و المصاريف الإدارية. وتختلف هذه المصاريف بإختلاف الأماكن و الإدارات - حدها الأقصى يصل لـ 18 جنيه</h6>
                        </div>

                    </div>




                    <hr>



                    <button type="button" class="btn btn-default col-xs-6 arabic" data-toggle="modal" data-target="#consumption_table">جدول الإستهلاك {!!fa2('cubes')!!} </button>
                    <a class="btn btn-default col-xs-6 arabic" href="{{url('pdf/web/viewer.php?book_name=electricity.pdf')}}" target="_blank">أقرء القرار الوزارى  {!!fa2('book')!!} </a>
                    {{--<button type="button" class="btn btn-danger col-xs-4" data-dismiss="modal" aria-label="Close">Close {!!fa2('times-circle')!!} </button>--}}


                    <!-- Modal -->
                    <div class="modal fade" id="consumption_table" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title arabic text-center" id="myModalLabel">جدول الإستهلاك</h4>
                                </div>
                                <div class="modal-body">

                                    <h3 class="text-center arabic">جدول الإستهلاك المنزلى</h3>
                                    <table class='table' dir='rtl'>
                                        <tr>
                                            <th class='text-right'>رقم</th>
                                            <th class='text-right'>حدود إستهلاك الشريحة</th>
                                            <th class='text-right'>سعر الكيلو وات للساعة</th>
                                            <th class='text-right'>القيمة المضافة (بالجنيه)</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>0 حتى 50</td>
                                            <td>7.5 قرشا</td>
                                            <td>1 جنيه</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>51 حتى 100</td>
                                            <td>14.5 قرشا</td>
                                            <td>1.5 جنيه</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>0 حتى 200</td>
                                            <td>16 قرشا</td>
                                            <td>3 جنيه</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>201 حتى 350</td>
                                            <td>24 قرشا</td>
                                            <td>5 جنيه</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>351 حتى 650</td>
                                            <td>34 قرشا</td>
                                            <td>7 جنيه</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>651 حتى 1000</td>
                                            <td>60 قرشا</td>
                                            <td>10 جنيه</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>أكثر من الـ 1000</td>
                                            <td>74 قرشا</td>
                                            <td>15 جنيه</td>
                                        </tr>
                                    </table>

                                    <hr/>


                                    <h3 class="text-center arabic">جدول الإستهلاك التجارى</h3>
                                    <table class='table' dir='rtl'>
                                        <tr>
                                            <th class='text-right'>رقم</th>
                                            <th class='text-right'>حدود إستهلاك الشريحة</th>
                                            <th class='text-right'>سعر الكيلو وات للساعة</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>0 حتى 100</td>
                                            <td>30 قرشا</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>0 حتى 250</td>
                                            <td>44 قرشا</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>251 حتى 600</td>
                                            <td>59 قرشا</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>601 حتى 1000</td>
                                            <td>78 قرشا</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>أكثر من الـ 1000	</td>
                                            <td>83 قرشا</td>
                                        </tr>
                                    </table>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>








                    <div class="clearfix"></div>
                    <br/>

<a href="{{url('projects')}}" class='btn btn-danger btn-lg btn-block '>Back To Projects</a>


                </h5>
            </div>


        </div>
    </div>


