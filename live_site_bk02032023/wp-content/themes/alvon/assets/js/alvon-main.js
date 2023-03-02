(function ($) {
    "use strict";

    // window-load
    $(window).on('load', function () {
        $("#loading").fadeOut(500);
    })

    // meanmenu
    $('#mobile-menu').meanmenu({
        meanMenuContainer: '.mobile-menu',
        meanScreenWidth: "992",
        meanMenuOpen:"<span></span><span></span><span></span>",
    });

    // sticky header
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 300) {
            $("#header-sticky").removeClass("sticky-menu");
            $(".menu-stricky-height-fix").removeClass("height-fix");
        } else {
            $("#header-sticky").addClass("sticky-menu");
            $(".menu-stricky-height-fix").addClass("height-fix");
        }
    });


    // data - background
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    })


    // mainSlider
    function mainSlider() {
        var BasicSlider = $('.slider-active');
        BasicSlider.on('init', function (e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
        BasicSlider.slick({
            autoplay: false,
            autoplaySpeed: 10000,
            dots: false,
            fade: true,
            arrows: false,
            responsive: [
                { breakpoint: 767, settings: { dots: false, arrows: false } }
            ]
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function () {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function () {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    mainSlider();


    // niceSelect;
    $(".selected").niceSelect();


    // testimonial
    $('.rwork-active').slick({
        slidesToShow: 4,
        prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',
        dots: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            arrows: true,
            slidesToShow: 3
          }
        },
        {
          breakpoint: 992,
          settings: {
                    arrows: true,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        },
      ]
    });

    // smoth-scroll
    $(function () {
        $('.s-down-arrow a').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 40
            }, 1000);
            event.preventDefault();
        });
    });

    /* magnificPopup img view */
    $('.popup-image').magnificPopup({
        type: 'image',
        gallery: {
          enabled: true
        }
    });

    /* magnificPopup video view */
    $('.popup-video').magnificPopup({
        type: 'iframe'
    });

    // counterUp
    $('.count').counterUp({
        delay: 10,
        time: 2000
    });


    // isotop
    $('.portfolio-d-active').imagesLoaded( function() {
        // init Isotope
        var $grid = $('.portfolio-d-active').isotope({
          itemSelector: '.grid-item',
          percentPosition: true,
          masonry: {
            columnWidth: 1,
          }
        });

    // filter items on button click
    $('.portfolio-menu').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });
    });

    //for menu active class
    $('.portfolio-menu button').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });


    // aos-active
    AOS.init({
        duration: 1000,
        mirror: true
    });

    // WOW active
    new WOW().init();


})(jQuery);