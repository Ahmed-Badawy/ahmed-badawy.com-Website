@include("CMS.-layouts.flatty.head")
@include("CMS.-layouts.flatty.header")




    <div id='wrapper'>
        <div id='main-nav-bg'></div>

    @include("CMS.-layouts.flatty.side-nav")


    <section id='content'>
        <div class='container'>



<!-- ******************************************************************** -->
{!! $content_layout !!}
<!-- ******************************************************************** -->

            @include("CMS.-layouts.flatty.footer")
        </div>
    </section>





</div>




@include("CMS.-layouts.flatty.foot")
