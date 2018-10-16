<?php
require_once("connect.php");
if(isset($_SESSION["uname"])){
	header("Location:index.php");
	die;
} 
if($_POST){
	$user=$_POST["uname"];
	$pass=$_POST["pass"];
	$sql=mysqli_query($conn, "select * from anggota WHERE username='$user' AND password='$pass'") or die(mysqli_error($conn));
	
	if(mysqli_num_rows($sql) > 0)
	{
		//data ketemu
		//session_register("username");
		$info="Match Redicting you to Home";
		echo "<script> alert('$info');</script>";
		$_SESSION["uname"]=$user;
		$_SESSION["pass"]=$pass;
		header("Location:index.php");
	} 
	else {
		$info="Username or Password did not match ";
		echo "<script>alert('$info');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<meta charset ="utf-8">
	<title>Login</title>
</head>
<body>
	<nav class="navbar navbar-default" style="background-color: #CDDFF4">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="true">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">KPop Store</a>
			</div>
			<div class="navbar-collapse collapse in" id="myNavbar" aria-expanded="true" style>
				<ul class="nav navbar-nav navbar-left">
					<li class> <a href="album.php">Album</a></li>
					<li class> <a href="merch.php">Merchandise</a></li>
					<li class> <a href="aboutus.php">About Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class = "container">
		<div class="login">
			<h1>Login<h1>
			<form action="" method="post">
				<input type="text" name="uname" placeholder="Username" style="border-radius: 8px;"><br>
				<input type="password" name="pass" placeholder="Password" style="border-radius: 8px;"><br>
				<input type="submit" name="submit" value="Login" placeholder="Submit" style="border-radius: 8px;">
			</form>
			<div class="help">
				Don't have an account? <a href="register.php">Register Here</a>
			 </div>
		</div>
	</div>

	<!-- FOOTER -->
	<footer class="container-fluid text-center">
		<a href="#here" title="To Top"> 
			<span class="glyphicon glyphicon-chevron-up"> </span>
		</a>
		<p style="color: #ffffff">
			Made by Dea, Karina, Novita, Valerie
		</p>
	</footer>
</body>
</html>