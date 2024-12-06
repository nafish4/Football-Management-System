<!DOCTYPE html>
<html>
<head>
	<title> Update Data</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<style>
	body{
		background-color: #A9C9FF;
		



		}
</style>
<body>
	<h1> Update on "<?php echo $_POST['update_tw'];?>"</h1>
	<?php
	require("DBconnect.php");
	$update_tw=$_POST['update_tw'];
	$update_pid=$_POST['update_pid'];

	$update_cid=$_POST['update_cid'];
	$update_cb=$_POST['update_cb'];
	$update_lc=$_POST['update_lc'];
	$update_duration=$_POST['update_duration'];
	$update_bo=$_POST['update_bo'];
	$update_rc=$_POST['update_rc'];
	$update_ci=$_POST['update_ci'];
	$sql="SELECT * FROM `transfer_market` WHERE `transfer_window` LIKE 'update_tw'";
	$result=mysqli_query($conn,$sql);
	?>
	<form action="transfer_update_work2.php" method="post">
		Transfer Window:<input type="text" name="update_tw" value=<?php echo $update_tw;?>><br>
		Player iD:<input type="text" name="update_pid" value=<?php echo $update_pid;?>><br>
		
		Club iD:<input type="text" name="update_cid" value=<?php echo $update_cid;?>><br>
		Club Bought:<input type="text" name="update_cb" value=<?php echo $update_cb;?>><br>
		Loan Club:<input type="text" name="update_lc" value=<?php echo $update_lc;?>><br>
		Duration:<input type="text" name="update_duration" value=<?php echo $update_duration;?>><br>
		Buy For:<input type="text" name="update_bo" value=<?php echo $update_bo;?>><br>
		Release clause:<input type="text" name="update_rc" value=<?php echo $update_rc;?>><br>
		Club interest:<input type="text" name="update_ci" value=<?php echo $update_ci;?>><br>
		<input type="hidden" name="update_tw" value=<?php echo $update_tw;?>>
		<input type="submit" value="SUBMIT">
	</form>

</body>
</html>