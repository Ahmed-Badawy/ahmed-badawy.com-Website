@extends("views.-layout")


@section("content")
        <!-- projects -->

<div class="row feature wow zoomIn">
    <div class="col-sm-12" style="text-align: center; margin: 50px 0;">
        <h2>شاهد جميع أعمالنا</h2>
        <p>قامت شركة إنجاز لتقنية المعلومات بتصميم مجموعة عملاقة من المواقع في مجالات مختلفة مثل البناء والتشيد والتطوير العقاري والمواقع الشخصية والهندسية وغيرها </p>
    </div>
</div>

<div class="row feature wow zoomIn">
    <div class="col-sm-12 center-block">
        <div class='demonstrations'>

            @foreach($elements['أعمالنا'] as $con)
            <a href='{{public_dir}}site-imgs/_CMS/elements/{{$con->img}}' class='lightview col-sm-4' data-lightview-group='example' data-lightview-title="" data-lightview-caption="">
                <img src='{{public_dir}}site-imgs/_CMS/elements/{{$con->img}}' alt=''/>
            </a>
            @endforeach

        </div>
    </div>
</div>
<!-- End of projects -->
@endsection