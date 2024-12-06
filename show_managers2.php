<html lang="en">
	<head>
		<title> Info about manager </title>
		<link rel="stylesheet" href="style6.css">
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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A; font-size: 200%;"> Football Management System </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home2.php" style="margin-left: 20px;"> Home </a>
				<a href="show_success_manager.php" style="margin-left: 20px;"> Most Successful Manager </a>
				<a href="show_rich_manager.php" style="margin-left: 20px;"> Most Wealthy Manager </a>
			</div>
		</div>
	</section>
	<section id = "section1" >
		<div class="title" style="font-size: 30px;color:#ba68c8; font-size: 100%;"> Info about manager </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;">
			<div class="row" style="padding:5px;"> 
				<table style="width: 80%;">
					<tr>
						<th><div class="col-md-3">  Manager id </div></th>
						<th><div class="col-md-3">  Manager Name </div></th>
						<th><div class="col-md-3">  Salary </div></th>
						<th><div class="col-md-3">  Trophies </div></th>
						<th><div class="col-md-3">  Previous Club </div></th>
						<th><div class="col-md-3">  Club Managing </div></th>
					</tr>
		
			</div>
			
			<?php
			require_once("DBconnect.php");
			$sql = "SELECT manager.m_id, manager.mname, manager.man_salary, manager.mtrophies, manager.man_prev_club, club.club_name FROM manager, club WHERE club.m_id=manager.m_id";
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