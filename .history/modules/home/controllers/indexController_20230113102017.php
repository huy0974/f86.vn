<?php

function construct()
{
}
function indexAction()
{
    load('lib', 'database_oop');
    $list_slider = get("tbl_slider_desktop", $field = array(), $where = "");
    load_view('index');
}
