@section('breadcrumbs')
@overwrite
@section("media")
@overwrite

@section("css_add")
  .jumbotron{
    background-color:rgba(0,0,0,.8)
  }
  section h4 a,section h4 a:hover,section h4 a:visited{
    display:block;
    color:inherit;
    text-decoration: none;
  }
  .arabic{
    font-size:90%;
  }
@overwrite



<div class="jumbotron">
      <div class="container">
      <br>

<div class="col-md-2">
      <img class="img-circle deny" src='{!! $index["img"] !!}' width='140' height="140" alt="Generic placeholder image">
</div>
<div class='col-md-10'>
      <h1>{!! $index['title'] !!}</h1>
      <p>{!! $index['desc'] !!}</p>
      <p dir='rtl' class='arabic h6' style='font-size:1.2em'>{!! $index['desc2'] !!}</p>
</div>

      </div>
    </div>



    <div class="container">

<div class="row arabic">

@foreach($index['itiration'] as $project)
<?php $project_name = $project['page_name']; ?>
  @if(!isset($project['under_construction']) || !$project['under_construction'])
        <section class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center space_above grid-elm">
          <a href='{{$project["link"]}}' target='_blank'>
            <img class="img-circle" src='{{th($project["page_img"])}}' width='160' height="160" alt="Generic placeholder image" >
          </a>
          <br>
          <h4 class='btn' dir='rtl'><a href='{{$project["link"]}}' target='_blank'>{{$project_name}}</a></h4>
          <p class='desc'><b dir='rtl' class='desc'>{{$project['page_desc']}}<br> &nbsp; </b></p>
          <!-- <p><a class='btn btn-default btn-block btn-sm' href="{{$project['link']}}" target="_blank" role="button">أفتح &raquo;</a></p> -->
        </section><!-- /.col-md-4 text-center -->  
  @else
        <section class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center space_above grid-elm">
          <a href='{{$project["link"]}}' target="_blank">
            <img class="img-circle" src='{{get_thumb($project["page_img"])}}' width='140' height="140" alt="Generic placeholder image" >
          </a>          <br>
          <h4 class='btn' dir='rtl'><a href='{{$project["link"]}}' target='_blank'>{{$project_name}}</a></h4>
          <p class='desc'><b dir='rtl' class='desc'>{{$project['page_desc']}}<br> &nbsp; </b></p>
          <p><a class='btn btn-warning btn-block btn-md' href="{{$project['link']}}" target="_blank" role="button">Under Construction &raquo;</a></p>
        </section><!-- /.col-md-4 text-center -->    
  @endif
@endforeach

</div>
<br><br>

    </div><!-- /.container -->



