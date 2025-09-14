$(document).ready(function () {
    $(".carousel-item:first").addClass('active');
    var height_header = $("#header").height();
    $("#wp-header").height(height_header);
    $(window).resize(function () {
        var height_header = $("#header").height();
        $("#wp-header").height(height_header);
    });
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
        $(window).scrollTop(0);
    });
    $(".proof").css({
        'display': 'none',
    });
    $("input#yes").click(function () {
        $(".proof").css({
            'display': 'none',
        })
    });
    $("input#no").click(function () {
        $(".proof").css({
            'display': 'block',
        })
    });
});