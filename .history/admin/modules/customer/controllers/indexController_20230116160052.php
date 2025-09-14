<?php
function construct()
{
}
function indexAction()
{
    $where_date = date('d-m-Y');
    load_view('index');
}
