// Dustrial with jQuery Wrapper
jQuery(document).ready(function(){  
    //fade in/out based on scrollTop value
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 0) {
            jQuery('#scroller').fadeIn();
        } else {
            jQuery('#scroller').fadeOut();
        }
    });
 
    // scroll body to 0px on click
    jQuery('#scroller').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});