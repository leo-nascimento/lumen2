$(document).ready(function() {
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
