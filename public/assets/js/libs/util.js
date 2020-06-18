(function ($) {

    /**
     * Panel-ify an element.
     * @param {object} userConfig User config.
     * @return {jQuery} jQuery object.
     */
    $.fn.panel = function (userConfig) {

        // Vars.
        let $this = $(this),
            $body = $('body'),
            $window = $(window),
            id = $this.attr('id'),
            config;

        // Config.
        config = $.extend({

            // Hide panel on link click.
            hideOnClick: false,

            // Hide panel on escape keypress.
            hideOnEscape: false,

            // Hide panel on swipe.
            hideOnSwipe: false,

            // Reset scroll position on hide.
            resetScroll: false,

            // Reset forms on hide.
            resetForms: false,

            // Side of viewport the panel will appear.
            swipe: null,

            // Target element for "class".
            target: $this,

            // Class to toggle.
            visibleClass: null

        }, userConfig);

        // Expand "target" if it's not a jQuery object already.
        if (config.target !== 'jQuery')
            config.target = $(config.target);

        // Panel.

        // Methods.
        $this._hide = function (event) {

            // Already hidden? Bail.
            if (!config.target.hasClass(config.visibleClass))
                return;

            // If an event was provided, cancel it.
            if (event) {

                event.preventDefault();
                event.stopPropagation();

            }

            // Hide.
            config.target.removeClass(config.visibleClass);

        };

        // Hide on click.
        if (config.hideOnClick) {
            $this
                .on('click', 'a', function (event) {

                    const $a = $(this);
                    let href = $a.attr('href');
                    const target = $a.attr('target');

                    if (!href || href === '#' || href === '' || href === '#' + id)
                        return;

                    // Cancel original event.
                    event.preventDefault();
                    event.stopPropagation();

                    // Hide panel.
                    $this._hide();

                    // Redirect to href.
                    window.setTimeout(function () {

                        if (target === '_blank')
                            window.open(href);
                        else
                            window.location.href = href;

                    }, config.delay + 10);

                });

        }

        // Event: Touch stuff.
        $this.on('touchstart', function (event) {

            $this.touchPosX = event.originalEvent.touches[0].pageX;
            $this.touchPosY = event.originalEvent.touches[0].pageY;

        });

        $this.on('touchmove', function (event) {

            if ($this.touchPosX === null
                || $this.touchPosY === null)
                return;

            const diffX = $this.touchPosX - event.originalEvent.touches[0].pageX,
                diffY = $this.touchPosY - event.originalEvent.touches[0].pageY,
                th = $this.outerHeight(),
                ts = ($this.get(0).scrollHeight - $this.scrollTop);

            // Hide on swipe?
            if (config.hideOnSwipe) {

                let result = false;
                const boundary = 20,
                    delta = 50;

                switch (config.swipe) {

                    case 'left':
                        result = (diffY < boundary && diffY > (-1 * boundary)) && (diffX > delta);
                        break;

                    case 'right':
                        result = (diffY < boundary && diffY > (-1 * boundary)) && (diffX < (-1 * delta));
                        break;

                    case 'top':
                        result = (diffX < boundary && diffX > (-1 * boundary)) && (diffY > delta);
                        break;

                    case 'bottom':
                        result = (diffX < boundary && diffX > (-1 * boundary)) && (diffY < (-1 * delta));
                        break;

                    default:
                        break;

                }

                if (result) {

                    $this.touchPosX = null;
                    $this.touchPosY = null;
                    $this._hide();

                    return false;

                }

            }

            // Prevent vertical scrolling past the top or bottom.
            if (($this.scrollTop < 0 && diffY < 0)
                || (ts > (th - 2) && ts < (th + 2) && diffY > 0)) {

                event.preventDefault();
                event.stopPropagation();

            }

        });

        // Event: Prevent certain events inside the panel from bubbling.
        $this.on('click touchend touchstart touchmove', function (event) {
            event.stopPropagation();
        });

        // Event: Hide panel if a child anchor tag pointing to its ID is clicked.
        $this.on('click', 'a[href="#' + id + '"]', function (event) {

            event.preventDefault();
            event.stopPropagation();

            config.target.removeClass(config.visibleClass);

        });

        // Body.

        // Event: Hide panel on body click/tap.
        $body.on('click touchend', function (event) {
            $this._hide(event);
        });

        // Event: Toggle.
        $body.on('click', 'a[href="#' + id + '"]', function (event) {

            event.preventDefault();
            event.stopPropagation();

            config.target.toggleClass(config.visibleClass);

        });

        // Window.

        // Event: Hide on ESC.
        if (config.hideOnEscape)
            $window.on('keydown', function (event) {

                if (event.keyCode === 27)
                    $this._hide(event);

            });

        return $this;

    };

})(jQuery);