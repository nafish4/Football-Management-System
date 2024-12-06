<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['cid']) && isset($_POST['cn']) && isset($_POST['s']) && isset($_POST['ts']) &&isset($_POST['ss']) && isset($_POST['t']) && isset($_POST['l'])  && isset($_POST['m'])){
	// write the query to check if this username and password exists in our database


	$a = $_POST['cid'];
	$b = $_POST['cn'];
	$d = $_POST['s'];
	$g = $_POST['ts'];
	$h = $_POST['ss'];
	$i = $_POST['t'];
	$x = $_POST['l'];
	$y = $_POST['m'];
	$sql = " INSERT INTO club VALUES( '$a', '$b', '$d', '$g', '$h', '$i', '$x', '$y' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
		
	
		//echo "Inseted Successfully";
		header("Location: show_clubs.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_club.php");
	}
	
}


?>