<html lang="en">
	<head>
		<title> Info about fixture </title>
		<link rel="stylesheet" href="style10.css">
	</head>
	<style>
		body{
			background-color: #A9C9FF;
			background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%);



		}
	</style>
	<body>
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Football Management System </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home.php" style="margin-left: 20px;"> Home </a>
				<a href="add_fixture.php" style="margin-left: 20px;"> Add Fixture </a>

		</div>
	</section>
	<section id = "section1">
		<div class="title" style="font-size: 30px;color:#ba68c8; font-size: 100%;"> Info about fixture </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;">
			<div class="row" style="padding:5px;"> 
				<table style="width: 80%;">
					<tr>
						<th><div class="col-md-3">  Fixture ID</div></th>
						<th><div class="col-md-3">  Home club </div></th>
						<th><div class="col-md-3">  Away club </div></th>
						<th><div class="col-md-3">  Home score </div></th>
						<th><div class="col-md-3">  Away score </div></th>
						<th><div class="col-md-3">  date </div></th>
						<th><div class="col-md-3">  time </div></th>
						<th><div class="col-md-3">  Edit </div></th>
						<th><div class="col-md-3">  Delete </div></th>
					</tr>
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM `fixture`";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;">
				<tr>
					<td><div class="col-md-3">  <?php echo $row[0]; ?> </div></td>
					<td><div class="col-md-3">  <?php echo $row[1] ; ?></div></td>
					<td><div class="col-md-3">  <?php echo $row[2] ?> </div></td>
					<td><div class="col-md-3">  <?php echo $row[3] ?> </div></td>
					<td><div class="col-md-3">  <?php echo $row[4] ?> </div></td>
					<td><div class="col-md-3">  <?php echo $row[5] ?> </div></td>
					<td><div class="col-md-3">  <?php echo $row[6] ?> </div></td>
					<td>
						<form action="fixture_update.php" method="post">
						<input type="hidden" name="update_fid" value=<?php echo $row[0];?>>
						<input type="hidden" name="update_hc" value=<?php echo $row[1];?>>
						<input type="hidden" name="update_ac" value=<?php echo $row[2];?>>
						<input type="hidden" name="update_hs" value=<?php echo $row[3];?>>
						<input type="hidden" name="update_as" value=<?php echo $row[4];?>>
						<input type="hidden" name="update_d" value=<?php echo $row[5];?>>
						<input type="hidden" name="update_t" value=<?php echo $row[6];?>>
						<input type="submit" value="Edit">
						</form>
					</td>
					<td>
						<form action="fixture_delete.php" method="post">
						<input type="hidden" name="delete_fixture" value=<?php echo $row[0];?>>
						<input type="submit" value="Delete">
						</form>
					</td>
				</tr>
			</div>
			
			<?php 
				}					
			}
			?>
			</table>
		</div>
		
	</section>