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
	<h1> Update on "<?php echo $_POST['update_fid'];?>"</h1>
	<?php
	require("DBconnect.php");
	$update_fid=$_POST['update_fid'];
	$update_hc=$_POST['update_hc'];

	$update_ac=$_POST['update_ac'];
	$update_hs=$_POST['update_hs'];
	$update_as=$_POST['update_as'];
	$update_d=$_POST['update_d'];
	$update_t=$_POST['update_t'];
	$sql="SELECT * FROM `fixture` WHERE `fixture_id` LIKE 'update_fid'";
	$result=mysqli_query($conn,$sql);
	?>
	<form action="fixture_update_work.php" method="post">
		Fixture ID:<input type="text" name="update_fid" value=<?php echo $update_fid;?>><br>
		Home Club:<input type="text" name="update_hc" value=<?php echo $update_hc;?>><br>
		
		Away Club:<input type="text" name="update_ac" value=<?php echo $update_ac;?>><br>
		Home Score:<input type="text" name="update_hs" value=<?php echo $update_hs;?>><br>
		Away Score:<input type="text" name="update_as" value=<?php echo $update_as;?>><br>
		Date:<input type="text" name="update_d" value=<?php echo $update_d;?>><br>
		Time:<input type="text" name="update_t" value=<?php echo $update_t;?>><br>
		
		<input type="hidden" name="update_fid" value=<?php echo $update_fid;?>>
		<input type="submit" value="SUBMIT">
	</form>

</body>
</html>