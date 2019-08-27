jQuery(window).on('load',function() {
    jQuery(".loader").fadeOut();
    
});

jQuery(document).ready(function(){
	jQuery("header .mainnav-trigger").click(function () {
	    if (parseInt(jQuery("header nav").css('right')) == -300) {
	        jQuery("header nav").stop().animate({
	            right: 0
	        }, 800);
	    } else {
	        jQuery("header nav").stop().animate({
	            right: -300
	        }, 800);
	    }
	});
});