$(document).ready(function () {
    $("button.btn_reg").click(function () {
        var exhibit = document.getElementsByName('exhibit');
        var result = "";

        // Lặp qua từng exhibit để lấy giá trị
        for (var i = 0; i < exhibit.length; i++) {
            if (exhibit[i].checked === true) {
                result += ' [' + exhibit[i].value + ']';
            }
        }
        result += $("#exhibit_dif").val();
        // In ra kết quả
        alert("Sở thích là: " + result);
        return false;
    });
});