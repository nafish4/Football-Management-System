<?php
require('DBconnect.php');
$deleted_manager=$_POST['delete_manager'];


$sql = "DELETE FROM `Manager` WHERE `m_id` =  '$deleted_manager'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

	header("Location: show_managers.php");
	}


?>