<?php
require('DBconnect.php');
$deleted_stat=$_POST['delete_stat'];


$sql = "DELETE FROM `statistics` WHERE `P_id` =  '$deleted_stat'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

	header("Location: show_statistics.php");
	}


?>
