<?php

function construct()
{
}
function indexAction()
{
    load('lib', 'database_oop');
    $db = new DB;
    $list_slider = $db->get("tbl_slider_desktop", $field = array(), $where = "");
    $img_option_home = $db->get("tbl_home_img", $field = array(), $where = "");
    $path_video = $db->get("tbl_video", $field = array(), $where = "");
    $data = array(
        'list_slider' => $list_slider,
        'img_option_home' => $img_option_home['path_client'],
        'path_video' => $path_video['path_client'],
    );
    load_view('index', $data);
}
