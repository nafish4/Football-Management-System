<?php
require('DBconnect.php');
$deleted_fixture=$_POST['delete_fixture'];


$sql = "DELETE FROM `fixture` WHERE `fixture_id` =  '$deleted_fixture'";
$run = mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn)){

	header("Location: show_fixture.php");
	}


?>