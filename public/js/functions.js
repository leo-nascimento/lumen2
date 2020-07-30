$(document).ready(function () {
    $(".btn-submit").click(function (e) {
        e.preventDefault();

        const form = $(this).closest('.ajax-form');
        if (!form) {
            console.log("Form not found");
            return false;
        }

        const formData = new FormData(form[0]);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            contentType: false,
            processData: false,
            data: formData,
        }).done(function (response) {
            console.log(response);

            if (response.call_function && typeof window[response.call_function] === 'function') {
                window[response.call_function](response);
                return true;
            }

            // TODO: Mostrar um toastr quando retornar alguma mensagem

            form[0].reset();
        }).fail(function (response) {
            console.log(response);
        });
    });
});

function economyResult(res) {
    const div = $('#economy-result');
    div.addClass('d-none');
    setTimeout(function () {
        div.text('Seu investimento será de ' + res.total);
        div.removeClass('d-none');
    },200);
}
