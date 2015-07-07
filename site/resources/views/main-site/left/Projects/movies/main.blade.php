

<hr>
<h3 class='text-center' dir='rtl'>أبحث عن: @{{page_msg | wc}}</h3>
<hr><br>

<div class="row">
<div class="col-sm-4">
    <label>Search Movies (أبحث عن فيلم):</label>
    <input type="text" ng-model='data.q' class='form-control widthfix' autofocus='true'>
</div>
<div class="col-sm-4">
    <label>Show Results (عدد النتائج المعروضة):</label>
    <input type="number" ng-model='data.items_per_page' class='form-control widthfix'>
</div>
<div class="col-sm-4">
    <label>Sort By (رتب تبعا لـ):</label>
  <select ng-model='orderby' class='form-control widthfix'>
    <!-- <option value="">None</option>   -->
    <option value="gross1" ng-click='data.reverse=true'>OverAll Profit - الأعلى فى الأرباح الكلية</option>  
    <option value="year" ng-click='data.reverse=true'>Year - سنة الصدور</option>  
    <option value="rating" ng-click='data.reverse=false'>Rating - التقييم</option>  
    <option value="title" ng-click='data.reverse=false'>Alphabetically - أبجديا</option>  
    <option value="rank" ng-click='data.reverse=false'>Rank - الترتيب</option>  
    <option value="franchises" ng-click='data.reverse=true'>Franchises - السلسلة أبجديا</option>  
    <option value="genre" ng-click='data.reverse=false'>Genre - التصنيف</option>  
</select>
</div>


<div class="">
    <label style='display:block'></label>
</div>
</div>

    <br><div class="clearfix"></div>
<div class="panel panel-default">
  Showing @{{data.items_per_page}} Results (@{{data.current_page*data.items_per_page}} to @{{(data.current_page*data.items_per_page)+data.items_per_page}}) From @{{records_count}} - Page @{{data.current_page+1}} From @{{pageCount()+1}}
</div>
    <!-- <div class="clearfix"></div> -->


{!! render_loader() !!}


<div class="media animate-repeat" ng-mouseover="record_hover(m.id)" ng-class="record_class(m)" ng-click='record_clicked(m.id)' 
ng-repeat="m in data.movies | 
      orderBy:orderby:data.reverse | offset:data.current_page*data.items_per_page | limitTo:data.items_per_page">
  <a class="pull-left" ng-href='@{{img_click(m)}}' target='_blank'>
    <img class="media-object" ng-src="@{{m.link_id | git:'mojo_img'}} ">
  </a>
  <div class="media-body">
<a class='btn btn-default btn-sm pull-left' ng-href='#main/year/@{{m.year}}'><b>@{{m.year}}</b></a> 
<b class="media-heading">
<p class='movie-title'> &nbsp; @{{m.title}}</p>


@section("update_franch")

<?php if(Dev){ ?>
<div style='display:inline'>
  <input  type="text" class='form-control' style="display:inline" ng-init='fransh=m.franchises' ng-model='fransh'> <a ng-click='save_fransh(m.id,fransh)' class="btn btn-xs btn-default">save</a>
</div>
<?php } ?>
@show


                <span ng-show='(opened_record_id==m.id)'> 
@section("show_movie")
                <form action='http://10.0.1.5/index.php' method='post' style='display:inline' ng-show='m.attach_files'>
<button class='btn btn-default btn-xs' name='data' value='@{{m.attach_files+"+++"+m.title}}' target='_blank'>{!! fa2('desktop',0) !!}</button>   
                </form>
@stop
<a class='btn btn-default btn-xs' href='@{{m.title | git:"google_search"}}' target='_blank'>{!! fa2('google',0) !!}Google it</a>   
<a class='btn btn-default btn-xs' href='@{{m.title | git:"google_img"}}' target='_blank'>{!!fa2('camera',0)!!}Images</a>   
<a class='btn btn-default btn-xs' href='@{{m.link_id | git:"mojo_movie"}}' target='_blank'>{!!fa2('sign-in',0)!!}Info</a>   
<a class='btn btn-default btn-xs' href='@{{m.title | git:"subscene"}}' target='_blank'>{!!fa2('cloud-download',0)!!}Subtitle</a>   
<a class='btn btn-default btn-xs' href='@{{m.title | git:"imdb"}}' target='_blank'>{!!fa2('database',0)!!}imdb</a>   
                </span>    
    <b class="pull-right label label-primary bigger-labels">الترتيب: @{{m.rank}} | لسنة: @{{m.year}}</b>
    <span class='pull-right'>&nbsp;</span>
    <b class="pull-right label label-warning bigger-labels">@{{m.rating | uppercase}}</b>
    <span class='pull-right'>&nbsp;</span>
    <a class='btn btn-default btn-sm pull-right' ng-href='#main/genre/@{{m.genre}}'><b>@{{m.genre | wc}}</b></a>
    <span class='pull-right'>&nbsp;</span>
    <a class='pull-right btn btn-sm btn-danger' ng-show='m.franchises' ng-href='#main/franch/@{{m.franchises}}'><b>@{{m.franchises | wc}}</b></a>
</b>
 <br>


 <div class="row space_above">
   <div class="col-sm-8" style='border-right:solid #808080 2px'>

 <span class='label label-default slight-big'>RunTime: @{{m.runtime}}</span>
 <span class='label label-default slight-big'>Open:@{{m.open}}</span>
 <span class='label label-default slight-big'>Close:@{{m.close}}</span>
 <br>
 <span class='label label-default slight-big'>Production Budget:@{{m.production_budget}}</span>
 <span class='label label-default slight-big'>Total Gross:@{{m.gross1 |  currency:'$':0}}</span>
 <br>
 <p class='label label-default slight-big'>Subs:</p> 
      <span ng-repeat='s in m.sub_genres'>
            <!-- <span style='color:black'> | @{{s.rank}}-</span><a class='text-link' href="" target="_blank">@{{s.title}}</a> -->
     <a ng-href="@{{ s.link | git:'mojo_chart' }}" target="_blank"><span class='player'>@{{s.title | wc}}</span></a> |
      </span>
 <br>

<div id='actors'>
   <span class='label label-default slight-big'>Actors:</span> <br>
   <span ng-repeat='player in m.players.actors'>
         <a ng-href='#main/actor/@{{player}}'><span class='player'>@{{player | wc}}</span></a>
           <a class='_icon' href='@{{player | git:"google_search"}}' target='_blank'>{!!fa2('google',0)!!}</a><a class='_icon' href='@{{player | git:"google_img"}}' target='_blank'>{!!fa2('camera',0)!!}</a>| 
   </span>  
   <span ng-repeat='player in m.players.actor'>
        <a ng-href='#main/actor/@{{player}}'><span class='player'>@{{player | wc}}</span></a>
           <a class='_icon' href='@{{player | git:"google_search"}}' target='_blank'>{!!fa2('google',0)!!}</a><a class='_icon' href='@{{player | git:"google_img"}}' target='_blank'>{!!fa2('camera',0)!!}</a>| 
    </span>  
</div>


   </div>
   <div class="col-sm-4">

<div id='directors'>
   <span class='label label-default slight-big'>Directors:</span> <br>
   <span ng-repeat='player in m.players.directors'>
         <a href='@{{player | git:"google_search"}}' target="_blank"><span class='player'>@{{player | wc}}</span></a> | 
   </span>  
   <span ng-repeat='player in m.players.director'>
         <a href='@{{player | git:"google_search"}}' target="_blank"><span class='player'>@{{player | wc}}</span></a> | 
   </span>  
</div>

<div id='writers'>
   <span class='label label-default slight-big'>Writers:</span> <br>
   <span ng-repeat='player in m.players.writers'>
         <a href='@{{player | git:"google_search"}}' target="_blank"><span class='player'>@{{player | wc}}</span></a> | 
   </span>  
   <span ng-repeat='player in m.players.writer'>
         <a href='@{{player | git:"google_search"}}' target="_blank"><span class='player'>@{{player | wc}}</span></a> | 
   </span>  
</div>

<div id='composers'>
   <span class='label label-default slight-big'>Composers:</span> <br>
   <span ng-repeat='player in m.players.composers'>
         <a href='@{{player | git:"google_search"}}' target="_blank"><span class='player'>@{{player | wc}}</span></a> | 
   </span>  
   <span ng-repeat='player in m.players.composer'>
         <a href='@{{player | git:"google_search"}}' target="_blank"><span class='player'>@{{player | wc}}</span></a> | 
   </span>  
</div>

<div id='producers'>
   <span class='label label-default'>Producers:</span> <br>
   <span ng-repeat='player in m.players.producers'>
         <a href='@{{player | git:"google_search"}}' target="_blank"><span class='player'>@{{player | wc}}</span></a> | 
   </span>  
   <span ng-repeat='player in m.players.producer'>
         <a href='@{{player | git:"google_search"}}' target="_blank"><span class='player'>@{{player | wc}}</span></a> | 
   </span>  
</div>

   </div>
 </div>


  </div>
</div>



<hr style='margin:10px 0px -10px 0px'>

<nav class=' text-center'>
  <ul class="pagination">
    <li ng-class="prevPageDisabled()"><a ng-click="setPage(0)">{!!fa2('fast-backward')!!}</a></li>
    <li ng-class="prevPageDisabled()"><a ng-click="prevPage()">{!!fa2("step-backward")!!}</a></li>
            <li ng-repeat="n in pagi.before" ng-click="setPage(n)">
              <a>@{{n+1}}</a>
            </li>
            <li class='active'><a>@{{data.current_page+1}}</a></li>
            <li ng-repeat="n in pagi.after" ng-click="setPage(n)">
              <a>@{{n+1}}</a>
            </li>
    <li ng-class="nextPageDisabled()"><a ng-click="nextPage()">{!!fa2("step-forward")!!}</a></li>
    <li ng-class="nextPageDisabled()"><a ng-click="setPage(pageCount())">{!!fa2("fast-forward")!!}</a></li>
    <li class='pull-right'><input type="number" ng-model='data.gotopage' class='form-control' placeholder='Page Num'></li>
  </ul>
</nav>



<div class="clearfix"></div>

