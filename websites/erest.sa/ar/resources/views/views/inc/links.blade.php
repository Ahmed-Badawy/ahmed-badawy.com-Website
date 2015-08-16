<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="{{asset( get_dirs('views').'images/icons/favicon.png')}}" />
<link href='http://fonts.googleapis.com/css?family=Hind:400,300,600,500,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>



<!-- Bootstrap & Styles -->
<link href="{{asset( get_dirs('views').'css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/bootstrap-theme.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/block_grid_bootstrap.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/owl.theme.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/animate.min.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/jquery.circliful.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/slicknav.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/style.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/fonts-web/font.css')}}" rel="stylesheet">
<link href="{{asset( get_dirs('views').'css/lightview.css')}}" rel="stylesheet">


<script src="{{asset( get_dirs('views').'js/jquery.min.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/bootstrap.min.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/lightview.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/hoverIntent.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/superfish.min.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/owl.carousel.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/wow.min.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/jquery.circliful.min.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/waypoints.min.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/jquery.responsiveTabs.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/retina.min.js')}}"></script>
<script src="{{asset( get_dirs('views').'js/custom.js')}}"></script>


{{--<link href="{{asset( get_dirs('views').'css/style-chat.css')}}" rel="stylesheet">--}}



<script>
    /* Home Page Slider
     ========================================================================== */
    $(document).ready(function() {


        var sync1 = $("#mainslider");
        var sync2 = $("#mainslider-nav");

        sync1.owlCarousel({
            singleItem : true,
            slideSpeed : 1000,
            paginationSpeed: 800,
            navigation: false,
            pagination:false,
            autoPlay:7500,
            afterAction : syncPosition,
            responsiveRefreshRate : 200,
        });

        sync2.owlCarousel({
            items : 4,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [979,4],
            itemsTablet : [768,4],
            itemsMobile : [479,2],
            pagination:false,
            responsiveRefreshRate : 100,
            afterInit : function(el){
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });

        function syncPosition(el){
            var current = this.currentItem;
            $("#mainslider-nav")
                    .find(".owl-item")
                    .removeClass("synced")
                    .eq(current)
                    .addClass("synced")
            if($("#mainslider-nav").data("owlCarousel") !== undefined){
                center(current)
            }
        }

        $("#mainslider-nav").on("click", ".owl-item", function(e){
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo",number);
        });

        function center(number){
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for(var i in sync2visible){
                if(num === sync2visible[i]){
                    var found = true;
                }
            }

            if(found===false){
                if(num>sync2visible[sync2visible.length-1]){
                    sync2.trigger("owl.goTo", num - sync2visible.length+2)
                }else{
                    if(num - 1 === -1){
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if(num === sync2visible[sync2visible.length-1]){
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if(num === sync2visible[0]){
                sync2.trigger("owl.goTo", num-1)
            }
        }

    });


    // ______________ CAROUSEL
    $(document).ready(function() {

        $("#carousel-example").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]

        });

    });



    /* ?estimonials
     ========================================================================== */
    $(document).ready(function() {
        $("#testimonials-carousel").owlCarousel({
            items: 1,
            autoPlay: 5000,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1]
        });
    });

    // ______________ STATS
    jQuery(document).ready(function() {
        $('.statistics').waypoint(function() {

            $('#myStat1').circliful();
            $('#myStat2').circliful();
            $('#myStat3').circliful();
            $('#myStat4').circliful();

        }, { offset: 800, triggerOnce: true });
    });

</script>




<script>
    $(document).ready(function() {
        $("#domainextensions").owlCarousel({
            autoPlay: 4000,
            items: 8,
            itemsDesktop: [1199, 6],
            itemsDesktopSmall: [979, 6],
            pagination: false
        });

//        $("#tld-table").tablesorter();
    });
</script>
