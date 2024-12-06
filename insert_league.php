<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['lid']) && isset($_POST['ln']) && isset($_POST['w']) && isset($_POST['mp']) &&isset($_POST['d']) && isset($_POST['l']) && isset($_POST['gd'])  && isset($_POST['p'])){
	// write the query to check if this username and password exists in our database


	$a = $_POST['lid'];
	$b = $_POST['ln'];
	$d = $_POST['w'];
	$g = $_POST['mp'];
	$h = $_POST['d'];
	$i = $_POST['l'];
	$x = $_POST['gd'];
	$y = $_POST['p'];
	$sql = " INSERT INTO league VALUES( '$a', '$b', '$d', '$g', '$h', '$i', '$x', '$y' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
		
	
		//echo "Inseted Successfully";
		header("Location: show_league.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_league.php");
	}
	
}


?>