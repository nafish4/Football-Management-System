<?php
require('DBconnect.php');
$deleted_player=$_POST['delete_player'];


$sql = "DELETE FROM `player` WHERE `P_id` =  '$deleted_player'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

	header("Location: show_players.php");
	}


?>