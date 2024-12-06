<?php
require('DBconnect.php');
$deleted_club=$_POST['delete_club'];


$sql = "DELETE FROM `club` WHERE `club_id` =  '$deleted_club'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

	header("Location: show_clubs.php");
	}


?>
