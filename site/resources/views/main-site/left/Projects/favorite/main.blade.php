    <div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title"></h1><h3 class='text-center'>Favorite Websites List</h3>
  </div>
  <div class="panel-body">
    <h5>


  <div class="input-group">    
    <span class="input-group-addon">Filter Results: </span>
    <input type="search" ng-model='search' class='form-control'>
  </div>
<h3>List: @{{selected_cate | uppercase}}</h3>
<hr>



<?php 
 // $imgs_url = (Dev) ? imgs_dir."projects/favorite_sites_imgs/" : REMOTE_SITE_URL."/public/site-imgs/projects/favorite_sites_imgs/"
  $imgs_url = imgs_dir.'projects/favorite_sites_imgs/';
?>


<div ng-repeat='site in data.sites | filter:search' class="media favorite_item @{{site.class}}" ng-dblclick='gotourl(site)' ng-click='hover_site(site);'>
      <a class="pull-left" href="#">
        <img class="media-object img-rounded" src="{{$imgs_url}}@{{site.img}}" height="70px">
      </a>
      <div class="media-body">
        <p class='label label-default'>@{{site.list}}</p><h4 style='display:inline' class="media-heading">&nbsp;@{{site.title}} </h4>
            <small class='badge badge-default pull-right'>Visits: @{{site.visits}}</small>
        <p>
              @{{site.url}} <br>
              @{{site.desc}}  
        </p>
      </div>
</div>








<br>
    </h5>
  </div>


  </div>
