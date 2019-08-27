        jQuery(document).ready(function() {
          $('.bannerSlider').slick({
              dots: false,
              arrows: false,
              infinite: true,
              speed:2300,
              slidesToShow: 1,
              autoplay: true,
              autoplaySpeed: 2000,
              adaptiveHeight: true
          });
        });
jQuery(window).on('load',function() {
            jQuery("#preloader").fadeOut();
        });
            