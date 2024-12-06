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
	<h1> Update on "<?php echo $_POST['update_lid'];?>"</h1>
	<?php
	require("DBconnect.php");
	$update_lid=$_POST['update_lid'];
	$update_lname=$_POST['update_lname'];

	$update_w=$_POST['update_w'];
	$update_mp=$_POST['update_mp'];
	$update_d=$_POST['update_d'];
	$update_l=$_POST['update_l'];
	$update_gd=$_POST['update_gd'];
	$update_pts=$_POST['update_pts'];
	$sql="SELECT * FROM `league` WHERE `league_id` LIKE 'update_lid'";
	$result=mysqli_query($conn,$sql);
	?>
	<form action="league_update_work.php" method="post">
		League ID:<input type="text" name="update_lid" value=<?php echo $update_lid;?>><br>
		Name:<input type="text" name="update_lname" value=<?php echo $update_lname;?>><br>
		
		W:<input type="text" name="update_w" value=<?php echo $update_w;?>><br>
		MP:<input type="text" name="update_mp" value=<?php echo $update_mp;?>><br>
		D:<input type="text" name="update_d" value=<?php echo $update_d;?>><br>
		L:<input type="text" name="update_l" value=<?php echo $update_l;?>><br>
		GD:<input type="text" name="update_gd" value=<?php echo $update_gd;?>><br>
		Pts:<input type="text" name="update_pts" value=<?php echo $update_pts;?>><br>
		<input type="hidden" name="update_lid" value=<?php echo $update_lid;?>>
		<input type="submit" value="SUBMIT">
	</form>

</body>
</html>