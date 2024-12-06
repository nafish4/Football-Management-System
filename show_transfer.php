<html lang="en">
	<head>
		<title> Info about clubs </title>
		<link rel="stylesheet" type="text/css" href="style2.css">
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
				<a href="add_transfer.php" style="margin-left: 20px;"> Add Club </a>
				<a href="#" style="margin-left: 20px;"> Most Successful Clubs </a>
				<a href="#" style="margin-left: 20px;"> Most Wealthy Clubs </a>
			</div>
		</div>
	</section>
	<section id = "section1">
		<div class="title"> Info about clubs </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;">
			<div class="row" style="padding:5px;"> 
				<table style="width: 100%;">
					<tr>
						<th><div class="col-md-3">  Transfer Window </div></th>
						<th><div class="col-md-3">  Player name </div></th>
						<th><div class="col-md-3">  Club name</div></th>
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
			$sql = "SELECT * FROM `transfer_market`";
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
						<form action="transfer_update.php" method="post">
						<input type="hidden" name="update_tw" value=<?php echo $row[0];?>>
						<input type="hidden" name="update_pid" value=<?php echo $row[1];?>>
						<input type="hidden" name="update_cid" value=<?php echo $row[2];?>>
						<input type="hidden" name="update_cb" value=<?php echo $row[3];?>>
						<input type="hidden" name="update_lc" value=<?php echo $row[4];?>>
						<input type="hidden" name="update_duration" value=<?php echo $row[5];?>>
						<input type="hidden" name="update_bo" value=<?php echo $row[6];?>>
						<input type="hidden" name="update_rc" value=<?php echo $row[7];?>>
						<input type="hidden" name="update_ci" value=<?php echo $row[8];?>>
						<input type="submit" value="Edit">
						</form>
					</td>
					<td>
						<form action="transfer_delete.php" method="post">
						<input type="hidden" name="delete_transfer" value=<?php echo $row[0];?>>
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