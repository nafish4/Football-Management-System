<html lang="en">
	<head>
		<title> Info about stats </title>
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


			</div>
		</div>
	</section>
	<section id = "section1">
		<div class="title" style="font-size: 30px;color:#ba68c8; font-size: 100%;"> Statistics </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;">
			<div class="row" style="padding:5px;"> 
				<table style="width: 80%;">
					<tr>
						<th><div class="col-md-3">  Season </div></th>
						<th><div class="col-md-3">  Player id </div></th>
						<th><div class="col-md-3">  Player Name </div></th>
						<th><div class="col-md-3">  Goal </div></th>
						<th><div class="col-md-3">  Assist </div></th>
						<th><div class="col-md-3">  Clean Sheet </div></th>
						<th><div class="col-md-3">  Red Card </div></th>
						<th><div class="col-md-3">  Yellow Card </div></th>

					</tr>
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql ="SELECT statistics.season, statistics.P_id, player.Pname, statistics.goal, statistics.assist, statistics.clean_sheet, statistics.red_card, statistics.yellow_card from statistics, player WHERE statistics.P_id=player.P_id";
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