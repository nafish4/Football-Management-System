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
	<h1> Update on "<?php echo $_POST['update_mid'];?>"</h1>
	<?php
	require("DBconnect.php");
	$update_mid=$_POST['update_mid'];
	$update_mname=$_POST['update_mname'];

	$update_salary=$_POST['update_salary'];
	$update_trophies=$_POST['update_trophies'];
	$update_prevclub=$_POST['update_prevclub'];
	$sql="SELECT * FROM `Manager` WHERE `m_id` LIKE 'update_mid'";
	$result=mysqli_query($conn,$sql);
	?>
	<form action="manager_update_work.php" method="post">
		Manager ID:<input type="text" name="update_mid" value=<?php echo $update_mid;?>><br>
		Name:<input type="text" name="update_mname" value=<?php echo $update_mname;?>><br>
		
		Salary:<input type="text" name="update_salary" value=<?php echo $update_salary;?>><br>
		Trophies:<input type="text" name="update_trophies" value=<?php echo $update_trophies;?>><br>
		Previous Club:<input type="text" name="update_prevclub" value=<?php echo $update_prevclub;?>><br>
		<input type="hidden" name="update_mid" value=<?php echo $update_mid;?>>
		<input type="submit" value="SUBMIT">
	</form>

</body>
</html>