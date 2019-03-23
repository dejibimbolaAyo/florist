<!-- js -->
<script src="{{asset('assets/front/js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('assets/front/js/modernizr.custom.js')}}"></script>
<script src="{{asset('assets/front/js/slider.js')}}"></script>
<script>
    $(function () {Slider.init()});
</script>

<!-- stats -->
<script src="{{asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<script src="{{asset('assets/front/js/aos.js')}}"></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>

<!-- carousel -->
<script src="{{asset('assets/front/js/owl.carousel.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                900: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>
<!-- //carousel -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!--/ start-smoth-scrolling -->
<script src="{{asset('assets/front/js/move-top.js')}}"></script>
<script src="{{asset('assets/front/js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function () {
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->
<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
<!--// end-smoth-scrolling -->
<script src="{{asset('assets/front/js/jquery-1.7.2.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.quicksand.js')}}"></script>
<script src="{{asset('assets/front/js/pretty-script.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.prettyPhoto.js')}}"></script>
<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
<!-- /js -->
<script src="{{asset('assets/front/js/bootstrap.js')}}"></script>
<!-- //js -->