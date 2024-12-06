<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['pid']) && isset($_POST['n']) && isset($_POST['s']) && isset($_POST['p']) &&isset($_POST['t']) && isset($_POST['pc']) && isset($_POST['i'])  && isset($_POST['it']) && isset($_POST['cid'])){
	// write the query to check if this username and password exists in our database


	$a = $_POST['pid'];
	$b = $_POST['n'];
	$d = $_POST['s'];
	$g = $_POST['p'];
	$h = $_POST['t'];
	$i = $_POST['pc'];
	$x = $_POST['i'];
	$y = $_POST['it'];
	$z = $_POST['cid'];
	$sql = " INSERT INTO player VALUES( '$a', '$b', '$d', '$g', '$h', '$i', '$x', '$y', '$z' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
		
	
		//echo "Inseted Successfully";
		header("Location: show_players.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_player.php");
	}
	
}


?>