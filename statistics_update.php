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
	<h1> Update on "<?php echo $_POST['update_s'];?>"</h1>
	<?php
	require("DBconnect.php");
	$update_s=$_POST['update_s'];
	$update_pid=$_POST['update_pid'];

	$update_g=$_POST['update_g'];
	$update_a=$_POST['update_a'];
	$update_cs=$_POST['update_cs'];
	$update_r=$_POST['update_r'];
	$update_y=$_POST['update_y'];
	$sql="SELECT * FROM `statistics` WHERE `season` LIKE 'update_s'";
	$result=mysqli_query($conn,$sql);
	?>
	<form action="statistics_update_work.php" method="post">
		Season:<input type="text" name="update_s" value=<?php echo $update_s;?>><br>
		Player Id:<input type="text" name="update_pid" value=<?php echo $update_pid;?>><br>
		
		Goals:<input type="text" name="update_g" value=<?php echo $update_g;?>><br>
		Assists:<input type="text" name="update_a" value=<?php echo $update_a;?>><br>
		Clean Sheets:<input type="text" name="update_cs" value=<?php echo $update_cs;?>><br>
		Red Card:<input type="text" name="update_r" value=<?php echo $update_r;?>><br>
		Yellow Card:<input type="text" name="update_y" value=<?php echo $update_y;?>><br>

		<input type="hidden" name="update_s" value=<?php echo $update_s;?>>
		<input type="submit" value="SUBMIT">
	</form>

</body>
</html>
