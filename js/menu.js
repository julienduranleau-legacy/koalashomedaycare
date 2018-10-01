;(function($) {

    var SCROLL_OFFSET_TOP = 50

    var _$body = null
    var _$menuContainer = null
    var _menuContainerIsFixed = false

    $(domReady)

    function domReady() {
        _$body = $(document.body)
        _$menuContainer = $('header').first()

        $(window, _$body).on('scroll', updateMenuStatus)
        $(window).on('resize', updateWindowSize)
        _$menuContainer.find('a.anchor').on('click', scrollToId)

        updateMenuStatus()
    }

    function scrollToId(e) {
        e.preventDefault()

        var id = $(this).attr('href')
        var target = $(id)
        
        var targetPosition = Math.max(0, target.offset().top - SCROLL_OFFSET_TOP)

        if (id === "accueil" || id === "home") {
        	targetPosition = -100;
        }
        
        $("html, body").animate({ scrollTop: targetPosition + "px" });
        
    }

    function updateWindowSize(e) {
        updateMenuStatus()
    }

    function updateMenuStatus(e) {
        var currentScrollPosition = _$body.scrollTop()

        if (currentScrollPosition !== 0) {
            if (_menuContainerIsFixed === false) {
                _$menuContainer.addClass('fixed')
                _menuContainerIsFixed = true
            }
        } else {
            if (_menuContainerIsFixed === true) {
                _$menuContainer.removeClass('fixed')
                _menuContainerIsFixed = false
            }
        }
    }

})(jQuery)