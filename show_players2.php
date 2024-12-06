<html lang="en">
	<head>
		<title> Info about player </title>
		<link rel="stylesheet" href="style12.css">
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
				<a href="home2.php" style="margin-left: 20px;"> Home </a>
				<a href="show_success_player.php" style="margin-left: 20px;"> Most Successful Player </a>
				<a href="show_rich_player.php" style="margin-left: 20px;"> Most Wealthy Player </a>
			</div>
		</div>
	</section>
	<section id = "section1" style="font-size: 30px;color:#ba68c8; font-size: 100%;">
		<div class="title"> Info about player </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;">
			<div class="row" style="padding:5px;"> 
				<table style="width: 80%;">
					<tr>
						<th><div class="col-md-3">  Player id </div></th>
						<th><div class="col-md-3">  Name </div></th>
						<th><div class="col-md-3">  Salary </div></th>
						<th><div class="col-md-3">  Position </div></th>
						<th><div class="col-md-3">  Trophies </div></th>
						<th><div class="col-md-3">  Previous Club </div></th>
						<th><div class="col-md-3">  Injury Time </div></th>
						<th><div class="col-md-3">  Injury Type </div></th>
						<th><div class="col-md-3">  Club Id </div></th>
						<th><div class="col-md-3">  Club Name </div></th>

					</tr>
		
			</div>
			
			<?php
			require_once("DBconnect.php");
			$sql = "SELECT player.P_id, player.Pname, player.salary, player.position, player.ptrophies, player.prev_club, player.injury_time, player.injury_type, player.club_id, club.club_name FROM player, club WHERE player.club_id=club.club_id";
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
					<td><div class="col-md-3">  <?php echo $row[8] ?> </div></td>
					<td><div class="col-md-3">  <?php echo $row[9] ?> </div></td>

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