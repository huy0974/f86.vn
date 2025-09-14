$(document).ready(function () {
    $("button.btn_reg").click(function () {
        var fullname = $("#fullname").val();
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
        alert("Giấy tờ là: " + list_exhibit);
        return false;
    });
});