$(document).ready(function () {
    toastr.options = {
        'positionClass':'md-toast-bottom-right',
        'progressBar': true,
        'timeOut': 4000
    };

    $(".btn-submit").click(function (e) {
        e.preventDefault();

        const form = $(this).closest('.ajax-form');
        if (!form) {
            console.log("Form not found");
            return false;
        }

        // start loader
        const btn = $(e.target);
        const text = btn.text();
        if (btn.attr('data-loader')) {
            btn.html('<i class="fa fa-spin fa-spinner mx-2"></i>' + btn.attr('data-loader'));
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
        }).done(function (res) {
            btn.html(text);
            console.log(res);

            if (res.call_function && typeof window[res.call_function] === 'function') {
                window[res.call_function](res);
                btn.html(text);
                return true;
            }

            if (res.message) {
                if (res.info) {
                    toastr.info(res.message);
                } else {
                    toastr.success(res.message);
                }
            }

            form[0].reset();
        }).fail(function (res) {
            btn.html(text);
            console.log(res);
            if (res.message) {
                toastr.error(res.message);
            }
        });
    });
});

function economyResult(res) {
    const div = $('#economy-result');
    div.addClass('d-none');
    setTimeout(function () {
        div.text('Seu investimento será de ' + res.total);
        div.removeClass('d-none');
    }, 200);
}
