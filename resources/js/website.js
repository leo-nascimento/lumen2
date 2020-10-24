$(document).ready(function () {
    new WOW().init();

    $('.count-co2').counter();
    $('.count-money').counter();
    $('.count-energy').counter();
    $('.count-plates').counter();

    var domain = window.location.hostname;

    if (domain == '127.0.0.1')
        domain = domain + ':8000';
    var deviceWidth = $(window).width();
    var blackImgSource = 'http://' + domain + '/img/logos/logo-navbar.png';
    var whiteImgSource = 'http://' + domain + '/img/logos/logo-navbar-white.png';

    if (deviceWidth >= 975) {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 19) {
                $('.navbar-brand img').attr('src', blackImgSource);
            } else {
                $('.navbar-brand img').attr('src', whiteImgSource)
            }
        });
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    var blog = new Swiper('.swiper-wrapper-blog', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        grabCursor: true,
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            }
        }
    });

    var projects = new Swiper('.swiper-projects', {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    $('.benefits').click(function () {
        var iconWhite = $('img', this).attr('src').replace('.svg', '-white.svg');
        $('img', this).attr('src', iconWhite);
        $(this).addClass('onFocus')
        var elements = document.querySelectorAll('.benefits');
        for (var i = 0; i < elements.length; i++) {
            if (!$(elements[i]).hasClass('onFocus')) {
                var icon = $('img', elements[i]).attr('src').replace('-white.svg', '.svg');
                $('img', elements[i]).attr('src', icon);
            }
        }
        $(this).removeClass('onFocus');
    });

    $('.project-section').hover(function () {
        element = $(this).attr('id');
        $(this).css({"background-color": "rgba(249,194,0,0.6)"});
        $("#" + element + "-content").removeClass('d-none');
        switch (element) {
            case 'comercial':
                $('#project-bg').css({"background": "url('../img/backgrounds/comercial.jpg') no-repeat center center"});
                break;
            case 'residence':
                $('#project-bg').css({"background": "url('../img/backgrounds/residence.jpg') no-repeat center center"});
                break;
            case 'condominium':
                $('#project-bg').css({"background": "url('../img/backgrounds/condominium.jpg') no-repeat center center"});
                break;
            case 'rural':
                $('#project-bg').css({"background": "url('../img/backgrounds/rural.jpg') no-repeat center center"});
                break;
        }
    }).on('mouseleave', function () {
        $(this).css({"background-color": "transparent"});
        $("#" + element + "-content").addClass('d-none');
    });

    var myLatlng = new google.maps.LatLng(-15.8667852,-47.9320163);
    var mapOptions = {
        zoom: 16,
        center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById("map-google"), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        title:"Lumen Solar Energia"
    });

// To add the marker to the map, call setMap();
    marker.setMap(map);

    $("input.money").maskMoney({
        prefix: 'R$ ',
        allowNegative: false,
        allowZero: true,
        thousands: '.',
        decimal: ',',
        affixesStay: true,
    });

    const PhoneMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    }, options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(PhoneMaskBehavior.apply({}, arguments), options);
        }
    };
    $('input.phone').mask(PhoneMaskBehavior, options);

    $('#budget').on('hidden.bs.modal', function () {
        const budget = document.querySelector('#budget-form')
        budget.firstElementChild.reset();
        budget.classList.add('d-none');

        const economyBox = document.querySelector('#economy-form')
        const form = economyBox.firstElementChild;
        economyBox.classList.add('d-none');
        form.reset();
        avarageChange();
        form.classList.remove('d-none');
        document.querySelector('#economy-result')
            .classList.add('d-none');

        document.querySelector('#modal-buttons')
            .classList.remove('d-none');
    })
});

function changeModalContent(id, hide = true ) {
    let element = document.querySelector('#' + id);
    if (hide) {
        element.classList.remove('d-none');
        element = document.querySelector('#modal-buttons');
        element.classList.add('d-none');
    } else {
        element.classList.add('d-none');
        element = document.querySelector('#modal-buttons');
        element.classList.remove('d-none');
    }
    avarageChange();
}

$('#budget-call-button').on('click', function (e) {
    form = $('#economy-search');
    form[0].reset();
    avarageChange();
    form.removeClass('d-none');
    $('#economy-form').addClass('d-none');
    $('#economy-result').addClass('d-none');
    changeModalContent('budget-form');
});

$('#avarage-option').on('change', function(e) {
    avarageChange();
})

function avarageChange() {
    try {
        const option = $('#avarage-option').val();
        console.log(option);
        const consumptionDiv = $('#consumption');
        const billPriceDiv = $('#bill_price');

        if (option === 'avarage_bill_price') {
            billPriceDiv.show();
            consumptionDiv.hide();
        } else {
            consumptionDiv.show();
            billPriceDiv.hide();
        }
    } catch (e) {
    }
}
