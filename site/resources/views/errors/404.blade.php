<?php 
	$page_title = "404 Erorr Page...";
	$keywords = [];
	$theme = "cyborg";
	$url = URL::current();
?>
@section('head')
    @include( get_location("-Layouts.bootstrap-watch.head" ) )
@show

@section('header')
    @include( get_location("-Layouts.bootstrap-watch.header" ) )
@show



<div class="container">

<div class="row">

<div class="col-sm-9">
	<img src="{!! get_it('site/404.png') !!}" alt="404 img" class='img pull-right'>
	<h1 style='font-size:15em'>404</h1>
	<h3>Ooops, couldn't fint the Page.</h3>
	<h5>The Page you're looking for can't be found.</h5>
	<h6>We couldn't find the URL: <br><a style='color:#333;' href='{!! $url !!}'>{{$url}}</a></h6>
	<br><br>
	<div class="col-sm-3"><a href="{{URL::previous()}}" class="btn btn-danger btn-block">{!! fa2('arrow-left') !!} <b>Back</b></a></div>
	<div class="col-sm-3"><a href="#" onclick="close_window('Close This Error Page ?');return false;" class="btn btn-warning btn-block"><b>Close This Page</b></a></div>
</div>


<h3>Common Pages</h3>
<div class="col-sm-3">
	<div class="list-group">
	  <a class="list-group-item" href="{!! url('/') !!}"> {!! fa('home') !!} Home</a>
	  <a class="list-group-item" href="{!! url('tests') !!}"> {!! fa('magic') !!} API Tests</a>
	  <a class="list-group-item" href="{!! url('projects') !!}"> {!! fa('cogs') !!} Projects</a>
	  <a class="list-group-item" href="{!! url('cv') !!}"> {!! fa('user') !!} MY C.V</a>
	  <a class="list-group-item" href="{!! url('currency') !!}"> {!! fa('dollar') !!} Currency Calculator</a>
	  <a class="list-group-item" href="{!! url('books') !!}"> {!! fa('book') !!} Books Sharing System</a>
	  <a class="list-group-item" href="{!! url('countdown') !!}"> {!! fa('calender') !!} CountDown Event</a>
	</div>
</div>

</div>
</div>


@section('foot')
    @include( get_location("-Layouts.bootstrap-watch.foot" ) )
@show

@section('footer')
    @include( get_location("-Layouts.bootstrap-watch.footer" ) )
@show