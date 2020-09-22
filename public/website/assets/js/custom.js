(function($) {
    "use strict";

    jQuery(document).ready(function($) {

        // Header Slide
        $(".header-slider").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            nav: true,
            navText: ['<i class="fa fa-angle-double-left"></i>', '<i class="fa fa-angle-double-left"></i>'],
            autoplay: true,
            autoplayTimeout: 4000,
            animateIn: 'pulse',
            animateOut: 'fadeOut',
            smartSpeed: 250
        });

        // Header Slide items with animate.css
        var owl = $('.header-slider');
        owl.owlCarousel();
        owl.on('translate.owl.carousel', function(event) {
            $('.header-single-slider h1').removeClass('animated').hide();
            $('.header-single-slider p').removeClass('animated').hide();
            $('.header-single-slider .boxed-btn').removeClass('animated').hide();
        });

        owl.on('translated.owl.carousel', function(event) {
            $('.header-single-slider h1').addClass('animated fadeInUp').show();
            $('.header-single-slider p').addClass('animated fadeInDown').show();
            $('.header-single-slider .boxed-btn').addClass('animated fadeInDown').show();
        });

        // Testimonial Carousel
        $(".testimonial-carousel").owlCarousel({
            items: 3,
            loop: true,
            dots: true,
            nav: false,
            margin: 30,
            center: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 1,
                },
                900: {
                    items: 3
                }
            }
        });

        // Testimonial Carousel
        $(".client-carousel").owlCarousel({
            items: 4,
            loop: true,
            dots: false,
            nav: false,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2,
                },
                1000: {
                    items: 4
                }
            }
        });

        // Exclusive Carousel for 4 column
        $(".exclusive-carousel.4-column").owlCarousel({
            items: 4,
            loop: true,
            dots: true,
            nav: false,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2,
                },
                1000: {
                    items: 4
                }
            }
        });

        // Exclusive Carousel for 3 column
        $(".exclusive-carousel.3-column").owlCarousel({
            items: 3,
            loop: true,
            dots: true,
            nav: false,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

        // Exclusive Carousel for 2 column
        $(".exclusive-carousel.2-column").owlCarousel({
            items: 2,
            loop: true,
            dots: true,
            nav: false,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });

        // MagnificPopup
        $('#gallery').each(function() {
            $(this).magnificPopup({
                delegate: 'a.gallery-popup',
                mainClass: 'mfp-zoom-in',
                type: 'image',
                tLoading: '',
                gallery: { enabled: true },
                removalDelay: 300
            });
        });


        /* --------------------------------------
            LOAD MORE GALLERY
        -------------------------------------- */

        $(".gallery-load").slice(0, 6).show();
        $("#load-pro").click(function(e) { 
            e.preventDefault();
            $("#ti-port-load").addClass("ti-port-load-show");
            $("#ti-port-load").animate({
                    display: "block"
                }, 500,
                function() {
                    // Animation complete.
                    $(".gallery-load:hidden").slice(0, 3).slideDown(); 
                    if ($(".gallery-load:hidden").length === 0) {
                        $("#load-pro").text("No more");
                    }
                    $("#ti-port-load").removeClass("ti-port-load-show");
                }
            );

        });


        /* --------------------------------------
            Scroll UP
        -------------------------------------- */

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').on('click', function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        // Search
        var changeClass = function(name) {
            $('#search').removeAttr('class').addClass(name);
        }


        /* --------------------------------------
            Smooth Scroll
        -------------------------------------- */
        $(function() {

            var $window = $(window);
            var scrollTime = 0.5;
            var scrollDistance = 250;
            $window.on("mousewheel DOMMouseScroll", function(event) {
                event.preventDefault();
                var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
                var scrollTop = $window.scrollTop();
                var finalScroll = scrollTop - parseInt(delta * scrollDistance);
                TweenMax.to($window, scrollTime, {
                    scrollTo: { y: finalScroll, autoKill: true },
                    ease: Power1.easeOut,
                    autoKill: true,
                    overwrite: 5
                });
            });
        });





        /*------------------------------------
            Sticky Menu 
        --------------------------------------*/
        var windows = $(window);
        var stick = $(".header-sticky");
        windows.on('scroll', function() {
            var scroll = windows.scrollTop();
            if (scroll < 10) {
                stick.removeClass("sticky");
            } else {
                stick.addClass("sticky");
            }
        });

        /*------------------------------------
            Toggle Menu 
        --------------------------------------*/
        // var menuOpenBtn = $('.show-submenu');
        // var menuCloseBtn = $('.close-btn');
        // var sidebarMenu = $('.menu-bar-open');
        // menuOpenBtn.on('click', function() {
        //     sidebarMenu.css('right', '0px');
        // });
        // menuCloseBtn.on('click', function() {
        //     sidebarMenu.css('right', '-200%');
        // });

        /*------------------------------------
            jQuery MeanMenu 
        --------------------------------------*/
        $('.mobile-menu-active').meanmenu({
            meanScreenWidth: "991",
            meanMenuContainer: '.mobile-menu'
        });

        /* last  2 li child add class */
        $('ul.menu > li').slice(-2).addClass('last-elements');





    });


    jQuery(window).on('load', function() {

        // Sticky Nav
        $(".sticky-nav").sticky({ topSpacing: 0 });

        // // Preloader
        jQuery(".preloader").fadeOut('slow');

    });


}(jQuery));