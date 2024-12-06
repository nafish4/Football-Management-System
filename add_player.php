<html lang="en">
	<head>
		<title> Add new player </title>
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
		<div class="title"> Add a New Player  </div>
		
		<form action="insert_player.php" class="form_design" method="post">
			Player iD: <input type="text" name="pid"> <br/>
			Name: <input type="text" name="n"> <br/> 
			Salary: <input type="text" name="s"> <br/>
			Position: <input type="text" name="p"> <br/>
			Trophies: <input type="text" name="t"> <br/>
			Previous Club: <input type="text" name="pc"> <br/>
			Injury time: <input type="text" name="i"> <br/>
			Injury type: <input type="text" name="it"> <br/>
			Club id: <input type="text" name="cid"> <br/>
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>
	</body>
</html>