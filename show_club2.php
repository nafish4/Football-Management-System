<html lang="en">
	<head>
		<title> Info about clubs </title>
	</head>
	<body>
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Football Management System </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home.php" style="margin-left: 20px;"> Home </a>
				<a href="add_club.php" style="margin-left: 20px;"> Add Club </a>
				<a href="#" style="margin-left: 20px;"> Most Successful Clubs </a>
				<a href="#" style="margin-left: 20px;"> Most Wealthy Clubs </a>
			</div>
		</div>
	</section>
	<?php
	require("DBconnect.php");
	$sql = "SELECT * FROM `club`";
	$result=mysqli_query($conn,$sql);
	?>
  	<table>
	<tr>
		<th>Club ID</th>
		<th>Club Name</th>
		<th>League</th>
		<th>Stadium</th>
		<th>Points</th>
		<th>Goal Difference</th>
		<th>Ticket Sale</th>
		<th>Shirt Sale</th>
		<th>Trophies</th>
		<th></th>
		<th></th>
		
	</tr>
	<?php 
		while ($row=mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $row["club_id"];?></td>
			<td><?php echo $row["club_name"];?></td>
			<td><?php echo $row["league"];?></td>
			<td><?php echo $row["stadium"];?></td>
			<td><?php echo $row["points"];?></td>
			<td><?php echo $row["goal_difference"];?></td>
			<td><?php echo $row["ticket_sale"];?></td>
			<td><?php echo $row["shirt_sale"];?></td>
			<td><?php echo $row["trophies"];?></td>
			<td>
				<form action="club_update.php" method="post">
				<input type="hidden" name="update_clubid" value=<?php echo $row["club_id"];?>>
				<input type="hidden" name="update_clubname" value=<?php echo $row["club_name"];?>>
				<input type="hidden" name="update_league" value=<?php echo $row["league"];?>>
				<input type="hidden" name="update_stadium" value=<?php echo $row["stadium"];?>>
				<input type="hidden" name="update_points" value=<?php echo $row["points"];?>>
				<input type="hidden" name="update_gf" value=<?php echo $row["goal_difference"];?>>
				<input type="hidden" name="update_ts" value=<?php echo $row["ticket_sale"];?>>
				<input type="hidden" name="update_ss" value=<?php echo $row["shirt_sale"];?>>
				<input type="hidden" name="update_trophies" value=<?php echo $row["trophies"];?>>
				<input type="submit" value="Edit">
				</form>
			</td>

			<td>
				<form action="club_delete.php" method="post">
				<input type="hidden" name="delete_club" value=<?php echo $row["club_id"];?>>
				<input type="submit" value="Delete">
				</form>
			</td>
		</tr>
		<?php
		}?>
	</body>
	</table>
</html>