// require('./bootstrap');

$(document).ready(function(){
    $(window).scroll(function() {
        let scroll = $(window).scrollTop();
        let Nav = $('.navbar');
        let MobileNav = $('.mobile-navbar');
        if (scroll >= 1) {
            Nav.addClass('scrolled');
            MobileNav.addClass('scrolled');
        } else if (scroll === 0) {
            Nav.removeClass('scrolled');
            MobileNav.removeClass('scrolled');
        }
    });

    $('#mobile-menu').click(function() {
        $('.mobile-navbar').toggleClass('active');
    });

    $('.mobile-navbar .nav-link').click(function() {
        console.log("yo");
        $('.mobile-navbar').toggleClass('active');
    });
});

