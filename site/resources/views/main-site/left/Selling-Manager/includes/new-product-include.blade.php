
    <h1 class="text-center arabic">منتج جديد</h1>

    <form method="POST"
          action="{{url("selling-manager/new-product")}}"
          ng-submit="submit_new_product()" enctype="multipart/form-data">

        <table class="table">
            <tr>
                <td class="arabic">أسم المنتج</td>
                <td><input type="text" ng-model="product.product_name" name="product_name" class="form-control widthfix arabic" placeholder="أدخل أسم المنتج" required /></td>
            </tr>
            <tr>
                <td class="arabic">صورة المنتج</td>
                <td><input type="file" ng-model="product.img" name="product_img" class="form-control widthfix" placeholder=""/></td>
            </tr>
            <tr>
                <td class="arabic">العدد المتواجد</td>
                <td><input type="text" ng-model="product.count" name="count" class="form-control widthfix" placeholder=""/></td>
            </tr>
            <tr>
                <td class="arabic">سعر الشراء</td>
                <td><input type="text" ng-model="product.buy_cost" name="buy_cost" class="form-control widthfix" placeholder=""/></td>
            </tr>
            <tr>
                <td class="arabic">سعر البيع</td>
                <td><input type="text" ng-model="product.sell_cost" name="sell_cost" class="form-control widthfix" placeholder=""/></td>
            </tr>
            <tr>
                <td class="arabic">ينتمى للمجموعة</td>
                <td>
                    <div class="row">
                        <div class="col-sm-6">
                            <a class='btn btn-default widthfix arabic' ng-click="new_cate_show=true" ng-show="!new_cate_show">أضف مجموعة جديدة</a>
                            <a class='btn btn-default widthfix arabic' ng-click="new_cate_show=false;product.new_cate=''"  ng-show="new_cate_show">أختر من المجموعات المتواجدة </a>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control col-sm-6 arabic" ng-model="product.new_cate" name='new_cate' ng-show="new_cate_show" placeholder="أدخل أسم المجموعة الجديدة"/>
                            <select ng-model="product.cate" name='cate' ng-init="product.cate='القسم العام'" class="form-control col-sm-6 arabic" ng-hide="new_cate_show">
                                <option value="القسم العام">القسم العام</option>
                                @foreach(\Session::get('cates') as $cate)
                                    <option value="{{$cate}}">{{$cate}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="arabic">بيانات إضافية</td>
                <td><textarea ng-model="product.desc" name="desc" class="form-control widthfix" rows="3"></textarea></td>
            </tr>
        </table>


        <hr/>
        <button type='reset' class="btn btn-danger btn-lg arabic col-sm-6">أفرغ الحقول</button>
        <button type='submit' class="btn btn-primary btn-lg arabic col-sm-6">أضف المنتج</button>

    </form>

    <div class="clearfix"></div>
