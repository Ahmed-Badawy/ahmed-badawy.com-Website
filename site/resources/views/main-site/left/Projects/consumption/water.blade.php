
{!! get_angular("consumption") !!}


<div class="container" style='margin-top:1%' dir="rtl">
    <div class="col-md-8 col-sm-offset-2 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"></h1><h2 class='text-center arabic'>حاسبة إستهلاك المياه - Water Consumption</h2>
            </div>
            <div class="panel-body" ng-controller='water'>
                <h5>

                    <p dir="rtl" class="arabic"> الحقل غير إجبارى وهو يحسب لك الفرق بين قرائتين للعداد. ويحسب لك كم المسحوب من المياه</p>

                    <br/>

<div class="input-group col-sm-12">
  <span class="input-group-addon">قراءة الفاتورة السابقة - قراءة العداد السابقة</span>
  <input type="number" ng-model="ec1" autofocus="autofocus" placeholder="Enter Number" class="form-control">
    <button type="button" class="btn btn-primary btn-xs widthfix" data-toggle="modal" data-target=".bs-example-modal-lg">?</button>
</div>

<br>
<div class="input-group col-sm-12">
  <span class="input-group-addon">قراءة الفاتورة الحالية - قراءة العداد الحالية</span>
  <input type="number" ng-model="ec2" placeholder="Enter Number" class="form-control">

    <!-- Large modal -->
    <button type="button" class="btn btn-primary btn-xs widthfix" data-toggle="modal" data-target=".bs-example-modal-lg">?</button>

</div>


                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title arabic text-center" id="myModalLabel">مثال على قراءة المياه</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{!! get_it('site-imgs/projects/consumption/water-invoice.jpg') !!}" class='widthfix' />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
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

                    <div class="well well-sm" ng-show='ec'>
                        <h3 class="text-center arabic">إستهلاك المياه</h3>
                        <h4>تم إستهلاك @{{ ec }} متر مكعب من المياه بشريحة تكلفة المتر الواحد فيها @{{final_cost}} قرشا فتصبح تكلفة الإستهلاك بالكامل  @{{ final_cost * ec /100 }} جنيا</h4>
                    </div>


                    <hr>



                    <button type="button" class="btn btn-default col-xs-12 arabic" data-toggle="modal" data-target="#consumption_table">جدول الإستهلاك {!!fa2('cubes')!!} </button>


                    <!-- Modal -->
                    <div class="modal fade" id="consumption_table" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title arabic text-center" id="myModalLabel">جدول الإستهلاك</h4>
                                </div>
                                <div class="modal-body">

                                    <ul class='arabic'>
                                        <li>الشريحة الأولى تبدأ من متر حتى 10 متر مكعب سعر المتر سيكون 25 قرش.</li>
                                        <li>الشريحة الثانية تبدأ من متر حتى 20 متر مكعب سعر المتر سيكون 35 قرش.</li>
                                        <li>الشريحة الثالثة تبدأ من متر حتى 30 متر مكعب سعر المتر سيكون 46 قرش.</li>
                                        <li>الشريحة الرابعة تبدأ من متر حتى 40 متر مكعب سعر المتر سيكون 57 قرش.</li>
                                        <li>الشريحة الخامسة تبدأ من متر حتى 50 متر مكعب سعر المتر سيكون 65 قرشا.</li>
                                        <li>الشريحة السادسة تبدأ من متر حتى 60 متر مكعب سعر المتر سيكون 140 قرشا.</li>
                                        <li>الشريحة الأخير ما يزيد عن 60 متر فى الشهرين سوف يتم احتساب سعر المتر بمبلغ 150 قرش للمتر المكعب مياه.</li>
                                    </ul>



                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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


