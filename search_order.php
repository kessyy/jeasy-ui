<?php

$id = intval($_REQUEST['description']);

include 'conn.php';

$sql = "select * from orders where description=$description";
$result = mysqli_query($conn, $sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>