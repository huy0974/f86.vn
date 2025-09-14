<?php
function file_error()
{
    global $error;
    if (!empty($error)) {
        foreach ($error as $key => $value) {
            return "<p class='error'>" . $value . "</p>";
        }
    }
}
function file_success()
{
    global $success;
    if (!empty($success)) {
        foreach ($success as $key => $value) {
            return "<p class='success'>" . $value . "</p>";
        }
    }
}
function file_error_mobile()
{
    global $error_mobile;
    if (!empty($error_mobile)) {
        foreach ($error_mobile as $key => $value) {
            return "<p class='error'>" . $value . "</p>";
        }
    }
}
function file_success_mobile()
{
    global $success_mobile;
    if (!empty($success_mobile)) {
        foreach ($success_mobile as $key => $value) {
            return "<p class='success'>" . $value . "</p>";
        }
    }
}
// function show_array($data)
// {
//     if (is_array($data)) {
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//     } else {
//         echo "Không phải là mảng hoặc không tồn tại mảng trên hệ thống";
//     }
// }
