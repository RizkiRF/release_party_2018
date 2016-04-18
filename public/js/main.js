$(function() {
    "use strict";
    $(window).scroll(function() {
      console.log($(window).scrollTop());
        if ($(window).scrollTop() > 600) {

            $('.js-reveal-menu').removeClass('reveal-menu-hidden').addClass('reveal-menu-visible');
        } else {
            $('.js-reveal-menu').removeClass('reveal-menu-visible').addClass('reveal-menu-hidden');
        }
    });
    var get_date = $('#countdown').data('event-date');
    if (get_date) {
        $("#countdown").countdown({
            date: get_date,
            format: "on"
        });
    }

    $('#stats-counter').appear(function() {
        $('.count').countTo({
            refreshInterval: 50
        });
    });

    if ($('.sponsor-slider').length) {
        $('.sponsor-slider').slick({
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 3,
            autoplay: true,
            arrows: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }]
        });
    }
  
    $(window).scroll(function() {
        if ($(window).scrollTop() > 1000) {
            $('.back_to_top').fadeIn('slow');
        } else {
            $('.back_to_top').fadeOut('slow');
        }
    });
    $('nav a[href^=#]:not([href=#]), .back_to_top').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 1500);
        event.preventDefault();
    });
});
$(".play-video").on("click", function(e) {
    e.preventDefault();
    var videourl = $(this).data("video-url");
    $(this).append('<i class="video-loader fa fa-spinner fa-spin"></i>')
    $('.media-video iframe').attr('src', videourl);
    setTimeout(function() {
        $('.video-loader').remove();
    }, 1000);
});
if ($('.popup-gallery').length) {
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        },
        zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
                return element.find('img');
            }
        }
    });
}


//$(function() {
//    if ($('body').hasClass('animate-page')) {
//        wow = new WOW({
//            animateClass: 'animated',
//            offset: 100,
//            mobile: false
//        });
//        wow.init();
//    }
//});
