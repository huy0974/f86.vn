<?php
function construct()
{
}
function indexAction()
{
    $where_date = date('d-m-Y');
    $list_customer_today = db_fetch_array("SELECT * FROM `time_reg` LIKE '%$where_date%'");
    load_view('index');
}
