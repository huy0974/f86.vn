$(document).ready(function () {
    $("button#del_slider_desk").click(function () {
        alert($(this).attr('data-id'));
        var id = $(this).attr('data-id');
    });
})