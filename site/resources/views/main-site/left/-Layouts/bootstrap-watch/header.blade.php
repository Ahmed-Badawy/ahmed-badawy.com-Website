
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand  navbar-brand-centered" href="{!! url('/') !!}">{!! fa2('home',['size'=>0]) !!} Home</a> -->
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">

<li><a href="{{url('home')}}">{!!fa2('home')!!} Ahmed-Badawy</a></li>


<li>
  <a href="" class="dropdown-toggle" data-toggle="dropdown">{!! fa2('archive',['size'=>0]) !!} Main Pages <b class="caret"></b></a>
  <ul class="dropdown-menu">


    @foreach(Lst::site_routes_lists('home_list') as $key=>$val)
      <li><a href="{{$val['link']}}">{!! fa2($val['logo'],['size'=>0]) !!} {{$val['title']}}</a></li>
    @endforeach

<!--     <li><a href="{!! url('/') !!}">{!! fa2('home') !!} Home</a></li>
    <li><a href="{!! url('cv') !!}">{!! fa2('suitcase') !!} C.V</a></li>
    <li><a href="{!! url('contact') !!}">{!! fa2('user') !!} Contact Me</a></li>
    <li><a href="{{url('blog')}}" >{!! fa2('wordpress') !!} Blog</a></li> -->

  </ul>
</li>        


<li>
  <a href="" class="dropdown-toggle" data-toggle="dropdown">{!! fa2('magic',['size'=>0]) !!} Tests <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="{!! url('site-tests') !!}">{!! fa2('home') !!} Tests Main Page</a></li>
    <li class="divider"></li>
    @foreach(sr::siteTests() as $project)
          <li><a href="{!! $project['link'] !!}">{!! fa2($project['logo'],['size'=>0]) !!} {!! $project['page_name'] !!}</a></li>
    @endforeach    
  </ul>
</li>

<li>
  <a href="" class="dropdown-toggle" data-toggle="dropdown">{!! fa2('cogs',['size'=>0]) !!} Ideas <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="{!! url('projects') !!}">{!! fa2('home') !!} Ideas Main Page</a></li>
    <li class="divider"></li>
    @foreach(Lst::site_routes_lists('projects_list') as $project)
          <li><a href="{!! $project['link'] !!}">{!! fa2($project['logo'],['size'=>0]) !!} {!! $project['title'] !!}</a></li>
    @endforeach
  </ul>
</li>




<li>
  <a href="" class="dropdown-toggle" data-toggle="dropdown">{!! fa2('gamepad') !!} Games <b class="caret"></b></a>
  <ul class="dropdown-menu">

    <li><a href="{!! url('games') !!}">{!! fa2('home') !!} Games Main Page</a></li>
    <li class="divider"></li>
    @foreach(Lst::site_routes_lists('games_list') as $key=>$val)
      <li><a href="{{$val['link']}}">{!! fa2($val['logo'],['size'=>0]) !!} {{$val['title']}}</a></li>
    @endforeach

  </ul>
</li>



<li>
  <a href="" class="dropdown-toggle" data-toggle="dropdown">{!! fa2('cloud',['size'=>0]) !!} APIs <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="{!! url('apis') !!}">{!! fa2('home') !!} APIs Main Page</a></li>
    <li class="divider"></li>
    @foreach(Lst::site_routes_lists('apis_list') as $project)
          <li><a href="{!! $project['link'] !!}">{!! fa2($project['logo'],['size'=>0]) !!} {!! $project['title'] !!}</a></li>
    @endforeach
  </ul>
</li>


<li>
  <a href="" class="dropdown-toggle" data-toggle="dropdown">{!! fa2('chrome',['size'=>0]) !!} Chrome APPs <b class="caret"></b></a>
  <ul class="dropdown-menu">
      <li><a href="{!! url('chrome-apps') !!}">{!! fa2('home') !!} Chrome APPs Main Page</a></li>
      <li class="divider"></li>
      @foreach(sr::external('chrome apps') as $project)
          <li><a href="{!! $project['link'] !!}" target="_blank">{!! fa2($project['logo'],['size'=>0]) !!} {!! $project['page_title'] !!}</a></li>
      @endforeach
  </ul>
</li>


@if(Dev)
  <li>
    <a href="" class="dropdown-toggle" data-toggle="dropdown">{!! fa2('cog',['size'=>0]) !!} Dev <b class="caret"></b></a>
    <ul class="dropdown-menu">
            <li><a href="{{REMOTE_SITE_URL.Request::path()}}" target='_blank'>{!! fa2('globe',['size'=>0]) !!} Internet Version</a></li>
            <li><a href="?debug=true" target='_blank'>{!! fa2('bug',['size'=>0]) !!} Debug Mode</a></li>
            <li><a href="?debug-all=true" target='_blank'>{!! fa2('bug',['size'=>0]) !!} General Debug Mode</a></li>
    </ul>
  </li>
@endif

              </ul>




<ul class="nav navbar-nav pull-right">
    <li><a href="{!! url('cv') !!}">{!! fa2('suitcase',['size'=>0]) !!}&nbsp;C.V</a></li>
    <li><a href="{{url('blog')}}" target="_blank">{!!fa2('wordpress',['size'=>0])!!} My Blog</a></li>
    <li><a id='ContactModalButton' class='deny' href="#ContactModal" data-toggle='modal' role='button'>{!! fa2('envelope',['size'=>0]) !!} Contact</a></li> 
    
</ul>
            </div>


        </div>

