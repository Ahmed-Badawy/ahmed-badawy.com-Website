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
    @include(get_location("Pages.cv-inc.cv_summery"))
    @include(get_location("Pages.cv-inc.cv_personal_info"))
    @include(get_location("Pages.cv-inc.cv_web_development_skills"))
    @include(get_location("Pages.cv-inc.cv_programing"))
    @include(get_location("Pages.cv-inc.cv_other_tech"))
    @include(get_location("Pages.cv-inc.cv_strength_points"))
    @include(get_location("Pages.cv-inc.cv_programing_languages"))
    @include(get_location("Pages.cv-inc.cv_general_work_skills"))
    @include(get_location("Pages.cv-inc.cv_tools_used"))
    @include(get_location("Pages.cv-inc.cv_currently_learning"))
    @include(get_location("Pages.cv-inc.cv_certifications"))
    @include(get_location("Pages.cv-inc.cv_previous_work"))
    @include(get_location("Pages.cv-inc.cv_education"))
    @include(get_location("Pages.cv-inc.cv_langus"))
    @include(get_location("Pages.cv-inc.cv_contact"))



<script type="text/javascript">
    var selected_id = "";
      $(".acc_header").on("click",function(){
          id_name = $(this)[0].id;
          acc_name = id_name+"_accordion";

          if(selected_id == id_name){
              selected_id = "";
              $(".accordion_opened").removeClass('accordion_opened');
              $('.custom_accordion').slideUp();
          }else {
              selected_id = id_name;
              $(".accordion_opened").removeClass('accordion_opened');
              $('.custom_accordion').slideUp();
              $("#" + id_name).toggleClass("accordion_opened");
              $("#" + acc_name).slideToggle();
          }
      });
</script>












      		</div>
  	</div>
</div>







       
<!-- JavaScript jQuery code from Bootply.com editor -->
<script type='text/javascript'>
$(document).ready(function() {

    $("#main-page a").not($('.deny')).not($('ul a')).attr('target','_blank');     

    $('#sidebar').affix({
        offset: {
          top: 235
        }
    });

var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;

$body.scrollspy({
  target: '#leftCol',
  offset: navHeight
});

      /* smooth scrolling sections */
      $('a[href*=#]:not([href=#])').click(function(){
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top - 50
              }, 1000);
              return false;
            }
          }
      });
        
});
</script>
   






