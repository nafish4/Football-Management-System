<?php

require_once('DBconnect.php');


if(isset($_POST['fname']) && isset($_POST['pass'])){

	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$sql = "SELECT * FROM admin WHERE username = '$u' AND password = '$p'";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) !=0 ){
	
		//echo "LET HIM ENTER";
		header("Location: home.php");
	}
	else{
		//echo "Username or Password is wrong";
		header("Location: admin.php");
	}
	
}


?>