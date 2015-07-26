
@section('font_section')
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>        
@overwrite
@section("css_section")
        {!! get_it("bootstrap.css") !!}
        {!! get_it('font-awesome.css') !!}
        {!! get_it("bootstrap-watch/css/$theme.min.css") !!}
        {!! get_it('custom_css/home/styles.css') !!}
@overwrite


@section("breadcrumbs")
@overwrite
@section('media')
@overwrite



<video autoplay loop muted class='bgvideo' id='bgvideo'>
  <source src='{{public_dir."site-docs/home-page-bg/vid.ogv"}}' type='video/mp4'>
</video>

<script type="text/javascript">
  vid = document.getElementById('bgvideo');
  vid.playbackRate = .8;  
</script>


<div class="container-full">
      <div class="row">
      
        <div id='main-panal' class="col-md-12 text-center v-center">
          
          {!! fa2('quote-left') !!} <h1 id="main-hello-world">Hello World</h1> {!! fa2('quote-right') !!}<br>
          <h3>Hi, my name is <span class="main-word">Ahmed Badawy</span>, and i am a developer located in cairo{!! fa2('arrow-right',null,'style="font-size:90%"') !!}egypt. <br>
           This website is my window to the world. <br>
           Whether you're a friend, a client or a family member, </h3> <h2>{!! fa2('sign-in') !!}You Are Welcome</h2> 
           <h3>
           Please have a look at <a class='text-link main-word' href="{!! route('projects') !!}">My Ideas</a>
            or check out <a class='text-link main-word' href="{!! url('blog') !!}">My Blog</a> <br>
            you can also get a sneak peek at my <a class='text-link' href="{!! route('site-tests') !!}"><small>API Tests & UnderConstruction Projects</small></a>.</h3>

            <h3><a class="btn btn-primary btn-lg arabic" href='{{url("projects")}}'>بعض أفكارى</a></h3>

            <br>



<div class="btn-group" >
<a class="btn btn-primary btn-lg" href='{!! url("blog") !!}' target='_blank'><b>Blog</b></a>
<a class="btn btn-primary btn-lg" href='{!! route("projects") !!}'><b>Ideas</b></a>
<a class="btn btn-primary btn-lg" href='{!! url("games") !!}'><b>Games</b></a>
<a class="btn btn-primary btn-lg" href='{!! url("apis") !!}'><b>APIs</b></a>
<a class="btn btn-primary btn-lg" href='{!! route("site-tests") !!}'><b>Testing</b></a>
    @if(Dev)
<a class="btn btn-primary btn-lg" href='{!! url("hidden") !!}'><b>Hidden</b></a>
    @endif
<a class="btn btn-primary btn-lg" href='{!! url("cv") !!}'><b>My C.V</b></a>
</div>


<div class="clearfix"></div>
{{br(2)}}


          <form action='{{url("contact")}}' method='POST'>
          <div class="space-above" style='width:400px;margin:0 auto;'>
            <div class="input-group widthfix">
              <input class="form-control"  placeholder="Your Email" type='email' name='email' required>
            </div>

            <div class="input-group widthfix" >
              <textarea class="form-control" rows='2' name='msg' placeholder="Message to Me" required></textarea>
            </div>
            <button class="btn btn-primary widthfix" type="submit">{!! fa2('share') !!}</button>
          </div>
          </form>

        </div>
        
      </div> <!-- /row -->
  
      <div class="row">
       
<div class="col-sm-12 text-center space-above" id='social' style="font-size:35pt;">
        <a href="mailto:{{social('my_email_1')}}?Subject=Contact%20Message" target="_top">{!! fa2("envelope-square") !!}</a>
        <a href="{{social('facebook')}}" target="_blank">{!! fa2("facebook-square") !!}</a>
        <a href="{{social('twitter')}}" target="_blank">{!! fa2("twitter-square") !!}</a>
        <a href="{{social('google-plus')}}" target="_blank">{!! fa2("google-plus-square") !!}</a>
        <a href="{{social('github')}}" target="_blank">{!! fa2("github-square") !!}</a>
        <a href="{{social('pinterest')}}" target="_blank">{!! fa2("pinterest-square") !!}</a>
        <a href="{{social('linkedin')}}" target="_blank">{!! fa2("linkedin-square") !!}</a>
        <a href="{{social('instagram')}}" target="_blank">{!! fa2("instagram") !!}</a>
</div>
      
      </div>
      

    <br><br><br><br><br>

</div> <!-- /container full -->







@section('footer')
@stop

<script>
  // $(document).ready(function(){
  //     $('#main-panal').hover(function(){
  //       $("#main-panal>h3>a").toggleClass('red_link');
  //     });
  // });
</script>
