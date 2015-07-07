<div class="col-md-12">
    <b>@{{data.attach_file}}</b>
    <form>
      <input type="text" ng-model='q' class='form-control widthfix'>
      <button type='submit' class='btn btn-primary btn-sm' ng-click='get_movies("title",q)'>Search</button>
    </form>
</div>


<hr>
<div class="clearfix"></div><br>

<div class="col-md-6">

<div class="clearfix"></div><br>

<ul class='panel panel-default'>
  <li ng-repeat='m in data.movies' ng-hide='m.attach_files'><a class='btn btn-default btn-sm' ng-click='attach_file(m.id,data.attach_file)'>@{{m.year+"--"+m.title}}</a></li>
</ul>
    <hr>
<ul class='alert alert-danger list list-unstyled'>
  <li ng-repeat='f in data.attached | filter:q'><a class='btn btn-danger btn-sm' ng-click='delete_attach(f)'>@{{f}}</a></li>
</ul>

</div>
<div class="col-md-6 well">

    <ul>
      <li ng-repeat='f in data.files | filter:q'><a class='btn btn-default btn-xs' ng-click='data.attach_file=f'>@{{f}}</a></li>
    </ul>



</div>