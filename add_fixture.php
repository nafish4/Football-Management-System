<html lang="en">
	<head>
		<title> Add new fixture </title>
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
		<div class="title"> Add a New Fixture  </div>
		
		<form action="insert_fixture.php" class="form_design" method="post">
			Fixture iD: <input type="text" name="fid"> <br/>
			Home Club: <input type="text" name="hc"> <br/> 
			Away Club: <input type="text" name="ac"> <br/>
			Home Score: <input type="text" name="hs"> <br/>
			Away Score: <input type="text" name="as"> <br/>
			Date: <input type="text" name="d"> <br/>
			Time: <input type="text" name="t"> <br/>
	
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>
	</body>
</html>