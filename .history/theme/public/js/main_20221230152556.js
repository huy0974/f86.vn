$(document).ready(function () {
    $(".btn-scrolltop").css({
        'display': 'none',
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() < 350) {
            $(".btn-scrolltop").css({
                'display': 'none',
            })
        } else {
            $(".btn-scrolltop").css({
                'display': 'block',
            })
        }
    });
    $(".btn-scrolltop").click(function () {
        // $(window).scroll(function () {
        $(window).scrollTop(500);
    });
});