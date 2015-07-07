{!! get_angular("maze1","games") !!}
    @section('head_add')
        {!! get_it("plugins/sweetAlert/sweet-alert-arabic.min.css") !!}
        {!! get_it("plugins/sweetAlert/sweet-alert.min.js") !!}
    @overwrite



@section('css_add')
	body{
		cursor: url("{{imgs_dir.'/games/maze1/bee.png'}}");
	}
	#maze{
		position:relative;
		z-index:1;
	}
	#lineout{
		cursor:pointer;
		background-color:green;
		color:green;
		border:1px solid black;
	}
@overwrite

@section("footer")
@overwrite




<!-- Main -->
<div class="text-center" ng-app="myApp">
<div ng-controller='maze1'>

<h1 class='arabic'>لعبة المتاهة</h1>


<!-- <img src="{{imgs_dir."games/maze1/maze1.jpg"}}" class='img-responsive'> -->
<!-- <img src="{{imgs_dir."games/maze1/lineout1.png"}}" id="lineout" > -->


<img src="{{imgs_dir."games/maze1/maze2.jpg"}}" id='maze' usemap="#maze">

<map name="maze">
<area shape="poly" id='lineout' ng-mouseleave="mouse_leave()" coords="
							178, 123,
							672, 123,
							672, 528,
							615, 528,
							615, 179,
							177, 179
							" />

<area shape="poly" id='lineout' ng-mouseleave="point_met()" coords="
							585,528,
							692,528,
							691,653,
							563,653
							" />							
</map>


</div>
</div>
<!-- /Main -->
