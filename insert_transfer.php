<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['tw']) && isset($_POST['pid']) && isset($_POST['cid']) && isset($_POST['cb']) &&isset($_POST['lc']) && isset($_POST['duration']) && isset($_POST['bo'])  && isset($_POST['rc']) && isset($_POST['ci'])){
	// write the query to check if this username and password exists in our database


	$a = $_POST['tw'];
	$b = $_POST['pid'];
	$d = $_POST['cid'];
	$g = $_POST['cb'];
	$h = $_POST['lc'];
	$i = $_POST['duration'];
	$x = $_POST['bo'];
	$y = $_POST['rc'];
	$z = $_POST['ci'];
	$sql = " INSERT INTO transfer_market VALUES( '$a', '$b', '$d', '$g', '$h', '$i', '$x', '$y', '$z' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
		
	
		//echo "Inseted Successfully";
		header("Location: show_transfer.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_transfer.php");
	}
	
}


?>