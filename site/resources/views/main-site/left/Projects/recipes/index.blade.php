@section("js_section")
      {{get_it('angular')}}
      {{get_it('ngResource')}}
      {{get_it('ngRoute')}}
      {{get_it('angular/app/projects/recipes.js')}}
@stop      

<div class="jumbotron" style='background-color:#303030; margin-top:-4%'>
      <div class="container">
      <br>

<div class="col-md-2">
      <img width="140" height="140" alt="Generic placeholder image" src='{{get_thumb("imgs_repo/met/1.jpg")}}' class="img-circle img deny">
</div>
<div class="">
      <h1 style="color:white">Recipes Sharing System !</h1>
      <p style="color:white">Just Testing &amp; Documentating Some of My Projects &amp; ideas</p>
</div>

      </div>
    </div>

<ng-view></ng-view>






