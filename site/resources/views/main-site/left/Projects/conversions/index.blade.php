
{!! get_angular("conversion_calc") !!}

<?php 	
		$projects = [
			"acceleration"=>"Acceleration Conversions - تحويلات السرعة",
			"area"=>"Area Conversions - تحويلات المساحة",
			"density"=>"Density Conversions - تحويلات الكثافة",
			"energy"=>"Energy (Or Work) Converter - تحويلات الطاقة",
			"length"=>"Distance Conversions - تحويلات الطول",
			"weight"=>"Weight (Mass) Conversions - تحويلات الوزن",
			"heat"=>"Power and Heat Flow Conversions - تحويلات الحرارة",
			"pressure"=>"Pressure Conversions - تحويلات الضغط",
			"number"=>"Number Converter - التحويلات الرقمية",
		];
?> 

<div style='margin-top:1%' ng-app='myApp'>
<div class="container-fluid">
      <div class="row">

        <div class="col-xs-12 col-sm-9">
		      <ng-view></ng-view>
		</div>
		
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
			<a href="converter#/main" class="list-group-item" style='background:#0DB85F;color:white'><b>Main</b></a>

		@foreach($projects as $link=>$name)
            <a href="converter#/{{$link}}" class="list-group-item arabic text-center">{{$name}}</a>
		@endforeach           
			<a href="{{url('projects')}}" class="list-group-item" style='background:#F5163F;color:white'><b>Exit To Projects</b></a>

          </div>
        </div><!--/.sidebar-offcanvas-->



      </div><!--/row-->

</div>


</div>