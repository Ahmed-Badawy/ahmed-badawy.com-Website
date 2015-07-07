<!--login modal-->
<div id="ContactModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">

      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center">{!! fa('volume-up') !!} Contact Me</h2>
      </div>

      <form action="{!! url('contact') !!}" method='post' class='form col-md-12 center-block'>
      <div class="modal-body">

<h4>Call me: 01111988246</h4>
<h4>Or email me: ({{social('admin_email')}}) 
<a href="mailto:{{social('admin_email')}}?Subject=Contact%20Message">
{!! fa2('envelope-square') !!}</a>
</h4>

{{br(2)}}



<div class="input-group">
      <span class="input-group-addon">{!! fa('envelope') !!}</span>
      <input class="form-control" placeholder="Your Email" required="required" autofocus="autofocus" name="email" type="email"> 
</div>
<div class="input-group"> 
      <span class="input-group-addon">{!! fa('inbox') !!}</span> 
      <textarea name="msg" rows="4" class='widthfix form-control' placeholder='Your Message'></textarea>
</div>


</div>

<div class="row"> </div>

<button type='submit' class="btn btn-primary btn-md btn-block">{!! fa('send') !!} Send Message</button>
</form>

  <a href="{!! url('cv') !!}" class='btn btn-inverse col-xs-6'><b>{!! fa('user') !!} See My C.V</b></a>
  <a class="btn btn-inverse col-xs-6" data-dismiss="modal" aria-hidden="true"><b>{!! fa('times-circle') !!} Cancel</b></a>

<p> </p>

<div class="clearfix"></div>
</div>
      </div>
  </div>
