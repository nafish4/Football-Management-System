<html lang="en">
	<head>
		<title> Info about clubs </title>
		<link rel="stylesheet" href="style7.css">
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
				<a href="add_club.php" style="margin-left: 20px;"> Add Club </a>
				<a href="show_success_club.php" style="margin-left: 20px;"> Most Successful Clubs </a>
				<a href="show_profit_club.php" style="margin-left: 20px;"> Most Wealthy Clubs </a>
			</div>
		</div>
	</section>
	<section id = "section1">
		<div class="title" style="font-size: 30px;color:#ba68c8; font-size: 100%;"> Info about clubs </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;">
			<div class="row" style="padding:5px;"> 
				<table style="width: 80%;">
					<tr>
						<th><div class="col-md-3">  Club id </div></th>
						<th><div class="col-md-3">  Club Name </div></th>
						<th><div class="col-md-3">  Stadium </div></th>
						<th><div class="col-md-3">  Ticket sale </div></th>
						<th><div class="col-md-3">  Shirt sale </div></th>
						<th><div class="col-md-3">  Trophies </div></th>
						<th><div class="col-md-3">  League id </div></th>
						<th><div class="col-md-3">  Manager id </div></th>
						<th><div class="col-md-3">  Edit </div></th>
						<th><div class="col-md-3">  Delete </div></th>
					</tr>
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM `club`";
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
					<td><div class="col-md-3">  <?php echo $row[7] ?> </div></td>
					<td>
						<form action="club_update.php" method="post">
						<input type="hidden" name="update_clubid" value=<?php echo $row[0];?>>
						<input type="hidden" name="update_clubname" value=<?php echo $row[1];?>>
						<input type="hidden" name="update_stadium" value=<?php echo $row[2];?>>
						<input type="hidden" name="update_ts" value=<?php echo $row[3];?>>
						<input type="hidden" name="update_ss" value=<?php echo $row[4];?>>
						<input type="hidden" name="update_trophies" value=<?php echo $row[5];?>>
						<input type="hidden" name="update_leagueid" value=<?php echo $row[6];?>>
						<input type="hidden" name="update_mid" value=<?php echo $row[7];?>>
						<input type="submit" value="Edit">
						</form>
					</td>
					<td>
						<form action="club_delete.php" method="post">
						<input type="hidden" name="delete_club" value=<?php echo $row[0];?>>
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
	</body>