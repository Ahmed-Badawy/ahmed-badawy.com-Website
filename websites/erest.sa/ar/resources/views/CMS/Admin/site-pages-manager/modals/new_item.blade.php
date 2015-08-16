
    <h1 class="text-center arabic">عنصر جديد</h1>

    <form method="POST"
          action="{{url("cms-admin/site-management-create-element")}}"
          ng-submit="submit_new_product()" enctype="multipart/form-data">



        <table class="table">
            <tr>
                <td class="arabic">أسم العنصر</td>
                <td><input type="text" name="name" class="form-control widthfix arabic" placeholder="أدخل أسم العنصر" /></td>
            </tr>
            <tr>
                <td class="arabic">صورة العنصر</td>
                <td><input type="file" name="upload_img" class="form-control widthfix" placeholder=""/></td>
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
                                @foreach($cates as $cate)
                                    <option value="{{$cate->cate_name}}">{{$cate->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="arabic">المحتوى</td>
                <td><textarea id="editor1" name="desc" class="form-control widthfix" rows="6"></textarea></td>
            </tr>
        </table>



        <hr/>
        <button type='reset' class="btn btn-danger btn-lg arabic col-sm-6">أفرغ الحقول</button>
        <button type='submit' class="btn btn-primary btn-lg arabic col-sm-6">أحفظ العنصر</button>

    </form>

    <div class="clearfix"></div>
