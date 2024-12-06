<html lang="en">
	<head>
		<title> Add new user </title>
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
				<a href="index.php"> Login Page </a> 
			</div>
		</div>
	</section>
	<section id = "section1">
		<div class="title"> Add a New User  </div>
		
		<form action="insert_user.php" class="form_design" method="post">
			Username: <input type="text" name="u"> <br/>
			Password: <input type="text" name="p"> <br/> 
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>
	</body>
</html>
