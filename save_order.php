<?php

$date = htmlspecialchars($_REQUEST['date']);
$rct = htmlspecialchars($_REQUEST['rct']);
$description = htmlspecialchars($_REQUEST['description']);
$quantity = htmlspecialchars($_REQUEST['quantity']);
$unit_price = htmlspecialchars($_REQUEST['unit_price']);
$t_amount = htmlspecialchars($_REQUEST['t_amount']);
$vat = htmlspecialchars($_REQUEST['vat']);



include 'conn.php';

// if (filter_var($id, FILTER_VALIDATE_ID)){
	$sql = "insert into orders(date,rct,description,quantity,unit_price,t_amount,vat) values('$date','$rct','$description','$quantity''$unit_price','$t_amount','$vat')";
	$result = mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array(
			'id' => mysqli_insert_id($link()),
			'date' => $date,
			'rct' => $rct,
			'description' => $description,
			'quantity' => $quantity,
			'unit_price' => $unit_price,
			't_amount' => $t_amount,
			'vat' => $vat
		));
	} else {
		echo json_encode(array('errorMsg'=>'Some errors occured.'));
	}
} else {
	echo json_encode(array('errorMsg'=>'Invalid data.'));
// }
?>