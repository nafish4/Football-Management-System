<?php
require('DBconnect.php');
$deleted_pp=$_POST['delete_pp'];


$sql = "DELETE FROM `player_prev_club` WHERE `P_id` =  '$deleted_pp'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

	header("Location: show_player_prev.php");
	}


?>