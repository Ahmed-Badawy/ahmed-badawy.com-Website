{!! get_angular('currency') !!}



<div class='row'> 


    <div class="jumbotron" >
      <br>

<div class="row col-md-10 col-md-offset-1">

      <img class="img-circle img deny" style='float:left;margin-right:20px' src='{{imgs_dir.sr::projects("currency")['page_img']}}' width='250' height="250" alt="Generic placeholder image">

	<h1>Currency Rate Calculator !</h1>
	<p>Calculates Currency Exchange Rates.</p>

<div class="fb-like pull-left" data-href="{{route('currency')}}" data-width="400" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="g-plusone pull-right" data-href="{{route('currency')}}" data-size="tall"></div>


  <h5 class='col-md-7 arabic' dir='rtl'>
          <li>تحسب التحويلات بين العملات المختلفة بدقة شديدة</li>
          <li>يتم تحديث معدل العملات بالكامل أوتوماتيكيا كل ساعة</li>
  </h5>
</div>
<div class="clearfix"></div>
    </div>




<div class="container">

<div class="col-md-6">
<legend><b>Query: </b></legend>

<form class='well' ng-submit="get_rate(wanted_rate)">

<label>How Much: </label>
<input type="number" ng-model='wanted_rate.how_much' class="form-control" value="1" required style='width:100%'>

<label>From: </label>
<select name="from" class="form-control" style='width:100%' ng-model='wanted_rate.from'>
@foreach($currency_list as $c)
<option value="{{$c['code']}}">{{$c['name']."  (".$c['format'].")"}}</option>
@endforeach      
</select>


<label>To: </label>
<select name="to" class="form-control" style='width:100%' ng-model='wanted_rate.to'>
@foreach($currency_list as $c)
<option value="{{$c['code']}}">{{$c['name']."  (".$c['format'].")"}}</option>
@endforeach   
</select>


<br>
<button type='submit' class='btn btn-primary btn-block'><b>Calculate Rate</b></button>
</form>

</div>





<div id='loading' class='text-center col-md-6 well' ng-show='loading'>
    <span style="position: relative;">{!! fa2('refresh',['spin','5x']) !!}
        <small class='well well-sm loading-text'>Loading</small>
    </span>
</div>

<div class="col-md-6" ng-show='show_res'>
<legend><b>Result: </b></legend>
<div class="list-group">
  <a href='#' class='list-group-item'>
    <h5 class='list-group-item-heading text-center'>@{{result.amoutn+" "+result.from}} &nbsp; => &nbsp;@{{result.result+" "+result.to}} </p></h5>
  </a>
  <a href='#' class='list-group-item'>
    <h5 class='list-group-item-heading'>From : <p class='pull-right'> @{{result.from}} </p></h5>
  </a>
  <a href='#' class='list-group-item'>
    <h5 class='list-group-item-heading'>To : <p class='pull-right'> @{{result.to}} </p></h5>
  </a>
  <a href='#' class='list-group-item'>
    <h5 class='list-group-item-heading'>Rate : <p class='pull-right'> @{{result.rate}} </p></h5>
  </a>    
</div>
<a href='#' class='list-group-item'>
    <h4 class='list-group-item-heading'> @{{result.result+" "+result.to}}  <p class='pull-right' dir='rtl'> الناتج : </p></h4>
    <span class="clearfix"> </span>
</a>
</div>

</div>

<div class="clearfix"></div>
<a href='{{route("projects")}}' class='btn btn-danger btn-lg btn-block' ><b>Back To Projects</b></a>

</div>



</div>
