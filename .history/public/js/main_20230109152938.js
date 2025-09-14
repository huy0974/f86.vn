$(document).ready(function () {
    var height_header_desktop = $("#header").hasClass('header-desktop').height();
    $("#wp-header").hasClass('d-lg-block').height(height_header_desktop);
    $(window).resize(function () {
        var height_header_desktop = $("#header").hasClass('header-desktop').height();
        $("#wp-header").height(height_header_desktop);
    });
    var height_header_mobile = $("#header").hasClass('header-mobile').height();
    $("#wp-header").hasClass('d-block').height(height_header_mobile);
    $(window).resize(function () {
        var height_header_mobile = $("#header").hasClass('header-mobile').height();
        $("#wp-header").height(height_header_mobile);
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