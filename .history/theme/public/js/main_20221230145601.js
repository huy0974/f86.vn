$(document).ready(function () {
    $(".btn-scrolltop").css({
        'display': 'none',
    });
    $(Window).scroll(function () {
        if ($(window).scrollTop() < 350) {
            $(".btn-scrolltop").css({
                'display': 'none',
                'transition': 'display 5s ease-in-out',
            })
        } else {
            $(".btn-scrolltop").css({
                'display': 'block',
                'transition': 'display 5s ease-in-out',
            })
        }
    });
    $(".btn-scrolltop").click(function () {

    });
});