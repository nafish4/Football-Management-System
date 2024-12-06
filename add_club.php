<html lang="en">
	<head>
		<title> Add new club </title>
		<link rel="stylesheet" type="text/css" href="style3.css">
	</head>
	<style>
		body{
			background-color: #A9C9FF;



		}
	</style>

	<body>
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Football Management System </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home.php"> Home </a> 
			</div>
		</div>
	</section>
	<section id = "section1">
		<div class="title"> Add a New Club  </div>
		
		<form action="insert_club.php" class="form_design" method="post">
			Club iD: <input type="text" name="cid"> <br/>
			Club Name: <input type="text" name="cn"> <br/> 
			Stadium: <input type="text" name="s"> <br/>
			Ticket sale: <input type="text" name="ts"> <br/>
			Shirt sale: <input type="text" name="ss"> <br/>
			Trophies: <input type="text" name="t"> <br/>
			League iD: <input type="text" name="l"> <br/>
			Manager iD: <input type="text" name="m"> <br/>
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>
	</body>
</html>
