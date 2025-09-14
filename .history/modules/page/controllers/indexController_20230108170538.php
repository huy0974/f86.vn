<?php

function construct()
{
}
function indexAction()
{
}
function regAction()
{
    load('lib', 'validation');
    global $error, $fullname, $number_phone, $address, $check_address, $proof_document, $exhibit, $list_exhibit;
    if (isset($_POST['btn_reg'])) {
        $error = array();
        if (empty($_POST['fullname'])) {
            $error['fullname'] = '*Vui lòng nhập họ tên';
        } else {
            $fullname = $_POST['fullname'];
        }
        //Kiểm tra họ và tên
        if (empty($_POST['number_phone'])) {
            $error['number_phone'] = '*Vui lòng nhập số điện thoại';
        } else {
            if (is_num_phone($_POST['number_phone'])) {
                $number_phone = $_POST['number_phone'];
            } else {
                $error['number_phone'] = '*Số điện thoại không đúng định dạng.';
            }
        }
        //Kiểm tra số điện thoại
        if (empty($_POST['address'])) {
            $error['address'] = '*Vui lòng nhập địa chỉ';
        } else {
            $address = $_POST['address'];
        }
        //Kiểm tra địa chỉ 
        if (empty($_POST['check_address'])) {
            $error['check_address'] = '*Vui lòng chọn Có hoặc Không';
        } else {
            $check_address = $_POST['check_address'];
        }
        //Kiểm tra xem trùng địa chỉ không
        if (!empty($_POST['check_address']) && $_POST['check_address'] == 'no') {
            if (empty($_POST['proof_document'])) {
                $error['proof_document'] = '*Vui lòng nhập tên giấy tờ chứng minh';
            } else {
                $proof_document = $_POST['proof_document'];
            }
        }
        //Kiểm tra giấy tờ chứng minh nhà
        if (empty($_POST['list_exhibit'])) {
            $error['exhibit'] = '*Vui lòng chọn hoặc điền giấy tờ bạn để lại';
        } else {
            $error['exhibit'] = '';
            $list_exhibit = $_POST['list_exhibit'];
        }
    }
    load_view('reg');
}
function check_regAction()
{
    load('lib', 'validation');
    global $error, $fullname, $number_phone, $address, $check_address, $proof_document, $exhibit, $list_exhibit;
    $error = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = '*Vui lòng nhập họ tên';
    } else {
        $error['fullname'] = '';
        $fullname = $_POST['fullname'];
    }
    //Kiểm tra họ và tên
    if (empty($_POST['number_phone'])) {
        $error['number_phone'] = '*Vui lòng nhập số điện thoại';
    } else {
        if (is_num_phone($_POST['number_phone'])) {
            $error['number_phone'] = '';
            $number_phone = $_POST['number_phone'];
        } else {
            $error['number_phone'] = '*Số điện thoại không đúng định dạng.';
        }
    }
    //Kiểm tra số điện thoại
    if (empty($_POST['address'])) {
        $error['address'] = '*Vui lòng nhập địa chỉ';
    } else {
        $error['address'] = '';
        $address = $_POST['address'];
    }
    //Kiểm tra địa chỉ 
    if (empty($_POST['check_address'])) {
        $error['check_address'] = '*Vui lòng chọn Có hoặc Không';
    } else {
        $error['check_address'] = '';
        $check_address = $_POST['check_address'];
    }
    //Kiểm tra xem trùng địa chỉ không
    if (!empty($_POST['check_address']) && $_POST['check_address'] == 'no') {
        if (empty($_POST['proof_document'])) {
            $error['proof_document'] = '*Vui lòng nhập tên giấy tờ chứng minh';
        } else {
            $error['proof_document'] = '';
            $proof_document = $_POST['proof_document'];
        }
    }
    //Kiểm tra giấy tờ chứng minh nhà
    if (empty($_POST['list_exhibit'])) {
        $error['exhibit'] = '*Vui lòng chọn hoặc điền giấy tờ bạn để lại';
    } else {
        $error['exhibit'] = '';
        $list_exhibit = $_POST['list_exhibit'];
    }
    // echo json_encode($error);
    echo $fullname;
}
function send_info_customerAction()
{
    load('lib', 'email');
    load('lib', 'database_oop');
    global $address;
    $fullname = htmlspecialchars($_POST['fullname']);
    $number_phone = htmlspecialchars($_POST['number_phone']);
    $address = htmlspecialchars($_POST['address']);
    $proof_document = htmlspecialchars($_POST['proof_document']);
    $number_loan = htmlspecialchars($_POST['number_loan'] . " triệu");
    $list_exhibit = htmlspecialchars($_POST['list_exhibit']);


    $email = "daotu2110@gmail.com";
    $subject = "Khách vay tiền";
    $sent_to_fullname = '';
    $subject = "Khách vay tiền";
    $content = "
    <html>

<head>
    <style>
        body {
            width: 700px;
            height: auto;
            margin: auto;
        }

        h1 {
            /* background-color: blue; */
            background-color: #008541;
            color: white;
            padding-block: 16px;
            margin-top: 5px;
            margin-bottom: 5px;
            text-align: center;
        }

        #message {
            width: 600px;
            height: auto;
            margin-bottom: 5px;
            margin-left: auto;
            margin-right: auto;
        }

        #sign {
            background-color: blue;
            color: white;
            margin-top: 5px;
            margin-bottom: 5px;
            text-align: center;
        }

        .text-red {
            color: #e74c3c;
        }

        .text-green {
            color: #2ecc71;
        }

        .text-blue {
            color: #45aaf2;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <h1>Thông tin khách hàng</h1>
    <div id='message'>
        <h2>Ngày <span class='text-green'>12/12/2022</span></h2>
        <p>Họ và tên: <span class='text-blue'>{$fullname}</span></p>
        <p>Số điện thoại: <span class='text-blue'>{$number_phone}</span></p>
        <p>Địa chỉ: <span class='text-blue'>$address</span></p>
        <p>Giấy tờ chứng minh: <span class='text-blue'>$proof_document</span></p>
        <p>Số tiền cần vay: <span class='text-blue'>$number_loan</span></p>
        <p>Giấy tờ để lại: <span class='text-blue'>$list_exhibit</span></p>
    </div>
</body>

</html>
    ";
    if (send_mail($email, $sent_to_fullname, $subject, $content, $option = array())) {
        echo "Gửi mail thành công";
    } else {
        echo "Gửi mail thất bại";
    }
    //End gửi mail

}
