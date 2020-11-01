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

    $(document).on('keydown', 'input[pattern]', function(e){
        const input = $(this);
        const oldVal = input.val();
        const regex = new RegExp(input.attr('pattern'), 'g');

        setTimeout(function(){
            const newVal = input.val();
            if(!regex.test(newVal)){
                input.val(oldVal);
            }
        }, 0);
    });
});
