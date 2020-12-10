<?php

$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'asc';
$offset = ($page-1)*$rows;
$result = array();

include 'conn.php'

$fromDate= isset($_POST['from_date']) ? mysqli_real_escape_string($_POST['from_date']) : '';
$toDate= isset($_POST['to_date']) ? mysqli_real_escape_string($_POST['to_date']) : '';

$where = '';

if ($from_date != null && $to_date != null) {
    $where = "where date BETWEEN '$from_date%' AND '$to_date%'";
} else if ($from_date != null) {
    $where = "where date >= '$from_date%'";
} else if ($to_date != null) {
    $where = "where date <= '$to_date%'"; 
}


$rs = mysqli_query("select count(*) from table " . $where);