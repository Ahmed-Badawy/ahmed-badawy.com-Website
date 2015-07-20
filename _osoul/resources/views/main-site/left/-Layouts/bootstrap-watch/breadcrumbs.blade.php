<div class="clearfix"></div>

  <ol class="breadcrumb" style='margin-left:5%;width:90%'>
    @foreach($breadcrumbs as $name=>$route_info)
      @if(isset($route_info['site_routes_subs']))
<li>
      <a href='{{$route_info["link"]}}'>{!!fa2($route_info['logo'])!!} {{$name}}</a>
      &nbsp;
    <div class="btn-group">
      <a class="btn btn-xs label label-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        List <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </a>
      <ul class="dropdown-menu" role="menu">

        
          @foreach(Lst::site_routes_lists($route_info['site_routes_subs']) as $route)
            <li><a href="{!! $route['link'] !!}">{!! fa2($route['logo'],['size'=>0]) !!} {!! $route['title'] !!}</a></li>
          @endforeach
      </ul>
    </div>
</li>        
      @elseif(isset($route_info['link']))
<li><a href="{{$route_info['link']}}">{!!fa2($route_info['logo'])!!} {{$name}}</a></li>
      @else
<li class='active'>{!!fa2($route_info['logo'])!!} {{$name}}</li>
      @endif
    @endforeach

<li class='active'>{!!fa2($logo)!!} {{$page_title}}</li>

	</ol>

