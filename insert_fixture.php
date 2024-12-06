<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fid']) && isset($_POST['hc']) && isset($_POST['ac']) && isset($_POST['hs']) &&isset($_POST['as']) && isset($_POST['d']) && isset($_POST['t'])){
	// write the query to check if this username and password exists in our database


	$a = $_POST['fid'];
	$b = $_POST['hc'];
	$d = $_POST['ac'];
	$g = $_POST['hs'];
	$h = $_POST['as'];
	$i = $_POST['d'];
	$x = $_POST['t'];
	$sql = " INSERT INTO fixture VALUES( '$a', '$b', '$d', '$g', '$h', '$i', '$x') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
		
	
		//echo "Inseted Successfully";
		header("Location: show_fixture.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_fixture.php");
	}
	
}


?>