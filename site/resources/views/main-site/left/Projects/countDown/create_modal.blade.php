
<div class="modal fade create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">


      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center" id="myModalLabel">Create A New CountDown</h3>
      </div>
      <div class="modal-body">

<div class="row" style='padding:10px'>


<form action="{{url('projects/countdown/save')}}" method='post'>
  
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group well well-sm">
    <label>{!! fa('fire') !!} Event Title: </label>
    <div class="input-group widthfix">  
          <!-- <span class="input-group-addon">{!! fa('fire') !!}</span> -->
          {!!  Form::text('title', null , ['class'=>'form-control' ,'placeholder'=>"Title" , 'required','autofocus' ])  !!}
    </div>
    <br>
    <label>{!! fa('bell') !!} Event Text: </label>
    <div class="input-group widthfix">    
          <!-- <span class="input-group-addon">{!! fa('bell') !!}</span> -->
          <textarea name="text" cols="10" rows="2" class='form-control' placeholder="Enter the Event text Message" required></textarea>
    </div>
</div>




 <div class="well well-sm text-center">

<div id="calendar" class='col-xs-12 col-sm-6' >
    <label>{!! fa('calendar') !!} Choose Date: </label>
    <div class="input-group date">
    <input type="text" id='date' name='date' class="form-control" required>
    <span class="input-group-addon">{!! fa2('calendar') !!}</span>
    </div>
    <p class='help-block'>EX-  22/04/2015</p>
</div>    

<div class='col-xs-12 col-sm-6'>
    <label>{!! fa('clock-o') !!} Choose Time: </label>
    <div class="input-group bootstrap-timepicker">
    <input type="text" id="time" name='time' class="form-control" required>
    <span class="input-group-addon">{!! fa2('clock-o') !!}</span>
    </div>
    <p class='help-block'>EX-  1:09 AM</p>
</div>
 
<script type="text/javascript">
</script>





<div class="clearfix"></div>
</div>

<button class="btn btn-primary col-sm-5" type="submit">{!! fa('thumbs-o-up') !!} Create CountDown</button> 
<button class="btn btn-warning col-sm-5" type="reset">{!! fa('trash') !!} Reset</button> 
<button class="btn btn-danger col-sm-2" data-dismiss="modal" aria-label="Close">{!! fa('times-circle') !!} Close</button>



</form>



</div>
<div class="clearfix"></div>

</div>
</div>
</div>



<script>
  $('#date').mask('00/00/0000', {placeholder: "day/month/year"});
  $('#time').mask('00:00 AM', {placeholder: "hour:minute PM"});
</script>