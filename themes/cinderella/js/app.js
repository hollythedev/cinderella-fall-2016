(function($) {

    $(document).ready(function() {

        $(".accordion").accordion({
            collapsible: true,
            active: false,
            heightStyle: 'content',
            activate: function(event, ui) {
                if (!$.isEmptyObject(ui.newHeader.offset())) {
                    $('html:not(:animated), body:not(:animated)').animate({ scrollTop: ui.newHeader.offset().top - 55 }, 0);
                }
            }
        });

        $('#bottom-mobile-nav-open-icon').click(function(event) {
            event.stopPropagation();
            $(this).hide();
            $("#bottom-mobile-nav-close-icon").show();
            $('.mobile-nav-menu-wrapper').animate({ height: 'show' }, 500, function() {});
        });

        $('#bottom-mobile-nav-close-icon').click(function(event) {
            event.stopPropagation();
            $(this).hide();
            $("#bottom-mobile-nav-open-icon").show();
            $('.mobile-nav-menu-wrapper').animate({ height: 'hide' }, 500, function() {});
        });
        // Set up for Paypal integration
        //Donation Section on Get Involved page
        //Calculates package donation amounts by multiples of $300, $1000 and $5000.
        var donation_total = 0;
        $('.target_pos').click(function() {
            $(this).next().html(function(i, val) { return val * 1 >= 0 ? val * 1 + 1 : 0 });

            var value = $(this).closest('.cp-donation-grid').find('.cp-donation-value').html().replace(/\D/g, '');
            donation_total += value * 1;
            console.log(donation_total);
        });

        $('.target_neg').click(function() {
            $(this).prev().html(function(i, val) {
                if (val * 1 - 1 >= 0) {
                    var value = $(this).closest('.cp-donation-grid').find('.cp-donation-value').html().replace(/\D/g, '');
                    donation_total -= value * 1;
                    return val * 1 - 1;
                }
                return 0;
            });
            console.log(donation_total);
        });

        $('.carousel').flickity({
            cellAlign: 'left',
            contain: true,
            percentPosition: false,
            imagesLoaded: true,
            autoPlay: false,
            prevNextButtons: false,
            wrapAround: true,
            pageDots: true
        });

        $('#fullpage').fullpage({
            //Navigation
            navigation: true,
            navigationPosition: 'none',
            slidesNavigation: true,
            slidesNavPosition: 'bottom',

            //Scrolling
            css3: true,
            scrollingSpeed: 700,
            autoScrolling: true,
            fitToSection: true,
            fitToSectionDelay: 1000,
            scrollBar: false,
            easing: 'easeInOutCubic',
            easingcss3: 'ease',
            loopBottom: false,
            loopTop: false,
            loopHorizontal: true,
            continuousVertical: false,
            continuousHorizontal: false,
            scrollHorizontally: false,
            interlockedSlides: false,
            dragAndMove: false,
            offsetSections: false,
            resetSliders: false,
            fadingEffect: false,
            normalScrollElements: null,
            scrollOverflow: true,
            scrollOverflowOptions: null,
            touchSensitivity: 15,
            normalScrollElementTouchThreshold: 5,
            bigSectionsDestination: null,

            //Accessibility
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,

            //Design
            controlArrows: true,
            verticalCentered: false,
            fixedElements: 'nav',
            responsiveWidth: 0,
            responsiveHeight: 0,
            responsiveSlides: false,
            // sectionsColor : ['#000', '#69B9C6', '#F5A623', '#393E53', '#393E53'],
            //Custom selectors
            sectionSelector: '.section',
            slideSelector: '.slide',

            lazyLoading: true,

            //events
            onLeave: function(index, nextIndex, direction) {
                if (index === 2 && direction === 'up') {
                    $('#desktop-nav').css({ "background-color": "" });
                }
            },
            afterLoad: function(anchorLink, index) {
                if (index === 2) {
                    $('#desktop-nav').css({ "background-color": "#393D53" });
                }
            },
            afterRender: function() {},
            afterResize: function() {},
            afterResponsive: function(isResponsive) {},
            afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {},
            onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {}
        });
    });


    // changing navigation bar on scroll
    //switch nav
    var bottomHero = $('.cp-landing-section').offset().top + $('.cp-landing-section').height();
    // on scroll
    $(window).on('scroll', function() {


        // we round here to reduce a little workload
        stop = Math.round($(window).scrollTop());
        console.log(stop)
        if (stop > bottomHero) {

            $('#desktop-nav').addClass('cp-purple');
        } else {
            $('#desktop-nav').removeClass('cp-purple');

        }

    });

})(jQuery);