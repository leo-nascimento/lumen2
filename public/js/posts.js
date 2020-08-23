$(document).ready(function () {
    let page = 1;
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
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
    }).fail(function (e) {
        console.log("Failed in server response...", e)
    });
}
