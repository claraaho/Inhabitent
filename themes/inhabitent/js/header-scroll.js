/**
 * Function for moving navigation bar on scroll
 */
(function ($) {
    var $document = $(document);

    $document.scroll(function(){   
        if ($document.scrollTop() > 698) {
            $('#masthead').addClass('fixed-header');
            $('#masthead').removeClass('site-header');
        } 
        else {
            $('#masthead').removeClass('fixed-header');
            $('#masthead').addClass('site-header');
            }
    });
})(jQuery);