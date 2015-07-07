
{!!get_angular("postal")!!}



<div class="container">

<div class="btn-group btn-group-justified" ng-controller='main'>
  <div class="btn-group">
    <a class="btn btn-default" ng-class="buttonStyle('/postaloffices')" ng-href='#/postaloffices'><b>البحث عن مكاتب البريد المصرى</b></a>
  </div>
  <div class="btn-group">
    <a class="btn btn-default" ng-class="buttonStyle('/postalcodes')" ng-href='#/postalcodes'><b>البحث عن الكود البريدى لمكاتب البريد</b></a>
  </div>  
</div>
<br>
<div class="clearfix"></div>


  <ng-view></ng-view>


