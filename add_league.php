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
		
		<form action="insert_league.php" class="form_design" method="post">
			League Id: <input type="text" name="lid"> <br/> 
			League Name: <input type="text" name="ln"> <br/>
			W: <input type="text" name="w"> <br/>
			MP: <input type="text" name="mp"> <br/>
			D: <input type="text" name="d"> <br/>
			L: <input type="text" name="l"> <br/>
			GD: <input type="text" name="gd"> <br/>
			pts: <input type="text" name="p"> <br/>
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>
	</body>
</html>