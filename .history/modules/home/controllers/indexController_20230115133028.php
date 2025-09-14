<?php

function construct()
{
}
function indexAction()
{
    load('lib', 'database_oop');
    $db = new DB;
    $list_slider_desktop = $db->get("tbl_slider_desktop", $field = array(), $where = "");
    $list_slider_mobile = $db->get("tbl_slider_mobile", $field = array(), $where = "");
    $img_option_home = $db->get("tbl_home_img", $field = array(), $where = "");
    $path_video = $db->get("tbl_video", $field = array(), $where = "");
    $data = array(
        'list_slider_desktop' => $list_slider_desktop,
        'img_option_home' => $img_option_home['path_client'],
        'path_video' => $path_video['path_client'],
    );
    load_view('index', $data);
}
