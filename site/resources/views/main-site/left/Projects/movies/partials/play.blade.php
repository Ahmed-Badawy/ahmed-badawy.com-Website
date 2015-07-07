<div class="col-md-12">
    <b>@{{data.attach_file}}</b>
    <form>
      <input type="text" ng-model='q' class='form-control widthfix'>
    </form>
</div>


<hr>
<div class="clearfix"></div><br>

<form class="col-md-12 panel panel-default" action='http://10.0.1.5/index.php' method='post' target='_blank'>
  <button ng-repeat='m in data.all_files | filter:q' class='btn btn-default col-md-4' name='data' value='@{{m}}+++@{{m | last_elm}}'><b>@{{m | last_elm }}</b></button>
</form>