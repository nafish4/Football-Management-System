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
		<div class="title"> Add a New Stat  </div>
		
		<form action="insert_stat.php" class="form_design" method="post">
			season <input type="text" name="season"> <br/> 
			Player id: <input type="text" name="Pid"> <br/>
			Goal: <input type="text" name="g"> <br/>
			Assist: <input type="text" name="a"> <br/>
			Clean Sheet: <input type="text" name="cs"> <br/>
			Red Card: <input type="text" name="rc"> <br/>
			Yellow Card: <input type="text" name="yc"> <br/>
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>
	</body>
</html>