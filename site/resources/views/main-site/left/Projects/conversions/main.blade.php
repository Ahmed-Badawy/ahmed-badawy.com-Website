<?php 	
		$projects = [
			"acceleration"=>"Acceleration converter",
			"area"=>"Area Converter",
			"density"=>"Density Converter",
			"energy"=>"Energy (Or Work) Converter",
			"length"=>"Length Converter",
			"weight"=>"Weight (Mass) Converter",
			"number"=>"Number Converter",

		];
?> 
          <div class="jumbotron jumbotron_page_header" >
            <h1>Units Converter!</h1>
            <p>This converter converts different unit types.</p>
          </div>
          <div class="row">

@foreach($projects as $link=>$name)
<a class='col-sm-6 btn btn-default btn-xs' ng-href='converter#/{{$link}}'><h4>{{$name}}</h4></a>
@endforeach

          </div><!--/row-->

