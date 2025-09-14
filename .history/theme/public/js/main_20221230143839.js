$(document).ready(function () {
    $(".btn-scrolltop").css({
        'display': 'none',
    })
    $(Window).scroll(function () {
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
});