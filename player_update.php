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
	<h1> Update on "<?php echo $_POST['update_pid'];?>"</h1>
	<?php
	require("DBconnect.php");
	$update_pid=$_POST['update_pid'];
	$update_pname=$_POST['update_pname'];

	$update_salary=$_POST['update_salary'];
	$update_position=$_POST['update_position'];
	$update_trophies=$_POST['update_trophies'];
	$update_prev_club=$_POST['update_prev_club'];
	$update_injurytime=$_POST['update_injurytime'];
	$update_injurytype=$_POST['update_injurytype'];

	$update_clubid=$_POST['update_clubid'];
	$sql="SELECT * FROM `player` WHERE `P_id` LIKE 'update_pid'";
	$result=mysqli_query($conn,$sql);
	?>
	<form action="player_update_work.php" method="post">
		Player ID:<input type="text" name="update_pid" value=<?php echo $update_pid;?>><br>
		Name:<input type="text" name="update_pname" value=<?php echo $update_pname;?>><br>
		
		Salary:<input type="text" name="update_salary" value=<?php echo $update_salary;?>><br>
		Position:<input type="text" name="update_position" value=<?php echo $update_position;?>><br>
		Trophies:<input type="text" name="update_trophies" value=<?php echo $update_trophies;?>><br>
		Previous Club:<input type="text" name="update_prev_club" value=<?php echo $update_prev_club;?>><br>
		Injury time:<input type="text" name="update_injurytime" value=<?php echo $update_injurytime;?>><br>
		Injury type:<input type="text" name="update_injurytype" value=<?php echo $update_injurytype;?>><br>
		Club ID:<input type="text" name="update_clubid" value=<?php echo $update_clubid;?>><br>
		<input type="hidden" name="update_pid" value=<?php echo $update_pid;?>>
		<input type="submit" value="SUBMIT">
	</form>

</body>
</html>