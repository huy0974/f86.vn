<?php
function construct()
{
}
function indexAction()
{
}
function add_sliderAction()
{
    load('lib', 'upload');
    if (isset($_POST['send_file'])) {
        #Xử lý upload đúng file ảnh
        // show_array($_FILES);
        $error = array();
        $success = array();
        $type_allow = array('png', 'jpg', 'gif', 'jpeg');
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if (!in_array(strtolower($type), $type_allow)) {
            $error['type'] = "Chỉ được upload file có định dạng png, jpg, gif, jpeg";
        } else {
            $file_size = $_FILES['file']['size'];
            if ($file_size < 21000000) {
                $file_dir = "../public/uploads/slider_destop/";
                $file_name =  pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
                $upload_file = $file_dir . $file_name . '.' . $type;
                if (!file_exists($upload_file)) {
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                        $success['upload'] = "Upload file thành công";
                    }
                }
            } else {
                $error['size'] = "File phải có kích thước nhỏ hơn 20MB";
            }
        }
        if (empty($error)) {
            if (file_exists($upload_file)) {
                $upload_file = $file_dir . $file_name . ' - Copy' . '.' . $type;
            }
            $i = 2;
            while (file_exists($upload_file)) {
                $upload_file = $file_dir . $file_name . ' - Copy(' . $i . ')' . '.' . $type;
                $i++;
            }
            echo $upload_file;
            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                $success['upload'] = "Upload file thành công";
            }
        }
    }
    load_view('add_slider');
}
function list_sliderAction()
{
    load_view('list_slider');
}
