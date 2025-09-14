$(document).ready(function () {
    $("button.btn_reg").click(function () {
        var fullname = $("#fullname").val();
        var number_phone = $("#number_phone").val();
        var address = $("#address").val();
        var check_address = document.getElementsByName('check_address')[0];
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
        alert("Họ và tên: " + fullname + "\nSố điện thoại: " + number_phone + "\nĐịa chỉ: " + address + "\nĐịa chỉ có trùng hộ khẩu không: " + check_address + "\nGiấy tờ: " + list_exhibit);
        return false;
    });
});