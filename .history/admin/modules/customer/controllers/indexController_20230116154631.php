<?php
function construct()
{
}
function indexAction()
{
    $where_date = date();
    load_view('index');
}
