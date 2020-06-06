/*
| ==========================================================
| Preloader
| ========================================================== */
$(window).on('load', function() {
    $('#preloader').fadeOut('100');
});





/*
| ==========================================================
| Scroll To Top
| ========================================================== */

$(document).ready(function() {
    'use strict';
    // Scroll To Top
    $('body').prepend('<div class="go-top"><span id="top"><img src="assets/img/go-top.svg" alt="top" /></span></div>');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 500) {
            $('.go-top').fadeIn(600);
        } else {
            $('.go-top').fadeOut(600);
        }
    });
    $('#top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    // MENU

    var slideout = new Slideout({
        'panel': document.getElementById('main'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
    });

    document.querySelector('.js-slideout-toggle').addEventListener('click', function() {
        slideout.toggle();
    });

    // Dropdown mobile
    $('.menu-section .dropdown').click(function() {
        $('.sub-menu').slideToggle();
        $(this).toggleClass('active');
    });
    // Cart Del Click
    $('.cart-popup-right-del').click(function() {
        $(this).parent().parent().fadeOut();

    });
    // Profile Del Click
    $('.address-icon a + a').click(function() {
        $(this).parent().parent().fadeOut();

    });
    // Products
    $('.products-menu-bar').click(function() {
        $(".products-left").toggleClass('active');
    });
    $('.mobile-cat-cross').click(function() {
        $(".products-left").removeClass('active');
    });

    // slider
    $('.team-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        infinite: true,
        pauseOnHover: false,
        responsive: [{
                breakpoint: 1034,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    // Product page slider
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
        responsive: [{
                breakpoint: 576,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });


});


// poster frame click event
$(document).on('click', '.js-videoPoster', function(ev) {
    ev.preventDefault();
    var $poster = $(this);
    var $wrapper = $poster.closest('.js-videoWrapper');
    videoPlay($wrapper);
});

// play the targeted video (and hide the poster frame)
function videoPlay($wrapper) {
    var $iframe = $wrapper.find('.js-videoIframe');
    var src = $iframe.data('src');
    // hide poster
    $wrapper.addClass('videoWrapperActive');
    // add iframe src in, starting the video
    $iframe.attr('src', src);
}

// stop the targeted/all videos (and re-instate the poster frames)
function videoStop($wrapper) {
    // if we're stopping all videos on page
    if (!$wrapper) {
        var $wrapper = $('.js-videoWrapper');
        var $iframe = $('.js-videoIframe');
        // if we're stopping a particular video
    } else {
        var $iframe = $wrapper.find('.js-videoIframe');
    }
    // reveal poster
    $wrapper.removeClass('videoWrapperActive');
    // remove youtube link, stopping the video from playing in the background
    $iframe.attr('src', '');
}

// DATE PICKER
$('[data-toggle="datepicker"]').datepicker();