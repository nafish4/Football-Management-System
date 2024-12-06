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
	<h1> Update on "<?php echo $_POST['update_clubid'];?>"</h1>
	<?php
	require("DBconnect.php");
	$update_clubid=$_POST['update_clubid'];
	$update_clubname=$_POST['update_clubname'];

	$update_stadium=$_POST['update_stadium'];
	$update_ts=$_POST['update_ts'];
	$update_ss=$_POST['update_ss'];
	$update_trophies=$_POST['update_trophies'];
	$update_leagueid=$_POST['update_leagueid'];
	$update_mid=$_POST['update_mid'];
	$sql="SELECT * FROM `club` WHERE `club_id` LIKE 'update_clubid'";
	$result=mysqli_query($conn,$sql);
	?>
	<form action="club_update_work.php" method="post">
		Club ID:<input type="text" name="update_clubid" value=<?php echo $update_clubid;?>><br>
		Name:<input type="text" name="update_clubname" value=<?php echo $update_clubname;?>><br>
		
		Stadium:<input type="text" name="update_stadium" value=<?php echo $update_stadium;?>><br>
		Ticket Sale:<input type="text" name="update_ts" value=<?php echo $update_ts;?>><br>
		Shirt Sale:<input type="text" name="update_ss" value=<?php echo $update_ss;?>><br>
		Trophies:<input type="text" name="update_trophies" value=<?php echo $update_trophies;?>><br>
		League ID:<input type="text" name="update_leagueid" value=<?php echo $update_leagueid;?>><br>
		Manager ID:<input type="text" name="update_mid" value=<?php echo $update_mid;?>><br>
		<input type="hidden" name="update_clubid" value=<?php echo $update_clubid;?>>
		<input type="submit" value="SUBMIT">
	</form>

</body>
</html>