@section('css_add')
        body{
            font-family: 'Open Sans';
        }
      .favorite_item{
          height: 35px;
          padding:5px;
          border:solid #fff;
          border-radius: 20px;
          transition : all 0.3s ease-out;
          margin:0 ;
      }
      .favorite_item:hover{
          cursor:pointer;
          height:100px;
          background-color: #f8f8f8;
          border:solid #e0e0e0;
          border-radius: 10px;
          animation : myanim 1s;
      }
      .hovered-site{
          border:solid #aaa 1px;
          background-color:#C8E6FF;
      }
      @keyframes myanim{
          0% {opacity:0.3;}
          100% {opacity:1.0;}
      }
@stop


      {!! get_angular('favorite') !!}


<div style='margin-top:1%' ng-app='myApp'>
  <div ng-controller='favorite_controller'>


  <div class="col-md-3 col-sm-12">
    @include(get_location('Projects.favorite.left'))
  </div>
  <div class="col-md-5 col-sm-12">
    @include(get_location('Projects.favorite.main'))
  </div>
  <div class="col-md-4 col-sm-12">
    @include(get_location('Projects.favorite.right'))
  </div>

<div class="row">
<div class="col-md-6 col-md-offset-3">
<br><br>
<a href="{{url('projects')}}" class='btn btn-primary btn-lg btn-block'>Back To Projects</a>
</div>
</div>


  </div>
</div>
