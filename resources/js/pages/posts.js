let page = 1;
let inRequest = false;

$(document).ready(function () {
    $(window).scroll(function () {
        const size = $(window).scrollTop() + $(window).height() + 200;
        if (size >= $(document).height() && !inRequest) {
            inRequest = true;
            page++;
            loadMoreData(page);
        }
    });
});

function loadMoreData(page) {
    $.ajax({
        url: '?page=' + page,
        type: "get"
    }).done(function (data) {
        $("#posts-data").append(data.html);
        inRequest = false;
    }).fail(function (e) {
        console.log("Failed in server response...", e)
        inRequest = false;
    });
}
