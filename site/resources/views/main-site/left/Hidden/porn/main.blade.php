
<br>



<div class="row">
<div class="col-sm-4">
    <label>Search Movies:</label>
    <input type="text" ng-model='data.q' class='form-control widthfix' autofocus='true'>
</div>
<div class="col-sm-4">
    <label>Show Results:</label>
    <input type="number" ng-model='data.items_per_page' class='form-control widthfix'>
</div>
<div class="col-sm-4">
    <label>Sort:</label>
  <select ng-model='orderby' class='form-control widthfix'>
    <option value="">None</option>  
    <option value="gross1" ng-click='data.reverse=true'>OverAll Profit</option>  
    <option value="year" ng-click='data.reverse=true'>Year</option>  
    <option value="title" ng-click='data.reverse=false'>Alphabetically</option>  
    <option value="rank" ng-click='data.reverse=false'>Rank</option>  
    <option value="franchises" ng-click='data.reverse=true'>Franchises</option>  
    <option value="rating" ng-click='data.reverse=false'>Rating</option>  
    <option value="genre" ng-click='data.reverse=false'>Genre</option>  
</select>
</div>


<div class="">
    <label style='display:block'></label>
</div>
</div>

    <br><div class="clearfix"></div>



<div class="col-sm-12">
<div class="panel panel-default">
<a class="panel-heading text-center btn btn-primary widthfix" ng-click='years.left_panel=!years.left_panel'>Year</a>
<table class='table table-striped table-bordered' ng-show='years.left_panel'>
<tr class='active'>
  <th>Title</th>
  <th>Size (mb)</th>
  <th>Tags</th>
  <th>Rating</th>
  <th>PornStars</th>
</tr>
  <tr ng-repeat='v in data.porn'>
    <td><a class='btn btn-default btn-xs' href='{{url("projects/porn/operate?@{{v.full_path}}")}}' target='_blank'>@{{v.title}}</a></td>
    <!-- <td><a class='btn btn-default btn-xs' ng-click='open_file(v)'>@{{v.title}}</a></td> -->
    <td>@{{v.file_size/1000000 | number:1}}</td>
    <td>@{{v.tags}} 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 
<a href="" class="btn label-default btn-xs">tag</a> | 

    </td>   
    <td><span style='font-size:150%;white-space: nowrap;' class='rating'><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></span style='font-size=50%'></td>   
    <td><a href="" class="btn btn-danger btn-xs">player</a> | <a href="" class="btn btn-danger btn-xs">player</a> | <a href="" class="btn btn-danger btn-xs">player</a> | <a href="" class="btn btn-danger btn-xs">player</a> | <a href="" class="btn btn-danger btn-xs">player</a> | <a href="" class="btn btn-danger btn-xs">player</a> | <a href="" class="btn btn-danger btn-xs">player</a> | <a href="" class="btn btn-danger btn-xs">player</a> | <a href="" class="btn btn-danger btn-xs">player</a> | <a href="" class="btn btn-danger btn-xs">player</a></td>   
  </tr>
</table>

<div class="clearfix"></div> 
</div>
</div>