<?php
$index = [
        "img" => get_thumb($page_img),
        "title" => "My Chrome APPs !",
        "desc" => "My APPs on Google Chrome Plateform",
        "desc2" => "ملحوظة: جميع البرامج هنا تجريبية - إذا كنت تريد شراء النسخ المكتملة أو إضافة بعض الخواص لها يمكنك الإتصال بـ <span class='bright'>".social('my_phone_1')."</span>.",
    // "desc2" => "These Applications are not in a stable final state, meant to be used for testing purposes only. This means that there will be unfinished features, bugs, many updates and even untested modules, code & plugins. These Applications require internet connection to work on our server. if you need a private version for your own work please call the developer: ahmed badawy -- 01111988246",
        "itiration" => sr::external("chrome apps"),
];
?>



@section('breadcrumbs')
@overwrite
@section("media")
@overwrite

@section("css_add")
    .jumbotron{
    background-color:rgba(0,0,0,.8)
    }
    section h4 a,section h4 a:hover,section h4 a:visited{
    display:block;
    color:inherit;
    text-decoration: none;
    }
    .arabic{
    font-size:105%;
    }
    .grid-elm2{
        {{--background:rgba(0,0,0,.6);--}}
        color:white;
        padding: 10px;
        border:2px solid #333;
        {{--border-radius:15px;--}}
        {{--margin-bottom:10px;--}}
        height:200px;
        overflow-x:hidden;
        transition:all linear .2s;
    }
    .grid-elm2:hover,.grid-elm2:active{
        background:rgba(0,0,0,.6);
    }
    .grid-elm2 a{
        text-decoration:none;
        color:white
    }
    .english{
        font-size:110%;
    }

    #page_container {
		margin-top:30px;
	}
@overwrite



<div class="jumbotron">
    <div class="container">
        <br>

        <div class="col-md-2">
            <img class="img-circle deny" src='{!! $index["img"] !!}' width='140' height="140" alt="Generic placeholder image">
        </div>
        <div class='col-md-10'>
            <h1>{!! $index['title'] !!}</h1>
            <p>{!! $index['desc'] !!}</p>
            <p dir='rtl' class='arabic h6' style='font-size:1.2em'>{!! $index['desc2'] !!}</p>
        </div>

    </div>
</div>



<div class="container-fluid">
    <div class="col-sm-12">


    <div class="row arabic">

        @foreach($index['itiration'] as $project)
            <?php $project_name = $project['page_name']; ?>

                <div class="col-sm-6 text-center grid-elm2">
                    <div class="col-sm-3">
                        <a href='{{$project["link"]}}' target='_blank'>
                            <img class="media-object img-rounded" src="{{th($project["page_img"])}}" alt="{{$project['page_title']}}">
                        </a>
                    </div>
                    <div class="col-xs-9">
                        <h3 class=""><a href='{{$project["link"]}}' target='_blank'>
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-{{$project['logo']}} fa-stack-1x fa-inverse"></i>
</span>
{!! $project_name !!}</a>
                        </h3>
                        <a class='desc arabic' href='{{$project["link"]}}' target='_blank'>{!! $project['page_desc'] !!}</a>
                    </div>
                </div>

        @endforeach

    </div>
    <br><br>

</div>
</div><!-- /.container -->









