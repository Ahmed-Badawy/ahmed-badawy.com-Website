


<!-- JS Global Compulsory -->
{!! get_it("unify/One-Page/assets/plugins/jquery/jquery.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/jquery/jquery-migrate.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/bootstrap/js/bootstrap.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/smoothScroll.js") !!}
{!! get_it("unify/One-Page/assets/plugins/jquery.easing.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/pace/pace.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/jquery.parallax.js") !!}
{!! get_it("unify/One-Page/assets/plugins/counter/waypoints.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/counter/jquery.counterup.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/owl-carousel/owl.carousel.js") !!}


{!! get_it("unify/One-Page/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js") !!}
{!! get_it("unify/One-Page/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js") !!}

<!-- JS Page Level-->
{!! get_it("unify/One-Page/assets/js/one.app.js") !!}
{!! get_it("unify/One-Page/assets/js/forms/login.js") !!}
{!! get_it("unify/One-Page/assets/js/forms/contact.js") !!}
{!! get_it("unify/One-Page/assets/js/plugins/pace-loader.js") !!}
{!! get_it("unify/One-Page/assets/js/plugins/owl-carousel.js") !!}
{!! get_it("unify/One-Page/assets/js/plugins/revolution-slider.js") !!}
{!! get_it("unify/One-Page/assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js") !!}

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
        LoginForm.initLoginForm();
        ContactForm.initContactForm();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullScreen();
    });
</script>

{{--<!--[if lt IE 10]>--}}
{{--{!! get_it("unify/One-Page/assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js") !!}--}}
{{--<![endif]-->--}}

</body>
</html>