<?php

function construct()
{
}
function indexAction()
{
    load('lib', 'database_oop');
    $db = new DB;
    $list_slider = $db->get("tbl_slider_desktop", $field = array(), $where = "");
    $data = array(
        'list_slider' => $list_slider,
    );
    load_view('index', $data);
}
