$(document).ready(function () {
    $(Window).scroll(function () {
        if ($(window).scrollTop() < 500) {
            $(".btn-scrolltop").css({
                'display': 'none',
            })
        }
    });
});