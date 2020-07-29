$(document).ready(function () {
    $(".btn-submit").click(function(e){
        e.preventDefault();

        var form = document.querySelector('#form');
        var formData = new FormData(form);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url:"/send-budget",
            contentType: false,
            processData: false,
            data:formData,
        }).done(function (response) {
            console.log(response);
        }).fail(function (response) {
            console.log(response);
        });
    });
});
