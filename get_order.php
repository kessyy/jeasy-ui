<?php
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$description = isset($_POST['description']) ? mysqli_real_escape_string($_POST['description']) : '';
	$offset = ($page-1)*$rows;
	$result = array();
	
	include 'conn.php'
	$where = "description like '$description%'";
	$rs = mysqli_query("select count(*) from orders where " . $where);
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];
	
	$rs = mysqli_query("select * from orders where " . $where . " limit $offset,$rows");
	
	$description = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($descriptions, $row);
	}
	$result["rows"] = $descriptions;
	
	echo json_encode($result);
?>
