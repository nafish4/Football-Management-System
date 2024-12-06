<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['mid']) && isset($_POST['mname'])  && isset($_POST['s'])   && isset($_POST['t']) && isset($_POST['pc'])){
	// write the query to check if this username and password exists in our database


	$a = $_POST['mid'];
	$b = $_POST['mname'];
	$d = $_POST['s'];
	$g = $_POST['t'];
	$h = $_POST['pc'];
	
	$sql = " INSERT INTO Manager VALUES( '$a', '$b', '$d', '$g', '$h' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
		
	
		//echo "Inseted Successfully";
		header("Location: show_managers.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_manager.php");
	}
	
}


?>