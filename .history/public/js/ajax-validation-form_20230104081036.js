$(document).ready(function () {
    // $("button.btn_reg").click(function () {
    //     var fullname = $("#fullname").val();
    //     var number_phone = $("#number_phone").val();
    //     var address = $("#address").val();
    //     var check_address = $("input[name=check_address]:checked").val();
    //     var proof_document = $("input#proof_document").val();
    //     var exhibit = document.getElementsByName('exhibit');
    //     var list_exhibit = "";
    //     var proof_document = $("#proof_document").val();
    //     // Lặp qua từng exhibit để lấy giá trị
    //     for (var i = 0; i < exhibit.length; i++) {
    //         if (exhibit[i].checked === true) {
    //             list_exhibit += exhibit[i].value + ', ';
    //         }
    //     }
    //     list_exhibit += $("#exhibit_dif").val();
    //     if (check_address == 'yes') {
    //         proof_document = "Nhà đã trùng hộ khẩu => Không cần chứng minh";
    //     }
    //     var data = {
    //         'fullname': fullname,
    //         'number_phone': number_phone,
    //         'address': address,
    //         'check_address': check_address,
    //         'proof_document': proof_document,
    //         'list_exhibit': list_exhibit,
    //     }
    //     $.ajax({
    //         type: "post",
    //         url: "?mod=page&controller=index&action=check_reg",
    //         data: data,
    //         dataType: "json",
    //         success: function (result) {
    //             console.log(result);
    //             $.each(result, function (key, value) {
    //                 $("span#error_" + key).text(value);
    //             });
    //             if (result.address == "" && result.check_address == "" && result.exhibit == "" && result.fullname && result.number_phone == "" && result.proof_document == "") {
    //                 alert('Thành công');
    //             }
    //             return false;
    //         }
    //     });
    //     return false;
    // });

    $('#fullname').on('input', function () {
        check_fullname();
    });
    $('#number_phone').on('input', function () {
        check_number_phone();
    });
    $('#address').on('input', function () {
        check_address();
    });;
    $('#yes').on('input', function () {
        check_check_address();
    });
    $('#no').on('input', function () {
        check_check_address();
    });
    $('#proof_document').on('input', function () {
        check_proof_document();
    });
    $('#cccd').on('input', function () {
        check_list_exhibit();
    });
    $('#shk').on('input', function () {
        check_list_exhibit();
    });
    $('#ghk_con').on('input', function () {
        check_list_exhibit();
    });
    $('#blx_moto').on('input', function () {
        check_list_exhibit();
    });
    $('#blx_car').on('input', function () {
        check_list_exhibit();
    });
    $('#reg_moto').on('input', function () {
        check_list_exhibit();
    });
    $('#reg_car').on('input', function () {
        check_list_exhibit();
    });
    $('#exhibit_dif').on('input', function () {
        check_list_exhibit();
    });

    // $('#submitbtn').click(function () {


    //     if (!checkfullname() && !checkemail() && !checkmobile() && !checkpass() && !checkcpass()) {
    //         console.log("er1");
    //         $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
    //     } else if (!checkfullname() || !checkemail() || !checkmobile() || !checkpass() || !checkcpass()) {
    //         $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
    //         console.log("er");
    //     }
    //     else {
    //         console.log("ok");
    //         $("#message").html("");
    //         var form = $('#myform')[0];
    //         var data = new FormData(form);
    //         $.ajax({
    //             type: "POST",
    //             url: "process.php",
    //             data: data,
    //             processData: false,
    //             contentType: false,
    //             cache: false,
    //             async: false,
    //             beforeSend: function () {
    //                 $('#submitbtn').html('<i class="fa-solid fa-spinner fa-spin"></i>');
    //                 $('#submitbtn').attr("disabled", true);
    //                 $('#submitbtn').css({ "border-radius": "50%" });
    //             },

    //             success: function (data) {
    //                 $('#message').html(data);
    //             },
    //             complete: function () {
    //                 setTimeout(function () {
    //                     $('#myform').trigger("reset");
    //                     $('#submitbtn').html('Submit');
    //                     $('#submitbtn').attr("disabled", false);
    //                     $('#submitbtn').css({ "border-radius": "4px" });
    //                 }, 50000);
    //             }
    //         });
    //     }
    // });
    $("button.btn_reg").click(function () {
        check_fullname();
        check_number_phone();
        check_address();
        check_check_address();
        check_proof_document();
        check_list_exhibit();
        if (check_fullname() && check_number_phone() && check_address() && check_check_address() && check_proof_document() && check_list_exhibit()) {
            alert("Success");
            var fullname = $('#fullname').val();
            var number_phone = $("#number_phone").val();
            var address = $("#address").val();
            var check_address = $("input[name=check_address]:checked").val();
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
            alert(check_address);
            return false;
        } else {
            alert('Vui lòng nhập đầy đủ thông tin');
        }
        return false;
    })
});
function check_fullname() {
    // var pattern = /^[A-Za-z0-9]+$/;
    // var fullname = $('#fullname').val();
    // var validfullname = pattern.test(fullname);
    // if ($('#fullname').val().length == 0) {
    //     $('#error_fullname').html('*Vui lòng nhập họ và tên');
    //     return false;
    // } else if (!validfullname) {
    //     $('#error_fullname').html('fullname should be a-z ,A-Z only');
    //     return false;
    // } else {
    //     $('#error_fullname').html('');
    //     return true;
    // }
    var fullname = $('#fullname').val();
    if (fullname == "") {
        $('#error_fullname').html('*Vui lòng nhập họ và tên');
        return false;
    } else {
        $('#error_fullname').html('');
        return true;
    }
}
function check_number_phone() {
    // if (!$.isNumeric($("#number_phone").val())) {
    //     $("#error_number_phone").html("*Chỉ cho phép nhập số");
    //     return false;
    // } else if ($("#number_phone").val().length != 10) {
    //     $("#error_number_phone").html("*Số điện thoại nhập 10 số");
    //     return false;
    // }
    // else {
    //     $("#error_number_phone").html("");
    //     return true;
    // }
    var pattern = /^[0-9]+$/;
    var number_phone = $("#number_phone").val();
    var validnumber_phone = pattern.test(number_phone);
    if (number_phone.length == 0) {
        $("#error_number_phone").html("*Vui lòng nhập số điện thoại");
        return false;
    } else if (!validnumber_phone) {
        $("#error_number_phone").html("*Số điện thoại không đúng định dạng");
        return false;
    } else {
        $('#error_number_phone').html('');
        return true;
    }
}
function check_address() {
    var address = $('#address').val();
    if (address == "") {
        $('#error_address').html('*Vui lòng nhập địa chỉ bạn đang ở');
        return false;
    } else {
        $('#error_address').html('');
        return true;
    }
}
function check_check_address() {
    var check_address = $("input[name=check_address]:checked").val();
    if (check_address == 'yes' || check_address == 'no') {
        $("#error_check_address").html("");
        return true;
    } else {
        $("#error_check_address").html("*vui lòng chọn Có hoặc Không");
        return false;
    }
}
function check_proof_document() {
    var check_address = $("input[name=check_address]:checked").val();
    var proof_document = $("input#proof_document").val();
    if (check_address == 'no') {
        if (proof_document == "") {
            $("#error_proof_document").html("*Vui lòng nhập giấy tờ chứng minh nhà của bạn");
            return false;
        } else {
            $("#error_proof_document").html('');
            return true;
        }
    }
    if (check_address == 'yes') {
        return true;
    }
}
function check_list_exhibit() {
    var exhibit = document.getElementsByName('exhibit');
    var list_exhibit = "";
    for (var i = 0; i < exhibit.length; i++) {
        if (exhibit[i].checked === true) {
            list_exhibit += exhibit[i].value + ', ';
        }
    }
    list_exhibit += $("#exhibit_dif").val();
    if (list_exhibit == "") {
        $("#error_exhibit").html("*Vui lòng chọn hoặc nhập giấy tờ có thể để lại");
        return false;
    } else {
        $("#error_exhibit").html('');
        return true;
    }
}
function checkemail() {
    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#email').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        $('#email_err').html('required field');
        return false;
    } else if (!validemail) {
        $('#email_err').html('invalid email');
        return false;
    } else {
        $('#email_err').html('');
        return true;
    }
}
function checkpass() {
    console.log("sass");
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var pass = $('#password').val();
    var validpass = pattern2.test(pass);

    if (pass == "") {
        $('#password_err').html('password can not be empty');
        return false;
    } else if (!validpass) {
        $('#password_err').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
        return false;

    } else {
        $('#password_err').html("");
        return true;
    }
}
function checkcpass() {
    var pass = $('#password').val();
    var cpass = $('#cpassword').val();
    if (cpass == "") {
        $('#cpassword_err').html('confirm password cannot be empty');
        return false;
    } else if (pass !== cpass) {
        $('#cpassword_err').html('confirm password did not match');
        return false;
    } else {
        $('#cpassword_err').html('');
        return true;
    }
}


function password_show_hide() {
    console.log('ok');
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}