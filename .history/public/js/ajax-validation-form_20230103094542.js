$(document).ready(function () {
    $("button.btn_reg").click(function () {
        var fullname = $("#fullname").val();
        var number_phone = $("#number_phone").val();
        var address = $("#address").val();
        var check_address = $("input[name=check_address]:checked").val();
        var exhibit = document.getElementsByName('exhibit');
        var list_exhibit = "";

        // Lặp qua từng exhibit để lấy giá trị
        for (var i = 0; i < exhibit.length; i++) {
            if (exhibit[i].checked === true) {
                list_exhibit += exhibit[i].value + ', ';
            }
        }
        list_exhibit += $("#exhibit_dif").val();
        // In ra kết quả
        if (check_address == 'no') {
            var proof_document = $("#proof_document").val();
            alert("Họ và tên: " + fullname + "\nSố điện thoại: " + number_phone + "\nĐịa chỉ: " + address + "\nĐịa chỉ có trùng hộ khẩu không: " + check_address + "\nGiấy tờ: " + list_exhibit);
        } else {
            alert("Họ và tên: " + fullname + "\nSố điện thoại: " + number_phone + "\nĐịa chỉ: " + address + "\nĐịa chỉ có trùng hộ khẩu không: " + check_address + "\nGiấy tờ: " + list_exhibit);
        }
        return false;
    });
});