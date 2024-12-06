<html lang="en">
	<head>
		<title> Info about league </title>
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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Football Management System </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home.php" style="margin-left: 20px;"> Home </a>
				<a href="add_league.php" style="margin-left: 20px;"> Add Club </a>

			</div>
		</div>
	</section>
	<section id = "section1" style="font-size: 30px;color:#ba68c8; font-size: 100%;">
		<div class="title"> Info about league </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;">
			<div class="row" style="padding:5px;"> 
				<table style="width: 80%;">
					<tr>
						<th><div class="col-md-3">  Name </div></th>
						<th><div class="col-md-3">  League Id </div></th>
						<th><div class="col-md-3">  League Name </div></th>
						<th><div class="col-md-3">  W </div></th>
						<th><div class="col-md-3">  MP </div></th>
						<th><div class="col-md-3">  D </div></th>
						<th><div class="col-md-3">  L </div></th>
						<th><div class="col-md-3">  GD </div></th>
						<th><div class="col-md-3">  pts </div></th>
						<th><div class="col-md-3">  Edit </div></th>
						<th><div class="col-md-3">  Delete </div></th>
					</tr>
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT club.club_name, league.league_id, league.league_name, league.W, league.MP, league.D, league.L, league.GD, league.pts FROM club, league WHERE club.league_id=league.league_id";
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
					<td>
						<form action="league_update.php" method="post">
						<input type="hidden" name="update_lid" value=<?php echo $row[1];?>>
						<input type="hidden" name="update_lname" value=<?php echo $row[2];?>>
						<input type="hidden" name="update_w" value=<?php echo $row[3];?>>
						<input type="hidden" name="update_mp" value=<?php echo $row[4];?>>
						<input type="hidden" name="update_d" value=<?php echo $row[5];?>>
						<input type="hidden" name="update_l" value=<?php echo $row[6];?>>
						<input type="hidden" name="update_gd" value=<?php echo $row[7];?>>
						<input type="hidden" name="update_pts" value=<?php echo $row[8];?>>
						<input type="submit" value="Edit">
						</form>
					</td>
					<td>
						<form action="league_delete.php" method="post">
						<input type="hidden" name="delete_league" value=<?php echo $row[1];?>>
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