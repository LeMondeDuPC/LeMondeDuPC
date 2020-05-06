(function ($) {

    const $window = $(window),
        $body = $('body'),
        $menu = $('#menu'),
        $sidebar = $('#sidebar'),
        $main = $('#main');

    // Breakpoints.
    breakpoints({
        xlarge: ['1281px', '1680px'],
        large: ['981px', '1280px'],
        medium: ['737px', '980px'],
        small: ['481px', '736px'],
        xsmall: [null, '480px']
    });

    // Play initial animations on page load.
    $window.on('load', function () {
        window.setTimeout(function () {
            $body.removeClass('is-preload');
        }, 100);
    });

    // Menu.
    $menu
        .appendTo($body)
        .panel({
            hideOnClick: true,
            hideOnSwipe: true,
            hideOnEscape: true,
            resetScroll: true,
            resetForms: true,
            swipe: 'right',
            target: $body,
            visibleClass: 'is-menu-visible'
        });

    // Search (header).
    const $search = $('#search'),
        $search_input = $search.find('input');

    $body
        .on('click', '[href="#search"]', function (event) {

            event.preventDefault();

            // Not visible?
            if (!$search.hasClass('visible')) {

                // Reset form.
                $search[0].reset();

                // Show.
                $search.addClass('visible');

                // Focus input.
                $search_input.focus();

            }

        });

    $search_input
        .on('keydown', function (event) {

            if (event.keyCode === 27)
                $search_input.blur();

        })
        .on('blur', function () {
            window.setTimeout(function () {
                $search.removeClass('visible');
            }, 100);
        });

    // Intro.
    const $intro = $('#intro');
    const $nav = $('#nav');
    const $navheader = $('#navheader');
    const $navmenu = $('#navmenu');

    // Move to main on <=large, back to sidebar on >large.
    breakpoints.on('<=large', function () {
        $intro.prependTo($main);
    });

    breakpoints.on('>large', function () {
        $intro.prependTo($sidebar);
    });

    breakpoints.on('<=medium', function () {
        $nav.prependTo($navmenu);
        $nav.addClass('links');
        $navmenu.removeClass('is-hide');
    });

    breakpoints.on('>medium', function () {
        $nav.prependTo($navheader);
        $nav.removeClass('links');
        $navmenu.addClass('is-hide');
    });

})(jQuery);