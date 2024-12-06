<html lang="en">
	<head>
		<title> Info about player </title>
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
			<div class="col-md-2"> Football Management System </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home.php" style="margin-left: 20px;"> Home </a>
				<a href="add_player_prev.php" style="margin-left: 20px;"> Add previous club </a>
			</div>
		</div>
	</section>
	<section id = "section1">
		<div class="title"> Info about player </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;">
			<div class="row" style="padding:5px;"> 
				<table style="width: 80%;">
					<tr>
						<th><div class="col-md-3">  Player iD </div></th>
						<th><div class="col-md-3">  Previous club </div></th>
						<th><div class="col-md-3">  Previous Name </div></th>
						<th><div class="col-md-3">  Delete </div></th>
					</tr>
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT player_prev_club.P_id, player_prev_club.prev_club, player.Pname FROM player_prev_club, player WHERE player_prev_club.P_id=player.P_id";
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

					<td>
						<form action="player_prev_delete.php" method="post">
						<input type="hidden" name="delete_pp" value=<?php echo $row[0];?>>
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