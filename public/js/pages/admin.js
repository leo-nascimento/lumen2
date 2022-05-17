$(document).ready(function() {
    $("input.money").maskMoney({
        prefix: 'R$ ',
        allowNegative: false,
        allowZero: true,
        thousands: '.',
        decimal: ',',
        affixesStay: true,
    });

    $(".button-collapse").sideNav();
    $('.mdb-select').materialSelect();
    $('.file-upload').file_upload();
    $('.toast').toast('show');
    try {
        CKEDITOR.replace( 'post-description' );
    } catch (e) {
        console.log('CKEDITOR não carregado!')
    }
});
