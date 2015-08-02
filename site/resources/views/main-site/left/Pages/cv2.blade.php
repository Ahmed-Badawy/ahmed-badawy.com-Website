@section("modals")
@overwrite
@section('breadcrumbs')
@overwrite
@section('footer')
@overwrite
@section('media')
@overwrite


@section('head_add')
        {!! get_it('custom_css/cv/styles.css') !!}
@overwrite




@include(get_location("Pages.cv-inc.cv_header"))




<!-- Begin Body -->
<div class="container">
	<div class="row" id='main-page'>

      		<div class="col-md-12">




                @include(get_location("Pages.cv-inc.cv_brief"))
                @include(get_location("Pages.cv-inc.cv_personal_info"))
                @include(get_location("Pages.cv-inc.cv_previous_work"))
                @include(get_location("Pages.cv-inc.cv_summery"))
                @include(get_location("Pages.cv-inc.cv_web_development_skills"))
                @include(get_location("Pages.cv-inc.cv_programing"))
                @include(get_location("Pages.cv-inc.cv_other_tech"))
                @include(get_location("Pages.cv-inc.cv_strength_points"))
                @include(get_location("Pages.cv-inc.cv_programing_languages"))
                @include(get_location("Pages.cv-inc.cv_general_work_skills"))
                @include(get_location("Pages.cv-inc.cv_currently_learning"))
                @include(get_location("Pages.cv-inc.cv_certifications"))
                @include(get_location("Pages.cv-inc.cv_education"))
                @include(get_location("Pages.cv-inc.cv_langus"))
                @include(get_location("Pages.cv-inc.cv_tools_used"))

                @include(get_location("Pages.cv-inc.cv_contact"))



<script type="text/javascript">
    $(document).ready(function() {

        var selected_id = "";
        $(".acc_header").on("click", function () {
            elm = $(this);
            id_name = $(this)[0].id;
            acc_name = id_name + "_accordion";

            if (selected_id == id_name) {
                selected_id = "";
                $(".accordion_opened").removeClass('accordion_opened');
                $('.custom_accordion').slideUp();
            } else {
                selected_id = id_name;
                $(".accordion_opened").removeClass('accordion_opened');
                $('.custom_accordion').slideUp();
                $("#" + id_name).toggleClass("accordion_opened");
                $("#" + acc_name).slideToggle();


                //animating scroll to the new offset
                setTimeout(function(){
                    theOffset = elm.offset();
//                    console.log(theOffset);
                    $('body,html').animate({
                        scrollTop: theOffset.top - 70
                    },500);
                },400)
                //------------------------------------------
            }


        });


        $("#main-page a").not($('.deny')).not($('ul a')).attr('target', '_blank');
    });
</script>





      		</div>
  	</div>
</div>



