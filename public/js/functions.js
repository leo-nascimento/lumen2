$(document).ready(function () {
    toastr.options = {
        'positionClass': 'md-toast-bottom-right',
        'progressBar': true,
        'timeOut': 4000
    };

    (function ($){
        $.fn.counter = function() {
            const $this = $(this),
                numberFrom = parseInt($this.attr('data-from')),
                numberTo = parseInt($this.attr('data-to')),
                delta = numberTo - numberFrom,
                deltaPositive = delta > 0 ? 10 : 0,
                time = parseInt($this.attr('data-time')),
                changeTime = 10;

            let currentNumber = numberFrom,
                value = delta*changeTime/time;
            var interval1;
            const changeNumber = () => {
                currentNumber += value;
                //checks if currentNumber reached numberTo
                (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
                this.text(parseInt(currentNumber));
                currentNumber == numberTo ? clearInterval(interval1) : currentNumber;
            }

            interval1 = setInterval(changeNumber,changeTime);
        }
    }(jQuery));

    $(".btn-submit").click(function (e) {
        e.preventDefault();

        const form = $(this).closest('.ajax-form');
        if (!form) {
            console.log("Form not found");
            return false;
        }

        if(!validateFieldsRequired(form)) {
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

            if (res.type && res.message) {
                toastr[res.type](res.message);
            }

            if (res.success) {
                form[0].reset();
            }
        }).fail(function (res) {
            btn.html(text);
            console.log(res);
            if (res.message) {
                toastr[res.type](res.message);
            }
        });
    });
});

function economyResult(res) {
    console.log('res', res)
    const form = $('#economy-search');
    const div = $('#economy-result');
    form.addClass('d-none');
    div.removeClass('d-none');

    $('#system-size').text(`${res.power} kW`);
    $('#energy-economy').text(`${toMoney(res.economy_value)} por ano`);
    $('#value-investment').text(toMoney(res.final_value));

    $('#btn-economy-back').on('click', function (e) {
        div.addClass('d-none');
        form[0].reset();
        avarageChange();
        form.removeClass('d-none');
    });
}

function budget(res) {
    const form = $('#economy-search');
    const div = $('#economy-result');
    form.addClass('d-none');
    div.removeClass('d-none');
    div.find('h4').text(res.total);

    $('#btn-economy-back').on('click', function (e) {
        div.addClass('d-none');
        form[0].reset();
        form.removeClass('d-none');
    });
}

function validateFieldsRequired(form) {
    let validForm = true;

    Array.from(form[0]).forEach((el) => {
        if (el.required !== undefined) {
            let isVisible = true;
            try {
                // console.log('el',  el.parent())
                // console.log('visible',  el.parent().is(':visible'))
                isVisible = $(el).parent().is(':visible');
            } catch (e) {
            }

            if (el.required && el.value.length < 1 && isVisible) {
                el.classList.add('is-invalid');
                el.addEventListener('change', () => el.classList.remove('is-invalid'));
                el.addEventListener('keyup', () => el.classList.remove('is-invalid'));
                validForm = false;
            }
        }
    });

    return validForm;
}

function toMoney(value) {
    try {
        // return 'R$ '+ parseFloat(value.toLocaleString('pt-BR')).toFixed(2);
        return parseFloat(value).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    } catch (e) {
        return value;
    }
}

function projectMobileCard(id) {
    $("#residencial-mobile-content,#comercial-mobile-content,#rural-mobile-content,#condominio-mobile-content").addClass('d-none');
    document.getElementById("project-mobile").className = '';
    document.getElementById("project-mobile").className = id;
    var element = document.getElementById(id + '-mobile-content');
    element.classList.remove("d-none");
}
