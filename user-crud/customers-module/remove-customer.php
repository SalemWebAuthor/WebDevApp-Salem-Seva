<?php
include "../config/config.php";

$conn = mysqli_connect('localhost', 'root', '', 'test');
$id = $_GET['cust_id'];
$sql = "DELETE FROM reserve WHERE cust_id = $id";
$result = mysqli_query($conn, $sql);

if($result){
	echo "Deleted a record successfully";
}
else {
	echo "Failed";
}
?>