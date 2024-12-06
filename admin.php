<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
<style>
h1{
	color: blue;
	font-family: verdana;
	font-size: 200%;
	text-align: left;
	
}
body {
  background-image: url("football.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

</style>
</head>
<body>
<h1>Football<br> Management <br> System</h1>
<section id = "section1">
	<div class="title "style="font-size: 30px; color:#F2674A; text-align: left;"> SIGN IN </div>
	<form action="signin2.php" class="form_design" method="post">
		Username: <input type="text" name="fname"> <br/>
		Password: <input type="password" name="pass"> <br/> <br/>
		<input type="submit" value="Sign In"> <br/>

	</form>
</section>
</body>
</html>