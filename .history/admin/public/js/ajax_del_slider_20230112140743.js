$(document).ready(function () {
    $("button#del_slider_desk").click(function () {
        var id = $(this).attr('data-id');
        var data = {
            id: id,
        };
        $.ajax({
            type: 'POST', //POST hoặc GET, mặc định là GET
            url: '?mod=slider&action=del_slider_desk', // Trang xử lý mặc định trang hiện tại
            data: data, // Dữ liệu truyền lên server
            dataType: 'text', // html, text, script hoặc json
            success: function (data) {
                // alert(data);
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
})