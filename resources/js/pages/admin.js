$(document).ready(function() {
    $(".button-collapse").sideNav();
    $('.mdb-select').materialSelect();
    CKEDITOR.replace( 'post-description' );
    $('.file-upload').file_upload();
    $('.toast').toast('show');
});
