<?php

function construct()
{
}
function indexAction()
{
    load('lib', 'database_oop');
    $list_slider = db_fetch_array("SELECT * FROM `tbl_slider_desktop`");
    load_view('index');
}
