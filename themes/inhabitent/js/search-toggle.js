(function ($) {
    /* Animating search field on click */
    $('.fa-search').click(function () {
        event.preventDefault();
        toggleSearch();
        $('.search-field').focus();
    });

    /* Animating out search field when out of focus */
    $('.search-field').on('blur', function () {
        toggleSearch();
    });

    /* Animating search field function*/
    function toggleSearch() {
        $('.search-field').animate({
            width: 'toggle'
        });
    }
})(jQuery);