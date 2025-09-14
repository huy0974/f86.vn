<?php
//is_username
//is_password
//is_email
//form_error
//set_value
function is_username($username)
{
    $pattern = "/^[A-Za-z0-9_\.\s]{6,32}$/";
    if (preg_match($pattern, $username, $matchs)) {
        return true;
    }
    return false;
}
function is_password($password)
{
    $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (preg_match($pattern, $password, $matchs)) {
        return true;
    }
    return false;
}
function is_email($email)
{
    $pattern = "/^([\w_\.]){8,24}@([a-z_\.]{6,32})$/";
    if (preg_match($pattern, $email, $matchs)) {
        return true;
    }
    return false;
}
function form_error($name)
{
    global $error;
    if (!empty($error[$name])) {
        return "<p class='error'><i class='fa-solid fa-triangle-exclamation'></i> " . $error[$name] . "</p>";
    }
}
function form_success($name)
{
    global $alert;
    if (!empty($alert[$name])) {
        return "<p class='error' style='color: #2ecc71;'><i class='fa-solid fa-triangle-exclamation'></i> " . $alert[$name] . "</p>";
    }
}
function set_value($name)
{
    global $$name;
    if (!empty($$name)) {
        return $$name;
    }
}
function check_login($username, $password)
{
    global $username, $password;
    // foreach ($list_users as $user) {
    //     if ($user['username'] == $username && $user['password'] == md5($password)) {
    //         return true;
    //     }
    // }
    // return false;
    $num =  db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '$username' AND `password` = '$password'");
    if ($num > 0) {
        return true;
    } else {
        return false;
    }
}
