$(document).ready(function() {
    new WOW().init();

    var domain = window.location.hostname;

    if (domain == '127.0.0.1')
        domain = domain + ':8000';
    var deviceWidth = $( window ).width();
    var blackImgSource = 'http://' + domain + '/img/logos/logo-navbar.png';
    var whiteImgSource = 'http://' + domain + '/img/logos/logo-navbar-white.png';

    if (deviceWidth >= 975){
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 19) {
                $('.navbar-brand img').attr('src', blackImgSource);
            }else {
                $('.navbar-brand img').attr('src', whiteImgSource)
            }
        });
    }

    $('.phases-front').on('mouseenter',function(){
        $(this).trigger('click');
    });

    $('.phases-back').on('mouseleave',function(){
        $(this).trigger('click');
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    var depoiments = new Swiper ('.swiper-depoiments', {
        slidesPerView: 1,
        spaceBetween: 40,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    var blog = new Swiper('.swiper-blog', {
        slidesPerView: 3,
        spaceBetween: 30,
        grabCursor: true,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
        ,breakpoints: {
            320: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 3,
            }
        }
    });

    $('.project-section').hover(function () {
        element = $(this).attr('id');
        $(this).css({"background-color": "rgba(249,194,0,0.6)"});
        $("#"+element+"-content").css({"display": "block"});
        switch (element) {
            case 'comercial':
                $('#project-bg').css({"background":"url('../img/backgrounds/comercial.jpg') no-repeat center center"});
                break;
            case 'residence':
                $('#project-bg').css({"background":"url('../img/backgrounds/residence.jpg') no-repeat center center"});
                break;
            case 'condominium':
                $('#project-bg').css({"background":"url('../img/backgrounds/condominium.jpg') no-repeat center center"});
                break;
            case 'rural':
                $('#project-bg').css({"background":"url('../img/backgrounds/rural.jpg') no-repeat center center"});
                break;
        }
    }).on('mouseleave',function () {
        $(this).css({"background-color": "transparent"});
        $("#"+element+"-content").css({"display": "none"});
    })
});
