$(document).ready(function () {
    $("button.btn_reg").click(function () {
        var fullname = $("#fullname").val();
        var number_phone = $("#number_phone").val();
        var address = $("#address").val();
        var check_address = $("input[name=check_address]:checked").val();
        var proof_document = $("input#proof_document").val();
        var exhibit = document.getElementsByName('exhibit');
        var list_exhibit = "";
        var proof_document = $("#proof_document").val();
        // Lặp qua từng exhibit để lấy giá trị
        for (var i = 0; i < exhibit.length; i++) {
            if (exhibit[i].checked === true) {
                list_exhibit += exhibit[i].value + ', ';
            }
        }
        list_exhibit += $("#exhibit_dif").val();
        if (check_address == 'yes') {
            proof_document = "Nhà đã trùng hộ khẩu => Không cần chứng minh";
        }
        // In ra kết quả
        // if (check_address == 'no') {
        //     var proof_document = $("#proof_docmument").val();
        //     alert("Họ và tên: " + fullname + "\nSố điện thoại: " + number_phone + "\nĐịa chỉ: " + address + "\nĐịa chỉ có trùng hộ khẩu không: " + check_address + "\nGiấy tờ chứng minh: " + proof_document + "\nGiấy tờ để lại: " + list_exhibit);
        // } else {
        //     alert("Họ và tên: " + fullname + "\nSố điện thoại: " + number_phone + "\nĐịa chỉ: " + address + "\nĐịa chỉ có trùng hộ khẩu không: " + check_address + "\nGiấy tờ để lại: " + list_exhibit);
        // }
        // alert("Họ và tên: " + fullname + "\nSố điện thoại: " + number_phone + "\nĐịa chỉ: " + address + "\nĐịa chỉ có trùng hộ khẩu không: " + check_address + "\nGiấy tờ chứng minh: " + proof_document + "\nGiấy tờ để lại: " + list_exhibit);
        // var data = {
        //     'fullname': fullname,
        // }
        $.ajax({
            type: "POST",
            url: "?mod=page&controller=index&action=reg",
            data: data,
            dataType: "json",
            success: function (result) {
                $.each(result, function (key, item) {
                    $("p#error_".key).text(item);
                });
            }
        });
        return false;
    });
});