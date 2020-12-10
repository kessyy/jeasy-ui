<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'hotel';

$conn = mysqli_connect($servername,$username,$password, $db);
if (!$conn) {
	die('Could not connect: ' . mysqli_connect_error());
}
echo 'connected successfully';

?>
