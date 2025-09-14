<?php
/*
 * --------------------------------
 * EMAIL
 * --------------------------------
 * Trong phần này chúng ta khai báo các thông số để cấu hình
 * gửi mail bằng php
 * --------------------------------
 * GIẢI THÍCH BIẾN
 * --------------------------------
 * protocol: Giao thức gửi mail
 * smtp_host: Host gửi mail
 * smtp_port: Cổng
 * smtp_user: Tên đăng nhập tài khoản gửi mail
 * smtp_pass: Password tài khoản gửi mail
 * smtp_port: Cổng
 * mailtype: Định dạng nội dung mail
 * charset: Mã ký tự nội dung mail(UTF-8)
 */

// $email = Array(
//     'protocol' => 'smtp',
//     'smtp_host' => 'ssl://smtp.googlemail.com',
//     'smtp_port' => 465,
//     'smtp_user' => '',
//     'smtp_pass' => '',
//     'smtp_timeout' => '7',
//     'mailtype' => 'html',
//     'charset' => 'UTF-8'
// );
$config['email'] = array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_user' => 'anhtu23k1@gmail.com',
    'smtp_fullname' => 'F86 thông báo khách vay',
    'smtp_pass' => 'widxafxjvwuoiomw',
    'smtp_secure' => 'tls',
    'smtp_timeout' => '7',
    'mailtype' => 'html',
    'charset' => 'UTF-8'
);