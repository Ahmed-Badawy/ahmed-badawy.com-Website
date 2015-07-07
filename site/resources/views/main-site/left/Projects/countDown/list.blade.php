@section('media')
@overwrite



    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
    <div class="list-group">
    <h3 class='well well-sm'> Choose Existing CountDown </h3>
    <a href='{{url("projects/countdown")}}' class="btn btn-success btn-block">Add Your Own Count Down</a>
    @if($list->isEmpty())
      <h3>Sorry There is No CountDowns On this Page</h3>
    @endif
    @foreach($list as $evt)
      <a href="{{url('projects/countdown/'.$evt->id)}}" class="list-group-item text-center"><b>{{$evt->title}}</b></a>
    @endforeach
    </div>  
    </div>
    </div>




