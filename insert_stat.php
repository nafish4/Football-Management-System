<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['season']) && isset($_POST['Pid']) && isset($_POST['g']) && isset($_POST['a']) &&isset($_POST['cs']) && isset($_POST['rc']) && isset($_POST['yc'])){
	// write the query to check if this username and password exists in our database


	$a = $_POST['season'];
	$b = $_POST['Pid'];
	$d = $_POST['g'];
	$g = $_POST['a'];
	$h = $_POST['cs'];
	$i = $_POST['rc'];
	$x = $_POST['yc'];

	$sql = " INSERT INTO statistics VALUES( '$a', '$b', '$d', '$g', '$h', '$i', '$x') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
		
	
		//echo "Inseted Successfully";
		header("Location: show_statistics.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_statistics.php");
	}
	
}


?>