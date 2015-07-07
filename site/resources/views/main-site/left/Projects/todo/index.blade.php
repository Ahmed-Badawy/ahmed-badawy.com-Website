@section('font_section')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
@overwrite
@section('css_add')
  body{
      font-family: 'Open Sans';
  }
  a.done{
      text-decoration: line-through;
      background-color:#FF4D15;
  }
  .list-group b{
      cursor:pointer;
  }
  .vote:hover{
      color:#428bca;
      cursor:pointer;
  }
@overwrite

      {!! get_angular('todo') !!}




<div style='margin-top:1%' ng-app='myApp'>
  <div ng-controller='todo_controller'>


  <div class="col-md-3 col-sm-12">
    @include(get_location('Projects.todo.left'))
  </div>
  <div class="col-md-5 col-sm-12">
    @include(get_location('Projects.todo.main'))
  </div>
  <div class="col-md-4 col-sm-12">
    @include(get_location('Projects.todo.right'))
  </div>


<div class="col-md-6 col-md-offset-3">
<br><br>
<a href="{!! url('projects') !!}" class='btn btn-primary btn-lg btn-block'>Back To Projects</a>
</div>

  </div>
</div>




@section('footer')
@stop