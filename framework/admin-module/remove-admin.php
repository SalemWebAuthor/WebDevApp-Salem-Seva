<?php
include "../config/config.php";

$conn = mysqli_connect('localhost', 'root', '', 'test');
$id = $_GET['adm_username'];
$sql = "DELETE FROM admin WHERE adm_username = $id";
$result = mysqli_query($conn, $sql);

if($result){
	echo "Deleted a record successfully";
}
else {
	echo "Failed";
}
?>