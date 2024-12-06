<?php
require('DBconnect.php');
$deleted_league=$_POST['delete_league'];


$sql = "DELETE FROM `league` WHERE `league_id` =  '$deleted_league'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

	header("Location: show_league.php");
	}


?>
