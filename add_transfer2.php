<html lang="en">
	<head>
		<title> Add new transfer </title>
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
		<div class="title"> Add a New Transfer  </div>
		
		<form action="insert_transfer2.php" class="form_design" method="post">
			Transfer Window: <input type="text" name="tw"> <br/>
			Player iD: <input type="text" name="pid"> <br/> 
			Club iD: <input type="text" name="cid"> <br/>
			Club bought: <input type="text" name="cb"> <br/>
			Loan Club: <input type="text" name="lc"> <br/>
			Duration: <input type="text" name="duration"> <br/>
			Buy For: <input type="text" name="bo"> <br/>
			Release Clause: <input type="text" name="rc"> <br/>
			Club Interested: <input type="text" name="ci"> <br/>
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>
	</body>
</html>
