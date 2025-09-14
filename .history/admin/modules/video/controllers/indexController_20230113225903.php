<?php
function construct()
{
}
function indexAction()
{
    load_view('index');
}
function add_videoAction()
{
    load('lib', 'upload');
    load('lib', 'database_oop');
    global $error, $success;
    if (isset($_POST['change_video'])) {
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
                $file_dir = "../public/uploads/home_img/";
                $file_name =  pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
                $upload_file = $file_dir . $file_name . '.' . $type;
            } else {
                $error['size'] = "File phải có kích thước nhỏ hơn 20MB";
            }
        }
        if (empty($error)) {
            $path_client = './public/uploads/home_img/' . $file_name . '.' . $type;
            if (file_exists($upload_file)) {
                $upload_file = $file_dir . $file_name . ' - Copy' . '.' . $type;
                $path_client = './public/uploads/home_img/' . $file_name . ' - Copy' . '.' . $type;
            }
            $i = 2;
            while (file_exists($upload_file)) {
                $upload_file = $file_dir . $file_name . ' - Copy(' . $i . ')' . '.' . $type;
                $path_client = './public/uploads/home_img/' . $file_name . ' - Copy(' . $i . ')' . '.' . $type;
                $i++;
            }
            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                $data = array(
                    'path_client' => $path_client,
                    'path_admin' => $upload_file,
                    'creator' => $_SESSION['user_login'],
                    'created_date' => date("d-m-Y H:i:s"),
                );
                $table = "tbl_video";
                $where = "`id` = 0";
                $db = new DB;
                $path_admin_old = db_fetch_row("SELECT `path_admin` FROM `tbl_video` WHERE `id` = 0");
                if ($db->update($table, $data, $where) && unlink($path_admin_old['path_admin'])) {
                    $success['upload'] = "Upload file thành công";
                }
            }
        }
    }
    load_view('add_video');
}
