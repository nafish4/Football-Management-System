<?php
require('DBconnect.php');
$deleted_transfer=$_POST['delete_transfer'];


$sql = "DELETE FROM `transfer_market` WHERE `transfer_window` =  '$deleted_transfer'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

	header("Location: show_transfer.php");
	}


?>