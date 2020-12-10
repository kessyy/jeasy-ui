<?php

$id = intval($_REQUEST['id']);
$date = htmlspecialchars($_REQUEST['date']);
$rct = htmlspecialchars($_REQUEST['rct']);
$description = htmlspecialchars($_REQUEST['description']);
$quantity = htmlspecialchars($_REQUEST['quantity']);
$unit_price = htmlspecialchars($_REQUEST['unit_price']);
$t_amount = htmlspecialchars($_REQUEST['t_amount']);
$vat = htmlspecialchars($_REQUEST['vat']);


include 'conn.php';

$sql = "update orders set date='$date',rct='$rct',description='$description',quantity='$quantity',unit_price='$unit_price',t_amount='$t_amount',vat='$vat' where id=$id";
$result = mysqli_query($conn, $sql);
if ($result){
	echo json_encode(array(
		'id' => $id,
		'date' => $date,
		'rct' => $rct,
		'quantity' => $quantity,
		'unit_price' => $unit_price,
		't_amount' => $t_amount,
		'vat' => $vat
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>