<html lang="en">
	<head>
		<title> Info about transfers </title>
		<link rel="stylesheet" type="text/css" href="style11.css">
		
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
		<div class="title" style="font-size: 30px;color:#ba68c8; font-size: 100%;"> Info about transfers </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;">
			<div class="row" style="padding:5px;"> 
				<table style="width: 90%;">
					<tr>
						<th><div class="col-md-3">  Transfer Window </div></th>
						<th><div class="col-md-3">  Player iD </div></th>
						<th><div class="col-md-3">  Club iD</div></th>
						<th><div class="col-md-3">  Club bought </div></th>
						<th><div class="col-md-3">  Loan Club </div></th>
						<th><div class="col-md-3">  Duration </div></th>
						<th><div class="col-md-3">  Bought For </div></th>
						<th><div class="col-md-3">  Release Clause </div></th>
						<th><div class="col-md-3">  Club Interest </div></th>

						
						
						<th><div class="col-md-3">  Edit </div></th>
						<th><div class="col-md-3">  Delete </div></th>
					</tr>
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT transfer_market.transfer_window, transfer_market.P_id, transfer_market.club_id, transfer_market.club_bought, transfer_market.loan_club, transfer_market.duration, transfer_market.buy_option, transfer_market.release_clause, transfer_market.club_interest, club.club_name, player.Pname FROM player, transfer_market, club WHERE transfer_market.P_id=player.P_id AND transfer_market.club_id=club.club_id AND player.club_id=club.club_id";
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
					<td><div class="col-md-3">  <?php echo $row[10] ?> </div></td>

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