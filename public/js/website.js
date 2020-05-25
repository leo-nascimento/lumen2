$(document).ready(function() {
    $('.phases-front').on('mouseenter',function(){
        $(this).trigger('click');
    });
    $('.phases-back').on('mouseleave',function(){
        $(this).trigger('click');
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
