(function($) {

    $(document).ready(function() {

        $('#nav-icon').click(function() {
            $(this).hide();
            $('#mobile-nav').animate({ height: 'show' }, 500, function() {});
        });

        $('.nav-close-icon').on('click', function($event) {
            event.stopPropagation();
            $('#mobile-nav').animate({ height: 'hide' }, 500, function() {
                $('#nav-icon').show();
            });
        });

        $('#fullpage').fullpage({
            //Navigation
            navigation: true,
            navigationPosition: 'left',
            slidesNavigation: true,
            slidesNavPosition: 'bottom',

<<<<<<< HEAD
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
        normalScrollElements: '#element1, .element2',
        scrollOverflow: true,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        bigSectionsDestination: null,
=======
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
            normalScrollElements: '#element1, .element2',
            scrollOverflow: false,
            scrollOverflowOptions: null,
            touchSensitivity: 15,
            normalScrollElementTouchThreshold: 5,
            bigSectionsDestination: null,
>>>>>>> 0702359d6511fd66206e5b53159d2cd3cecace52

            //Accessibility
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,

<<<<<<< HEAD
        //Design
        controlArrows: true,
        verticalCentered: false,
        fixedElements: 'nav',
        responsiveWidth: 0,
        responsiveHeight: 0,
        responsiveSlides: false,
       // sectionsColor : ['#000', '#69B9C6', '#F5A623', '#393E53', '#393E53'],
=======
            //Design
            controlArrows: true,
            verticalCentered: true,
            fixedElements: 'nav',
            responsiveWidth: 0,
            responsiveHeight: 0,
            responsiveSlides: false,
            // sectionsColor : ['#000', '#69B9C6', '#F5A623', '#393E53', '#393E53'],
>>>>>>> 0702359d6511fd66206e5b53159d2cd3cecace52

            //Custom selectors
            sectionSelector: '.section',
            slideSelector: '.slide',

            lazyLoading: true,

            //events
            onLeave: function(index, nextIndex, direction) {},
            afterLoad: function(anchorLink, index) {},
            afterRender: function() {},
            afterResize: function() {},
            afterResponsive: function(isResponsive) {},
            afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {},
            onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {}
        });
    });

})(jQuery);