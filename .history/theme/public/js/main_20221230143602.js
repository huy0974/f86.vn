$(document).ready(function () {
    $(Window).scroll(function () {
        if ($(window).scrollTop()) {
            $(".btn-scrolltop").css({
                'display': 'none',
            })
        }
    });
});