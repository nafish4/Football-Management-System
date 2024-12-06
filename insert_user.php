<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['u']) && isset($_POST['p'])){
	// write the query to check if this username and password exists in our database


	$a = $_POST['u'];
	$b = $_POST['p'];

	$sql = " INSERT INTO users VALUES( '$a', '$b' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
		
	
		//echo "Inseted Successfully";
		header("Location: index.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_user.php");
	}
	
}


?>