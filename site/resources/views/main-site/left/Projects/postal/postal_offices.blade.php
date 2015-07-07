

  <div class="col-md-12 col-sm-12">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h3 class='text-center' dir='rtl'>البحث عن مكاتب البريد المصرى</h3>
  </div>
  <div class="panel-body" ng-controller='postal_offices'>
    <h5>


<div class="col-md-6">
      <label  class='pull-right'>عدد النتائج المعروضة</label><br>
      <input type="number" class="form-control" ng-model="limitNum" placeholder="Limit Num" style='width:100%'>
</div>
<div class="col-md-6">
      <label class='pull-right'>أسم المكان المراد البحث عن رقم البريد به</label><br>
      <input type="search" class="form-control" ng-model="searchText" style='width:100%' dir='rtl'>
</div>


<div class="clearfix"></div><br>


{!! render_loader() !!}



  <table class="table table-striped table-hover table-bordered table-condensed" ng-show='data.postal_offices'>

<tr>
  <th class='text-center'>ATM</th>
  <th class='text-center'>POS</th>
  <th class='text-center'>فترة مسائية</th>
  <th class='text-center'>خدمة البريد السريع</th>
  <th class='text-center'>خدمات الشباك الشـامـل</th>
  <th class='text-center'>حوالات داخلية فورية</th>
  <th class='text-center'>حوالات خارجية واردة (IFS)</th>
  <th class='text-center'>المدينة</th>
  <th class='text-center'>المنطقة</th>
  <th class='text-center'>الهاتف</th>
  <th class='text-center'>العنوان</th>
  <th class='text-center'>مكتب</th>
  <th class='text-center'>رقم</th>
</tr>
    <tr ng-repeat="office in data.postal_offices | limitTo:limitNum" ng-show='searchText'> 
    <td class="text-center"><img src="{!!imgs_dir.'site/tf/'!!}@{{tf(office.atm)}}.png" width="20px"></td>
    <td class="text-center"><img src="{!!imgs_dir.'site/tf/'!!}@{{tf(office.pos)}}.png" width="20px"></td>
    <td class="text-center"><img src="{!!imgs_dir.'site/tf/'!!}@{{tf(office.night_shift)}}.png" width="20px"></td>
    <td class="text-center"><img src="{!!imgs_dir.'site/tf/'!!}@{{tf(office.fast_mail)}}.png" width="20px"></td>
    <td class="text-center"><img src="{!!imgs_dir.'site/tf/'!!}@{{tf(office.full_window)}}.png" width="20px"></td>
    <td class="text-center"><img src="{!!imgs_dir.'site/tf/'!!}@{{tf(office.inner)}}.png" width="20px"></td>
    <td class="text-center"><img src="{!!imgs_dir.'site/tf/'!!}@{{tf(office.outer)}}.png" width="20px"></td>


      <td class='text-center'>@{{office.city}}</td>
      <td class='text-center'>@{{office.area}}</td>
      <td class='text-center'>@{{office.tel}}</td>
      <td class='text-center'>@{{office.address}}</td>
      <td class='text-center'>@{{office.office}}</td>
      <td>@{{$index+1}}</td>
    </tr>
  </table>

<div class="clearfix"></div>

<br><br>

    </h5>

  </div>

<div class="panel-footer">
<a href="{{url('projects')}}" class='btn btn-danger btn-lg btn-block'>Back To Projects</a>
</div>

  </div>
</div>  
